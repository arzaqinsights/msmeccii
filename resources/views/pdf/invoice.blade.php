<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Invoice - {{ $submission->manual_invoice_number ?? $submission->id }}</title>
    <style>
        @page { 
            size: A4; 
            margin: 0; 
        }
        body { 
            font-family: 'DejaVu Sans', 'Helvetica', sans-serif; 
            margin: 0; 
            padding: 1.5cm; 
            color: {{ $invoiceConfig['text_color_main'] ?? '#0f172a' }};
            font-size: {{ $invoiceConfig['font_size_body'] ?? 10 }}pt;
            line-height: {{ $invoiceConfig['line_height'] ?? 1.2 }};
            letter-spacing: {{ $invoiceConfig['letter_spacing'] ?? 0 }}px;
        }
        div, p, h1, h2, h3, h4, h5, h6 { margin: 0; padding: 0; line-height: 1.0; }
        .row-container { width: 100%; clear: both; font-size: 0; }
        .row-table { width: 100%; border-collapse: collapse; table-layout: fixed; border: none; font-size: 0; }
        .col-cell { vertical-align: top; padding: 0; border: none; font-size: 0; line-height: 0; }
        
        .items-table { width: 100%; border-collapse: collapse; margin-top: 5px; font-family: 'DejaVu Sans', sans-serif; border: 1px solid #cbd5e1; font-size: 9pt; line-height: 1.2; }
        .items-table th, .items-table td { font-family: 'DejaVu Sans', sans-serif; border: 1px solid #cbd5e1; font-size: 9pt; }
        .items-table th { padding: 4px 8px; text-transform: uppercase; font-weight: 900; background-color: #f8fafc; }
        .items-table td { padding: 4px 8px; }
        
        .currency::before {
            content: "\20B9 ";
            font-family: 'DejaVu Sans', sans-serif;
        }
        
        .block-wrapper { margin: 0; padding: 0; }
        .text-block { display: block; }
        .text-block p { margin: 0; padding: 0; }
        .text-block h1 { margin: 0; padding: 0; line-height: 1.1; }
        
        img { max-width: 100%; height: auto; display: block; }
        
        a { color: {{ $invoiceConfig['primary_color'] ?? '#10b981' }}; text-decoration: none; }
    </style>
</head>
<body>
    @php
        $globalSettings = \App\Models\SiteSetting::pluck('value', 'key')->toArray();
        
        $vars = [
            '{{ company_name }}' => $invoiceConfig['company_name'] ?? ($globalSettings['company_name'] ?? 'MSME Chamber of Commerce'),
            '{{ company_address }}' => $invoiceConfig['address'] ?? ($globalSettings['address'] ?? 'India'),
            '{{ company_gstin }}' => $invoiceConfig['gstin'] ?? ($globalSettings['gstin'] ?? 'N/A'),
            
            '{{ user_name }}' => $user->name ?? '',
            '{{ user_email }}' => $user->email ?? '',
            '{{ user_company_name }}' => $user->company_name ?? '',
            '{{ user_designation }}' => $user->designation ?? '',
            '{{ user_address }}' => $user->address ?? '',
            '{{ user_city }}' => $user->city ?? '',
            '{{ user_pincode }}' => $user->pincode ?? '',
            '{{ user_country }}' => $user->country ?? '',
            '{{ user_gstin }}' => $user->gstin ?? '',
            '{{ user_website }}' => $user->website ?? '',
            '{{ user_phone_number }}' => $user->phone_number ?? '',
            '{{ user_industry_sector }}' => $user->industry_sector ?? '',
            '{{ user_membership_status }}' => $user->membership_status ?? '',

            '{{ invoice_no }}' => $submission->manual_invoice_number ?? 'INV-'.$submission->id,
            '{{ date }}' => $submission->created_at->format('d M, Y'),
            '{{ total }}' => number_format($submission->total_amount_paid, 2),
            '{{ subtotal }}' => number_format($submission->data['subtotal'] ?? $submission->total_amount_paid, 2),
            '{{ tax_amount }}' => number_format($submission->data['tax_amount'] ?? 0, 2),
            '{{ tax_label }}' => $submission->data['tax_label'] ?? 'Tax',
            '{{ status }}' => (strtoupper($submission->payment_status) === 'COMPLETED' ? 'PAID' : strtoupper($submission->payment_status)),
        ];

        $renderText = function($content) use ($vars) {
            $content = str_replace(array_keys($vars), array_values($vars), $content);
            return nl2br(trim($content));
        };

        $logoPath = null;
        if(isset($invoiceConfig['logo_url'])) {
            $logoPath = public_path(str_replace('/storage/', 'storage/', $invoiceConfig['logo_url']));
        } elseif(isset($globalSettings['logo'])) {
             $logoPath = public_path(str_replace('/storage/', 'storage/', $globalSettings['logo']));
        }

        $sigPath = null;
        if(isset($submission->data['signature_url'])) {
            $sigPath = public_path(str_replace('/storage/', 'storage/', $submission->data['signature_url']));
        } elseif(isset($invoiceConfig['signature_url'])) {
            $sigPath = public_path(str_replace('/storage/', 'storage/', $invoiceConfig['signature_url']));
        } elseif(isset($globalSettings['signature'])) {
            $sigPath = public_path(str_replace('/storage/', 'storage/', $globalSettings['signature']));
        }
    @endphp

    @foreach($invoiceConfig['blocks'] ?? [] as $row)
        <div class="row-container" style="margin-top: {{ $row['spacing_top'] ?? 0 }}px; margin-bottom: {{ $row['spacing_bottom'] ?? 0 }}px;">
            @if($row['type'] === 'row')
                <table class="row-table">
                    <tr>
                        @foreach($row['columns'] ?? [] as $col)
                            <td class="col-cell" style="width: {{ $col['width'] ?? '100%' }};">
                                @foreach($col['blocks'] ?? [] as $block)
                                    <div class="block-wrapper">
                                        @if($block['type'] === 'text')
                                            <div class="text-block" style="text-align: {{ $block['align'] ?? 'left' }}; color: {{ $block['color'] ?? 'inherit' }}; font-size: {{ $block['size'] ?? 11 }}pt; font-weight: {{ $block['weight'] ?? 'normal' }}; line-height: {{ $block['line_height'] ?? 1.2 }}; letter-spacing: {{ $block['letter_spacing'] ?? 0 }}px; margin-bottom: {{ $block['margin_bottom'] ?? 0 }}px;">
                                                {!! $renderText($block['content'] ?? '') !!}
                                            </div>
                                        @elseif($block['type'] === 'image')
                                            <div style="text-align: {{ $block['align'] ?? 'left' }};">
                                                @if($block['src'] === 'logo' && $logoPath && file_exists($logoPath))
                                                    <img src="{{ $logoPath }}" style="width: {{ $block['width'] ?? 120 }}px;">
                                                @elseif($block['src'] === 'signature' && $sigPath && file_exists($sigPath))
                                                    <img src="{{ $sigPath }}" style="width: {{ $block['width'] ?? 150 }}px;">
                                                @endif
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </td>
                        @endforeach
                    </tr>
                </table>
            @elseif($row['type'] === 'items_table')
                <table class="items-table">
                    <thead>
                        <tr style="background-color: {{ $row['header_bg'] ?? '#f8fafc' }}; border-bottom: 2px solid {{ $row['border_color'] ?? ($invoiceConfig['primary_color'] ?? '#10b981') }};">
                            <th style="color: {{ $row['header_text'] ?? '#64748b' }}; text-align: left;">{{ $row['label_description'] ?? 'Item Description' }}</th>
                            <th style="color: {{ $row['header_text'] ?? '#64748b' }}; text-align: right;">{{ $row['label_amount'] ?? 'Amount' }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($submission->items && count($submission->items) > 0)
                            @foreach($submission->items as $item)
                                <tr>
                                    <td style="font-size: {{ $row['row_size'] ?? 11 }}pt; color: {{ $row['row_color'] ?? '#0f172a' }}; font-weight: {{ $row['row_weight'] ?? '600' }};">{{ $item['description'] }}</td>
                                    <td style="text-align: right; font-size: {{ $row['row_size'] ?? 11 }}pt; color: {{ $row['row_color'] ?? '#0f172a' }}; font-weight: {{ $row['row_weight'] ?? '700' }};" class="currency">{{ number_format($item['amount'], 2) }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td style="font-size: {{ $row['row_size'] ?? 11 }}pt; color: {{ $row['row_color'] ?? '#0f172a' }}; font-weight: {{ $row['row_weight'] ?? '600' }};">
                                    {{ $form->name ?? 'Standard Service' }}
                                </td>
                                <td style="text-align: right; font-size: {{ $row['row_size'] ?? 11 }}pt; color: {{ $row['row_color'] ?? '#0f172a' }}; font-weight: {{ $row['row_weight'] ?? '700' }};" class="currency">{{ number_format($submission->total_amount_paid, 2) }}</td>
                            </tr>
                        @endif

                        @php
                            $subtotal = $submission->data['subtotal'] ?? $submission->total_amount_paid;
                            $taxAmount = $submission->data['tax_amount'] ?? 0;
                            $taxLabel = $submission->data['tax_label'] ?? 'Tax';
                            $taxPercent = $submission->data['tax_percent'] ?? 0;
                            
                            $footerColor = $row['footer_color'] ?? '#0f172a';
                            $footerSize = $row['footer_size'] ?? 11;
                            $footerWeight = 'bold';
                        @endphp

                        @if($taxAmount > 0)
                            <tr>
                                <td style="text-align: right; font-size: {{ ($footerSize ?? 10) - 1 }}pt; font-weight: 700; color: #64748b; font-family: 'DejaVu Sans', sans-serif !important;">Subtotal</td>
                                <td style="text-align: right; font-size: {{ $footerSize ?? 10 }}pt; font-weight: bold; color: {{ $footerColor }}; font-family: 'DejaVu Sans', sans-serif !important;" class="currency">{{ number_format($subtotal, 2) }}</td>
                            </tr>
                            <tr>
                                <td style="text-align: right; font-size: {{ ($footerSize ?? 10) - 1 }}pt; font-weight: 700; color: #64748b; font-family: 'DejaVu Sans', sans-serif !important;">{{ $taxLabel }} ({{ $taxPercent }}%)</td>
                                <td style="text-align: right; font-size: {{ $footerSize ?? 10 }}pt; font-weight: bold; color: {{ $footerColor }}; font-family: 'DejaVu Sans', sans-serif !important;" class="currency">{{ number_format($taxAmount, 2) }}</td>
                            </tr>
                        @endif
                        <tr style="background-color: #f8fafc;">
                            <td style="text-align: right; font-size: {{ $footerSize ?? 10 }}pt; font-weight: 900; text-transform: uppercase; font-family: 'DejaVu Sans', sans-serif !important;">Total Amount</td>
                            <td style="text-align: right; font-size: {{ ($footerSize ?? 10) + 3 }}pt; font-weight: bold; color: {{ $footerColor }}; font-family: 'DejaVu Sans', sans-serif !important;" class="currency">{{ number_format($submission->total_amount_paid, 2) }}</td>
                        </tr>
                    </tbody>
                </table>
            @endif
        </div>
    @endforeach

</body>
</html>
