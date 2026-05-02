<x-mail::message>
# Hello {{ $submission->user->name }},

Thank you for your payment/submission to **MSME Chamber of Commerce & Industry**.

Please find attached the invoice for your reference.

**Invoice Details:**
- **Invoice Number:** {{ $submission->manual_invoice_number ?? $submission->invoice_number }}
- **Date:** {{ $submission->created_at->format('M d, Y') }}
- **Amount:** ₹{{ number_format($submission->total_amount_paid, 2) }}

You can also log in to our website at any time to view and download your invoices from your dashboard.

If you have any questions, please feel free to contact us.

Thanks,<br>
{{ config('app.name') }} Team
</x-mail::message>
