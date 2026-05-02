<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InvoiceTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InvoiceTemplateController extends Controller
{
    public function index()
    {
        $templates = InvoiceTemplate::latest()->paginate(10);
        return view('admin.invoice-designer.index', compact('templates'));
    }

    public function create()
    {
        $template = new InvoiceTemplate();
        $config = $this->getDefaultConfig();
        return view('admin.invoice-designer.form', compact('template', 'config'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'config' => 'required|array',
            'logo' => 'nullable|image|max:2048',
            'signature' => 'nullable|image|max:2048'
        ]);

        $data = $request->input('config');
        if (is_string($data)) {
            $data = json_decode($data, true);
        }
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('uploads/invoices', 'public');
            $data['logo_url'] = '/storage/' . $path;
        }

        if ($request->hasFile('signature')) {
            $path = $request->file('signature')->store('uploads/invoices', 'public');
            $data['signature_url'] = '/storage/' . $path;
        }

        $template = InvoiceTemplate::create([
            'name' => $request->name,
            'config' => $data,
            'is_default' => $request->has('is_default')
        ]);

        if ($template->is_default) {
            InvoiceTemplate::where('id', '!=', $template->id)->update(['is_default' => false]);
        }

        return redirect()->route('admin.invoice-designer.index')->with('success', 'Invoice template created successfully.');
    }

    public function edit(InvoiceTemplate $template)
    {
        $config = array_merge($this->getDefaultConfig(), $template->config);
        return view('admin.invoice-designer.form', compact('template', 'config'));
    }

    public function update(Request $request, InvoiceTemplate $template)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'config' => 'required|array',
            'logo' => 'nullable|image|max:2048',
            'signature' => 'nullable|image|max:2048'
        ]);

        $data = $request->input('config');
        if (is_string($data)) {
            $data = json_decode($data, true);
        }
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('uploads/invoices', 'public');
            $data['logo_url'] = '/storage/' . $path;
        }

        if ($request->hasFile('signature')) {
            $path = $request->file('signature')->store('uploads/invoices', 'public');
            $data['signature_url'] = '/storage/' . $path;
        }

        $template->update([
            'name' => $request->name,
            'config' => $data,
            'is_default' => $request->has('is_default')
        ]);

        if ($template->is_default) {
            InvoiceTemplate::where('id', '!=', $template->id)->update(['is_default' => false]);
        }

        return redirect()->route('admin.invoice-designer.index')->with('success', 'Invoice template updated successfully.');
    }

    public function destroy(InvoiceTemplate $template)
    {
        $template->delete();
        return back()->with('success', 'Template deleted successfully.');
    }

    private function getDefaultConfig()
    {
        return [
            'type' => 'tax',
            'font_family' => 'Helvetica',
            'primary_color' => '#10b981',
            'text_color_main' => '#0f172a',
            'text_color_sub' => '#64748b',
            'font_size_body' => 11,
            'blocks' => [
                [
                    'id' => 'block_header',
                    'type' => 'row',
                    'columns' => [
                        [
                            'width' => '50%',
                            'blocks' => [
                                ['type' => 'image', 'src' => 'logo', 'width' => 120, 'align' => 'left'],
                                ['type' => 'text', 'content' => '<h1>Invoice</h1>', 'color' => '#10b981', 'size' => 28]
                            ]
                        ],
                        [
                            'width' => '50%',
                            'blocks' => [
                                ['type' => 'text', 'content' => "<strong>{{ company_name }}</strong>\n{{ company_address }}\nGSTIN: {{ company_gstin }}", 'align' => 'right', 'size' => 10]
                            ]
                        ]
                    ]
                ],
                [
                    'id' => 'block_meta',
                    'type' => 'row',
                    'spacing_top' => 30,
                    'columns' => [
                        [
                            'width' => '50%',
                            'blocks' => [
                                ['type' => 'text', 'content' => "<strong>Bill To:</strong>\n{{ user_name }}\n{{ user_address }}", 'size' => 10]
                            ]
                        ],
                        [
                            'width' => '50%',
                            'blocks' => [
                                ['type' => 'text', 'content' => "<strong>Invoice No:</strong> {{ invoice_no }}\n<strong>Date:</strong> {{ date }}\n<strong>Status:</strong> {{ status }}", 'align' => 'right', 'size' => 10]
                            ]
                        ]
                    ]
                ],
                [
                    'id' => 'block_table',
                    'type' => 'items_table',
                    'header_bg' => '#f8fafc',
                    'header_text' => '#64748b',
                    'border_color' => '#e2e8f0',
                    'spacing_top' => 40
                ],
                [
                    'id' => 'block_totals',
                    'type' => 'row',
                    'spacing_top' => 20,
                    'columns' => [
                        ['width' => '60%', 'blocks' => []],
                        [
                            'width' => '40%',
                            'blocks' => [
                                ['type' => 'text', 'content' => "<div style='border-top:1px solid #eee; padding-top:10px;'><strong>Total Amount:</strong> <span style='font-size:18pt; color:#10b981;'>₹ {{ total }}</span></div>", 'align' => 'right']
                            ]
                        ]
                    ]
                ],
                [
                    'id' => 'block_footer',
                    'type' => 'row',
                    'spacing_top' => 60,
                    'columns' => [
                        [
                            'width' => '60%',
                            'blocks' => [
                                ['type' => 'text', 'content' => "<strong>Terms & Conditions:</strong>\n1. Goods once sold will not be taken back.\n2. Subject to Delhi Jurisdiction.", 'size' => 9, 'color' => '#94a3b8']
                            ]
                        ],
                        [
                            'width' => '40%',
                            'blocks' => [
                                ['type' => 'image', 'src' => 'signature', 'width' => 150, 'align' => 'right'],
                                ['type' => 'text', 'content' => 'Authorized Signatory', 'align' => 'right', 'size' => 10, 'weight' => 'bold']
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }
}
