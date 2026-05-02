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

        $total = collect($request->items)->sum('amount');
        $invoiceNumber = 'MAN-' . date('Ymd') . '-' . strtoupper(\Illuminate\Support\Str::random(4));

        $submission = Submission::create([
            'user_id' => $userId,
            'invoice_template_id' => $request->invoice_template_id,
            'items' => $request->items,
            'total_amount_paid' => $total,
            'payment_status' => $request->payment_status,
            'manual_invoice_number' => $invoiceNumber,
            'data' => [], 
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
        $invoiceConfig = array_merge([
            'type' => 'tax',
            'company_name' => 'MSME Chamber of Commerce & Industry',
            'address' => "India's MSME Headquarters\nNew Delhi, India",
            'primary_color' => '#10b981',
            'font_family' => 'Helvetica',
        ], $template ? $template->config : []);

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
