<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use App\Models\User;
use App\Models\InvoiceTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceMailable;
use Barryvdh\DomPDF\Facade\Pdf;

class ManualInvoiceController extends Controller
{
    public function create()
    {
        $users = User::orderBy('name')->get();
        $templates = InvoiceTemplate::orderBy('name')->get();
        return view('admin.submissions.manual_create', compact('users', 'templates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'invoice_template_id' => 'nullable|exists:invoice_templates,id',
            // ... (rest of validation)
            'new_user_name' => 'nullable|required_without:user_id|string|max:255',
            'new_user_email' => 'nullable|required_without:user_id|email|max:255',
            'new_user_phone' => 'nullable|string|max:20',
            'company_name' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'gstin' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'industry_sector' => 'nullable|string|max:255',
            'items' => 'required|array|min:1',
            'items.*.description' => 'required|string',
            'items.*.amount' => 'required|numeric|min:0',
            'payment_status' => 'required|string',
            'signature' => 'nullable|image|max:2048',
        ]);

        $userId = $request->user_id;

        // Create or Update user
        if (!$userId) {
            $user = User::create([
                'name' => $request->new_user_name,
                'email' => $request->new_user_email,
                'phone_number' => $request->new_user_phone,
                'company_name' => $request->company_name,
                'designation' => $request->designation,
                'gstin' => $request->gstin,
                'address' => $request->address,
                'industry_sector' => $request->industry_sector,
                'password' => \Illuminate\Support\Facades\Hash::make(\Illuminate\Support\Str::random(16)),
                'role' => 'user',
                'requires_password_setup' => true
            ]);
            $userId = $user->id;

            // Send welcome mail with password setup
            $token = app('auth.password.broker')->createToken($user);
            $user->notify(new \App\Notifications\WelcomeAndSetupPassword($token));
        } else {
            $user = User::find($userId);
            // Update details if provided
            $user->update($request->only(['company_name', 'designation', 'gstin', 'address', 'industry_sector', 'phone_number']));
        }

        $subtotal = collect($request->items)->sum('amount');
        $taxPercent = $request->input('tax_percent', 0);
        $taxAmount = $subtotal * ($taxPercent / 100);
        $total = $subtotal + $taxAmount;
        
        $invoiceNumber = 'MAN-' . date('Ymd') . '-' . strtoupper(\Illuminate\Support\Str::random(4));

        $data = [
            'tax_label' => $request->input('tax_label', 'Tax'),
            'tax_percent' => $taxPercent,
            'tax_amount' => $taxAmount,
            'subtotal' => $subtotal
        ];
        if ($request->hasFile('signature')) {
            $path = $request->file('signature')->store('uploads/invoices', 'public');
            $data['signature_url'] = '/storage/' . $path;
        }

        $submission = Submission::create([
            'user_id' => $userId,
            'invoice_template_id' => $request->invoice_template_id,
            'items' => $request->items,
            'total_amount_paid' => $total,
            'payment_status' => $request->payment_status,
            'manual_invoice_number' => $invoiceNumber,
            'data' => $data, 
        ]);

        if ($request->has('send_email')) {
            $this->sendEmail($submission);
        }

        return redirect()->route('admin.submissions.index')->with('success', 'Manual invoice created successfully.');
    }

    public function sendEmail(Submission $submission)
    {
        $submission->load(['user', 'invoiceTemplate']);
        
        $template = $submission->invoiceTemplate ?? InvoiceTemplate::where('is_default', true)->first();
        $globalSettings = \App\Models\SiteSetting::pluck('value', 'key')->toArray();
        
        $defaultConfig = [
            'font_family' => 'Helvetica',
            'primary_color' => '#10b981',
            'blocks' => [
                [
                    'type' => 'row',
                    'columns' => [
                        [
                            'width' => '50%',
                            'blocks' => [['type' => 'image', 'src' => 'logo', 'width' => 120, 'align' => 'left']]
                        ],
                        [
                            'width' => '50%',
                            'blocks' => [['type' => 'text', 'content' => "<strong>{{ company_name }}</strong>\n{{ company_address }}", 'align' => 'right', 'size' => 10]]
                        ]
                    ]
                ],
                [
                    'type' => 'row',
                    'spacing_top' => 15,
                    'columns' => [
                        [
                            'width' => '50%',
                            'blocks' => [['type' => 'text', 'content' => "<strong>Bill To:</strong>\n{{ user_name }}\n{{ user_address }}", 'size' => 10]]
                        ],
                        [
                            'width' => '50%',
                            'blocks' => [['type' => 'text', 'content' => "<strong>Invoice No:</strong> {{ invoice_no }}\n<strong>Date:</strong> {{ date }}", 'align' => 'right', 'size' => 10]]
                        ]
                    ]
                ],
                ['type' => 'items_table', 'spacing_top' => 20],
                [
                    'type' => 'row',
                    'spacing_top' => 20,
                    'columns' => [
                        ['width' => '60%', 'blocks' => []],
                        [
                            'width' => '40%',
                            'blocks' => [['type' => 'text', 'content' => "<strong>Total Amount:</strong>\n<span style='font-size:18pt; color:#10b981;'>&#x20B9; {{ total }}</span>", 'align' => 'right']]
                        ]
                    ]
                ]
            ]
        ];

        $invoiceConfig = array_merge($defaultConfig, [
            'company_name' => $globalSettings['company_name'] ?? 'MSME Chamber of Commerce',
            'address' => $globalSettings['address'] ?? 'India',
        ], $template ? $template->config : []);

        // Override with submission specific data if exists
        if(isset($submission->data['signature_url'])) {
            $invoiceConfig['signature_url'] = $submission->data['signature_url'];
        }

        $pdf = Pdf::loadView('pdf.invoice', [
            'submission'    => $submission,
            'form'          => $submission->form,
            'user'          => $submission->user,
            'invoiceConfig' => $invoiceConfig,
        ]);

        \Illuminate\Support\Facades\Mail::to($submission->user->email)->send(new \App\Mail\InvoiceMailable($submission, $pdf->output()));

        return back()->with('success', 'Invoice sent to user email.');
    }
}
