<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice {{ $submission->invoice_number }}</title>
    <style>
        @page { margin: 0; }
        body { 
            font-family: '{{ $invoiceConfig['font_family'] ?? 'Helvetica' }}', sans-serif; 
            color: #334155; 
            line-height: 1.5; 
            margin: 40px; 
            padding: 0; 
        }
        .invoice-box { max-width: 800px; margin: auto; }
        .header { 
            border-bottom: 2px solid {{ ($invoiceConfig['primary_color'] ?? '#10b981') }}20; 
            padding-bottom: 20px; 
            margin-bottom: 30px; 
        }
        .logo { 
            font-size: 24px; 
            font-weight: 900; 
            color: #0f172a; 
            text-transform: uppercase; 
            letter-spacing: -1px; 
            float: left;
        }
        .logo span { color: {{ $invoiceConfig['primary_color'] ?? '#10b981' }}; }
        .title { float: right; text-align: right; }
        .title h1 { 
            margin: 0; 
            font-size: 22px; 
            color: {{ $invoiceConfig['primary_color'] ?? '#0f172a' }}; 
            text-transform: uppercase; 
        }
        .title p { margin: 5px 0 0; font-weight: bold; color: #94a3b8; font-size: 11px; }
        
        .details-container { width: 100%; margin-bottom: 40px; }
        .details-container td { vertical-align: top; width: 50%; }
        .details-label { font-size: 9px; font-weight: 900; color: #94a3b8; text-transform: uppercase; margin-bottom: 5px; }
        .details-value { font-size: 13px; font-weight: bold; color: #1e293b; }
        
        table.items { width: 100%; border-collapse: collapse; margin-bottom: 40px; }
        table.items th { 
            background: #f8fafc; 
            color: #64748b; 
            font-size: 9px; 
            font-weight: 900; 
            text-transform: uppercase; 
            padding: 12px; 
            text-align: left; 
            border-bottom: 2px solid {{ $invoiceConfig['primary_color'] ?? '#10b981' }}; 
        }
        table.items td { padding: 15px 12px; border-bottom: 1px solid #f1f5f9; font-size: 12px; font-weight: bold; color: #334155; }
        
        .totals-wrapper { position: relative; margin-top: 20px; }
        .totals { float: right; width: 250px; }
        .total-row { padding: 8px 12px; font-size: 12px; color: #64748b; font-weight: bold; }
        .total-row.grand-total { 
            background: {{ ($invoiceConfig['primary_color'] ?? '#10b981') }}10; 
            color: {{ $invoiceConfig['primary_color'] ?? '#0f172a' }}; 
            border-radius: 8px; 
            margin-top: 10px; 
            padding: 12px; 
        }
        .total-row span { float: right; text-align: right; }
        
        .footer { 
            position: fixed; 
            bottom: 30px; 
            left: 40px; 
            right: 40px; 
            font-size: 9px; 
            color: #94a3b8; 
            text-align: center; 
            border-top: 1px solid #f1f5f9; 
            padding-top: 15px; 
        }
        .clearfix::after { content: ""; clear: both; display: table; }
        .terms { font-size: 9px; color: #64748b; white-space: pre-wrap; margin-top: 40px; border-top: 1px solid #f1f5f9; padding-top: 15px; }
        .bank-details { font-size: 9px; color: #475569; margin-top: 20px; background: #f8fafc; padding: 10px; border-radius: 6px; border: 1px solid #e2e8f0; }
    </style>
</head>
<body>
    <div class="invoice-box">
        <div class="header clearfix">
            @php
                $logoPath = null;
                if(isset($invoiceConfig['logo_url'])) {
                    $logoPath = public_path(str_replace('/storage/', 'storage/', $invoiceConfig['logo_url']));
                } elseif($form->invoice_logo) {
                    $logoPath = public_path($form->invoice_logo);
                }
            @endphp

            @if($logoPath && file_exists($logoPath))
                <img src="{{ $logoPath }}" style="height: 50px; float: left;">
            @else
                <div class="logo">MSME<span>CCII</span></div>
            @endif

            <div class="title">
                <h1>{{ strtoupper($invoiceConfig['type'] ?? 'Tax Invoice') }}</h1>
                <p>#{{ $submission->invoice_number }}</p>
            </div>
        </div>

        <table class="details-container">
            <tr>
                <td>
                    <div class="details-label">Issued To</div>
                    <div class="details-value">{{ $user->name }}</div>
                    <div class="details-value" style="font-weight: normal; font-size: 11px;">{{ $user->email }}</div>
                    <div class="details-value" style="font-weight: normal; font-size: 11px;">{{ $user->phone_number }}</div>
                </td>
                <td style="text-align: right;">
                    <div class="details-label">From / Vendor</div>
                    <div class="details-value">{{ $invoiceConfig['company_name'] ?? 'MSME Chamber of Commerce & Industry' }}</div>
                    <div class="details-value" style="font-weight: normal; font-size: 10px; white-space: pre-wrap;">{{ $invoiceConfig['address'] ?? ($details['address'] ?? 'Official Business Address') }}</div>
                    @if(($invoiceConfig['type'] ?? 'tax') === 'tax')
                        @if(isset($invoiceConfig['gstin']) && $invoiceConfig['gstin'])
                            <div class="details-value" style="font-size: 9px; color: #64748b; margin-top: 5px;">GSTIN: {{ $invoiceConfig['gstin'] }}</div>
                        @endif
                        @if(isset($invoiceConfig['pan']) && $invoiceConfig['pan'])
                            <div class="details-value" style="font-size: 9px; color: #64748b;">PAN: {{ $invoiceConfig['pan'] }}</div>
                        @endif
                    @endif
                </td>
            </tr>
        </table>

        <table class="items">
            <thead>
                <tr>
                    <th>Item Description</th>
                    <th style="text-align: right;">{{ ($invoiceConfig['type'] ?? 'tax') === 'tax' ? 'Rate' : 'Amount' }} (INR)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div style="font-size: 13px; color: #0f172a;">{{ $form->name }} Registration</div>
                        <div style="font-size: 9px; color: #64748b; font-weight: normal; margin-top: 4px;">
                            @foreach($submission->data as $label => $value)
                                @if(!is_array($value) && $value)
                                    <strong>{{ $label }}:</strong> {{ $value }} |
                                @endif
                            @endforeach
                        </div>
                    </td>
                    <td style="text-align: right;">Rs. {{ number_format($submission->total_amount_paid, 2) }}</td>
                </tr>
            </tbody>
        </table>

        <div class="totals-wrapper clearfix">
            <div class="totals">
                @php
                    $final = $submission->total_amount_paid;
                    $subtotal = $final / 1.18;
                    $tax = $final - $subtotal;
                @endphp
                @if(($invoiceConfig['type'] ?? 'tax') === 'tax')
                    <div class="total-row">Subtotal <span>Rs. {{ number_format($subtotal, 2) }}</span></div>
                    <div class="total-row">IGST (18%) <span>Rs. {{ number_format($tax, 2) }}</span></div>
                    <div class="total-row grand-total">Total Amount <span>Rs. {{ number_format($final, 2) }}</span></div>
                @else
                    <div class="total-row grand-total" style="background: {{ ($invoiceConfig['primary_color'] ?? '#10b981') }}10; color: {{ $invoiceConfig['primary_color'] ?? '#0f172a' }};">
                        Amount Received <span>Rs. {{ number_format($final, 2) }}</span>
                    </div>
                @endif
            </div>
        </div>

        @if(isset($invoiceConfig['bank_details']) && $invoiceConfig['bank_details'])
            <div class="bank-details">
                <div class="details-label" style="font-size: 8px; margin-bottom: 3px;">Bank Account Details</div>
                <div style="font-size: 9px; line-height: 1.4; white-space: pre-wrap;">{{ $invoiceConfig['bank_details'] }}</div>
            </div>
        @endif

        <div class="terms">
            <div class="details-label">Terms & Conditions / Remarks</div>
            <div style="white-space: pre-wrap;">{{ $invoiceConfig['terms'] ?? ($form->invoice_terms ?? 'Standard terms apply.') }}</div>
        </div>

        <div class="footer">
            <p>{{ $invoiceConfig['footer_text'] ?? 'This is a computer-generated tax invoice.' }}</p>
            <p>&copy; {{ date('Y') }} {{ $invoiceConfig['company_name'] ?? 'MSMECCII' }}. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
