<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    public function download(Submission $submission)
    {
        // Security Check: Only Admin or the owner can download
        if (auth()->user()->role !== 'admin' && auth()->id() !== $submission->user_id) {
            abort(403);
        }

        $submission->load(['form.invoiceTemplate', 'user', 'payment']);
        
        $template = $submission->form->invoiceTemplate;
        
        if (!$template) {
            $template = \App\Models\InvoiceTemplate::where('is_default', true)->first();
        }

        $savedConfig = $template ? $template->config : [];
        
        // Ensure all keys exist by merging with defaults
        $invoiceConfig = array_merge([
            'type' => 'tax',
            'company_name' => 'MSME Chamber of Commerce & Industry',
            'address' => "India's MSME Headquarters\nNew Delhi, India",
            'gstin' => '',
            'pan' => '',
            'email' => 'support@msmeccii.in',
            'phone' => '+91-9810690843',
            'primary_color' => '#10b981',
            'font_family' => 'Helvetica',
            'footer_text' => 'This is a computer-generated invoice.',
            'terms' => "1. Goods once sold will not be taken back.\n2. Subject to New Delhi jurisdiction.",
        ], $savedConfig);

        $pdf = Pdf::loadView('pdf.invoice', [
            'submission'    => $submission,
            'form'          => $submission->form,
            'user'          => $submission->user,
            'invoiceConfig' => $invoiceConfig,
            'details'       => $submission->form->invoice_details ?? []
        ]);

        return $pdf->download($submission->invoice_number . '.pdf');
    }
}
