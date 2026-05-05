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
        $presets = $this->getPresets();
        return view('admin.invoice-designer.form', compact('template', 'config', 'presets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'config' => 'required',
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
        $presets = $this->getPresets();
        return view('admin.invoice-designer.form', compact('template', 'config', 'presets'));
    }

    public function update(Request $request, InvoiceTemplate $template)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'config' => 'required',
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
            'line_height' => 1.2,
            'letter_spacing' => 0,
            'blocks' => [
                [
                    'id' => 'block_header',
                    'type' => 'row',
                    'columns' => [
                        [
                            'width' => '50%',
                            'blocks' => [
                                ['type' => 'image', 'src' => 'logo', 'width' => 120, 'align' => 'left'],
                                ['type' => 'text', 'content' => '<h1>Invoice</h1>', 'color' => '#10b981', 'size' => 28, 'margin_bottom' => 10]
                            ]
                        ],
                        [
                            'width' => '50%',
                            'blocks' => [
                                ['type' => 'text', 'content' => "<strong>{{ company_name }}</strong>\n{{ company_address }}\nGSTIN: {{ company_gstin }}", 'align' => 'right', 'size' => 10, 'line_height' => 1.4]
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
                                ['type' => 'text', 'content' => "<strong>Bill To:</strong>\n{{ user_name }}\n{{ user_address }}", 'size' => 10, 'line_height' => 1.4]
                            ]
                        ],
                        [
                            'width' => '50%',
                            'blocks' => [
                                ['type' => 'text', 'content' => "<strong>Invoice No:</strong> {{ invoice_no }}\n<strong>Date:</strong> {{ date }}\n<strong>Status:</strong> {{ status }}", 'align' => 'right', 'size' => 10, 'line_height' => 1.6]
                            ]
                        ]
                    ]
                ],
                [
                    'id' => 'block_table',
                    'type' => 'items_table',
                    'header_bg' => '#f8fafc',
                    'header_text' => '#64748b',
                    'border_color' => '#cbd5e1',
                    'spacing_top' => 40,
                    'row_size' => 10,
                    'footer_size' => 10
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
                                ['type' => 'text', 'content' => "<strong>Terms & Conditions:</strong>\n1. Goods once sold will not be taken back.\n2. Subject to Delhi Jurisdiction.", 'size' => 9, 'color' => '#94a3b8', 'line_height' => 1.4]
                            ]
                        ],
                        [
                            'width' => '40%',
                            'blocks' => [
                                ['type' => 'image', 'src' => 'signature', 'width' => 150, 'align' => 'right'],
                                ['type' => 'text', 'content' => 'Authorized Signatory', 'align' => 'right', 'size' => 10, 'weight' => 'bold', 'spacing_top' => 5]
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }

    public function getPresets()
    {
        return [
            [
                'id' => 'tax_modern',
                'name' => 'Tax Invoice (Modern)',
                'config' => [
                    'type' => 'tax',
                    'font_family' => 'Helvetica',
                    'primary_color' => '#0ea5e9',
                    'font_size_body' => 10,
                    'line_height' => 1.2,
                    'blocks' => [
                        [
                            'id' => 'row_1',
                            'type' => 'row',
                            'spacing_top' => 0,
                            'columns' => [
                                ['width' => '60%', 'blocks' => [['type' => 'image', 'src' => 'logo', 'width' => 140, 'align' => 'left']]],
                                ['width' => '40%', 'blocks' => [['type' => 'text', 'content' => "<h1 style='margin:0'>TAX INVOICE</h1>", 'color' => '#0ea5e9', 'align' => 'right', 'size' => 24]]]
                            ]
                        ],
                        [
                            'id' => 'row_2',
                            'type' => 'row',
                            'spacing_top' => 20,
                            'columns' => [
                                ['width' => '50%', 'blocks' => [['type' => 'text', 'content' => "<strong>{{ company_name }}</strong>\n{{ company_address }}\n<strong>GSTIN:</strong> {{ company_gstin }}", 'size' => 9, 'line_height' => 1.4]]],
                                ['width' => '50%', 'blocks' => [['type' => 'text', 'content' => "<strong>Invoice #:</strong> {{ invoice_no }}\n<strong>Date:</strong> {{ date }}\n<strong>PAN:</strong> {{ company_pan }}", 'align' => 'right', 'size' => 9, 'line_height' => 1.4]]]
                            ]
                        ],
                        [
                            'id' => 'row_3',
                            'type' => 'row',
                            'spacing_top' => 30,
                            'columns' => [
                                ['width' => '100%', 'blocks' => [['type' => 'text', 'content' => "<div style='background:#f8fafc; padding:10px; border:1px solid #e2e8f0;'><strong>BILL TO:</strong>\n{{ user_name }}\n{{ user_company_name }}\n{{ user_address }}\n<strong>GSTIN:</strong> {{ user_gstin }}</div>", 'size' => 9, 'line_height' => 1.5]]]
                            ]
                        ],
                        ['id' => 'table_1', 'type' => 'items_table', 'spacing_top' => 30, 'header_bg' => '#0ea5e9', 'header_text' => '#ffffff', 'border_color' => '#0ea5e9', 'row_size' => 10, 'tax_label' => 'GST', 'tax_percent' => 18],
                        [
                            'id' => 'row_4',
                            'type' => 'row',
                            'spacing_top' => 40,
                            'columns' => [
                                ['width' => '60%', 'blocks' => [['type' => 'text', 'content' => "<strong>Notes:</strong>\nPayment is due within 15 days.", 'color' => '#64748b', 'size' => 8]]],
                                ['width' => '40%', 'blocks' => [['type' => 'image', 'src' => 'signature', 'width' => 120, 'align' => 'right'], ['type' => 'text', 'content' => 'Authorized Signatory', 'align' => 'right', 'size' => 9, 'weight' => 'bold']]]
                            ]
                        ]
                    ]
                ]
            ],
            [
                'id' => 'proforma_classic',
                'name' => 'Proforma (Classic)',
                'config' => [
                    'type' => 'proforma',
                    'font_family' => 'Times',
                    'primary_color' => '#1e293b',
                    'font_size_body' => 11,
                    'line_height' => 1.4,
                    'blocks' => [
                        [
                            'id' => 'row_1',
                            'type' => 'row',
                            'columns' => [
                                ['width' => '100%', 'blocks' => [['type' => 'text', 'content' => "<h1 style='text-align:center; border-bottom:2px solid #1e293b; padding-bottom:5px;'>PROFORMA INVOICE</h1>", 'size' => 20]]]
                            ]
                        ],
                        [
                            'id' => 'row_2',
                            'type' => 'row',
                            'spacing_top' => 20,
                            'columns' => [
                                ['width' => '50%', 'blocks' => [['type' => 'text', 'content' => "<strong>From:</strong>\n{{ company_name }}\n{{ company_address }}", 'size' => 10]]],
                                ['width' => '50%', 'blocks' => [['type' => 'text', 'content' => "<strong>To:</strong>\n{{ user_name }}\n{{ user_address }}", 'size' => 10]]]
                            ]
                        ],
                        ['id' => 'table_1', 'type' => 'items_table', 'spacing_top' => 30, 'header_bg' => '#f1f5f9', 'header_text' => '#1e293b', 'border_color' => '#1e293b', 'row_size' => 11],
                        [
                            'id' => 'row_3',
                            'type' => 'row',
                            'spacing_top' => 40,
                            'columns' => [
                                ['width' => '100%', 'blocks' => [['type' => 'text', 'content' => "<strong>Terms & Conditions</strong>\nThis is not a tax invoice. Final invoice will be issued upon payment.", 'size' => 9]]]
                            ]
                        ]
                    ]
                ]
            ],
            [
                'id' => 'minimal_receipt',
                'name' => 'Minimal Receipt',
                'config' => [
                    'type' => 'receipt',
                    'font_family' => 'Helvetica',
                    'primary_color' => '#10b981',
                    'font_size_body' => 9,
                    'line_height' => 1.1,
                    'blocks' => [
                        [
                            'id' => 'row_1',
                            'type' => 'row',
                            'columns' => [
                                ['width' => '100%', 'blocks' => [['type' => 'text', 'content' => "<div style='text-align:center'><strong>PAYMENT RECEIPT</strong><br>{{ company_name }}</div>", 'size' => 12]]]
                            ]
                        ],
                        [
                            'id' => 'row_2',
                            'type' => 'row',
                            'spacing_top' => 15,
                            'columns' => [
                                ['width' => '100%', 'blocks' => [['type' => 'text', 'content' => "<strong>Date:</strong> {{ date }}\n<strong>Receipt #:</strong> {{ invoice_no }}\n<strong>Received From:</strong> {{ user_name }}", 'align' => 'center', 'line_height' => 1.5]]]
                            ]
                        ],
                        ['id' => 'table_1', 'type' => 'items_table', 'spacing_top' => 15, 'header_bg' => '#ffffff', 'header_text' => '#000000', 'border_color' => '#000000', 'row_size' => 9],
                        [
                            'id' => 'row_3',
                            'type' => 'row',
                            'spacing_top' => 15,
                            'columns' => [
                                ['width' => '100%', 'blocks' => [['type' => 'text', 'content' => "Thank you for your business!", 'align' => 'center', 'weight' => 'bold']]]
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }
}
