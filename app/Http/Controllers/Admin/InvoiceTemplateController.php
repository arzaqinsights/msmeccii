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
            'logo' => 'nullable|image|max:2048'
        ]);

        $data = $request->input('config');
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('uploads/invoices', 'public');
            $data['logo_url'] = '/storage/' . $path;
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
            'logo' => 'nullable|image|max:2048'
        ]);

        $data = $request->input('config');
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('uploads/invoices', 'public');
            $data['logo_url'] = '/storage/' . $path;
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
            'company_name' => 'MSME Chamber of Commerce & Industry',
            'address' => "India's MSME Headquarters\nNew Delhi, India",
            'gstin' => '',
            'pan' => '',
            'email' => 'support@msmeccii.in',
            'phone' => '+91-9810690843',
            'bank_details' => '',
            'primary_color' => '#10b981',
            'secondary_color' => '#0f172a',
            'font_family' => 'Helvetica',
            'footer_text' => 'This is a computer-generated invoice.',
            'terms' => "1. Goods once sold will not be taken back.\n2. Subject to New Delhi jurisdiction.",
            'show_logo' => true,
            'logo_url' => null,
        ];
    }
}
