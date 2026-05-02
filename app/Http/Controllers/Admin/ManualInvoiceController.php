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
            'user_id' => 'required|exists:users,id',
            'items' => 'required|array|min:1',
            'items.*.description' => 'required|string',
            'items.*.amount' => 'required|numeric|min:0',
            'payment_status' => 'required|string',
        ]);

        $total = collect($request->items)->sum('amount');
        $invoiceNumber = 'MAN-' . date('Ymd') . '-' . strtoupper(\Illuminate\Support\Str::random(4));

        $submission = Submission::create([
            'user_id' => $request->user_id,
            'items' => $request->items,
            'total_amount_paid' => $total,
            'payment_status' => $request->payment_status,
            'manual_invoice_number' => $invoiceNumber,
            'data' => [], // Empty for manual
        ]);

        if ($request->has('send_email')) {
            $this->sendEmail($submission);
        }

        return redirect()->route('admin.submissions.index')->with('success', 'Manual invoice created successfully.');
    }

    public function sendEmail(Submission $submission)
    {
        $submission->load(['user']);
        
        $template = InvoiceTemplate::where('is_default', true)->first();
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

        Mail::to($submission->user->email)->send(new InvoiceMailable($submission, $pdf->output()));

        return back()->with('success', 'Invoice sent to user email.');
    }
}
