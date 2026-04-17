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

        $submission->load(['form', 'user', 'payment']);
        
        $pdf = Pdf::loadView('pdf.invoice', [
            'submission' => $submission,
            'form'       => $submission->form,
            'user'       => $submission->user,
            'details'    => $submission->form->invoice_details ?? []
        ]);

        return $pdf->download($submission->invoice_number . '.pdf');
    }
}
