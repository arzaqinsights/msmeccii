<div class="title-box">
    <h1>{{ $invoiceConfig['type'] === 'tax' ? 'Tax Invoice' : ($invoiceConfig['type'] === 'normal' ? 'Payment Receipt' : 'Proforma Invoice') }}</h1>
    <p>#{{ $submission->manual_invoice_number ?? $submission->invoice_number }}</p>
</div>
