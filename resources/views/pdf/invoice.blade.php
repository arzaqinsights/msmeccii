<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice {{ $submission->manual_invoice_number ?? $submission->invoice_number }}</title>
    <style>
        @page { margin: 0; }
        body { 
            font-family: '{{ $invoiceConfig['font_family'] ?? 'Helvetica' }}', sans-serif; 
            color: #1e293b; 
            line-height: 1.6; 
            margin: 0; 
            padding: 0; 
            background: #ffffff;
        }
        .invoice-container { padding: 40px; }
        .header-stripe { height: 8px; background: {{ $invoiceConfig['primary_color'] ?? '#10b981' }}; width: 100%; }
        
        .header { margin-bottom: 40px; }
        .logo { float: left; }
        .logo img { height: 60px; }
        .logo-text { font-size: 28px; font-weight: 900; color: #0f172a; text-transform: uppercase; letter-spacing: -1px; }
        .logo-text span { color: {{ $invoiceConfig['primary_color'] ?? '#10b981' }}; }
        
        .title-box { float: right; text-align: right; }
        .title-box h1 { margin: 0; font-size: 32px; color: #0f172a; font-weight: 900; text-transform: uppercase; }
        .title-box p { margin: 5px 0 0; font-weight: 800; color: {{ $invoiceConfig['primary_color'] ?? '#10b981' }}; font-size: 14px; }
        
        .info-grid { width: 100%; margin-bottom: 40px; clear: both; border-top: 1px solid #f1f5f9; padding-top: 30px; }
        .info-grid td { vertical-align: top; width: 33.33%; }
        .info-label { font-size: 10px; font-weight: 900; color: #94a3b8; text-transform: uppercase; margin-bottom: 8px; letter-spacing: 0.5px; }
        .info-value { font-size: 13px; font-weight: 700; color: #1e293b; margin-bottom: 4px; }
        .info-sub { font-size: 11px; color: #64748b; font-weight: 500; }
        
        table.items { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        table.items th { 
            background: #f8fafc; 
            color: #475569; 
            font-size: 10px; 
            font-weight: 900; 
            text-transform: uppercase; 
            padding: 15px; 
            text-align: left; 
            border-bottom: 2px solid {{ $invoiceConfig['primary_color'] ?? '#10b981' }}; 
        }
        table.items td { padding: 18px 15px; border-bottom: 1px solid #f1f5f9; font-size: 13px; font-weight: 600; color: #334155; }
        
        .summary-wrapper { width: 100%; margin-top: 20px; }
        .notes-section { width: 60%; float: left; }
        .totals-section { width: 35%; float: right; }
        
        .total-row { padding: 10px 15px; font-size: 13px; color: #64748b; font-weight: 700; }
        .total-row.grand-total { 
            background: #0f172a; 
            color: #ffffff; 
            border-radius: 12px; 
            margin-top: 15px; 
            padding: 18px 15px; 
        }
        .total-row span { float: right; text-align: right; }
        
        .meta-data { 
            margin-top: 40px; 
            background: #f8fafc; 
            padding: 20px; 
            border-radius: 12px; 
            border-left: 4px solid {{ $invoiceConfig['primary_color'] ?? '#10b981' }};
        }
        .meta-grid { width: 100%; }
        .meta-grid td { padding: 5px 10px; font-size: 11px; }
        
        .footer { 
            position: fixed; 
            bottom: 0; 
            left: 0; 
            right: 0; 
            padding: 30px 40px; 
            font-size: 10px; 
            color: #94a3b8; 
            text-align: center; 
            background: #f8fafc;
            border-top: 1px solid #f1f5f9;
        }
        .clearfix::after { content: ""; clear: both; display: table; }
        .bank-box { margin-top: 25px; padding: 15px; background: #f1f5f9; border-radius: 8px; font-size: 11px; }
    </style>
</head>
<body>
    <div class="header-stripe"></div>
    <div class="invoice-container">
        <div class="header clearfix">
            <div class="logo">
                @php
                    $logoPath = null;
                    if(isset($invoiceConfig['logo_url'])) {
                        $logoPath = public_path(str_replace('/storage/', 'storage/', $invoiceConfig['logo_url']));
                    } elseif(isset($form) && $form->invoice_logo) {
                        $logoPath = public_path($form->invoice_logo);
                    }
                @endphp

                @if($logoPath && file_exists($logoPath))
                    <img src="{{ $logoPath }}">
                @else
                    <div class="logo-text">MSME<span>CCII</span></div>
                @endif
            </div>

            <div class="title-box">
                <h1>INVOICE</h1>
                <p>#{{ $submission->manual_invoice_number ?? $submission->invoice_number }}</p>
            </div>
        </div>

        <table class="info-grid">
            <tr>
                <td>
                    <div class="info-label">Customer Info</div>
                    <div class="info-value">{{ $user->name }}</div>
                    @if($user->designation)
                        <div class="info-sub"><strong>{{ $user->designation }}</strong></div>
                    @endif
                    @if($user->company_name)
                        <div class="info-sub">{{ $user->company_name }}</div>
                    @endif
                    @if($user->address)
                        <div class="info-sub" style="margin-top: 3px; font-style: italic;">{{ $user->address }}</div>
                    @endif
                    <div class="info-sub">{{ $user->email }}</div>
                    <div class="info-sub">{{ $user->phone_number }}</div>
                    @if($user->gstin)
                        <div class="info-sub" style="margin-top: 5px;"><strong>GSTIN:</strong> {{ $user->gstin }}</div>
                    @endif
                </td>
                <td>
                    <div class="info-label">Vendor Info</div>
                    <div class="info-value">{{ $invoiceConfig['company_name'] ?? 'MSME Chamber of Commerce' }}</div>
                    <div class="info-sub" style="white-space: pre-wrap;">{{ $invoiceConfig['address'] ?? 'Official Business Address' }}</div>
                    <div class="info-sub"><strong>Email:</strong> {{ $invoiceConfig['email'] ?? 'support@msmeccii.in' }}</div>
                    @if(isset($invoiceConfig['gstin']) && $invoiceConfig['gstin'])
                        <div class="info-sub"><strong>GSTIN:</strong> {{ $invoiceConfig['gstin'] }}</div>
                    @endif
                </td>
                <td style="text-align: right;">
                    <div class="info-label">Invoice Details</div>
                    <div class="info-value">Date: {{ $submission->created_at->format('M d, Y') }}</div>
                    <div class="info-value">Status: <span style="color: {{ $submission->payment_status === 'completed' ? '#10b981' : '#f59e0b' }};">{{ strtoupper($submission->payment_status) }}</span></div>
                    <div class="info-value">Method: {{ strtoupper($submission->payment_method ?? 'OFFLINE') }}</div>
                </td>
            </tr>
        </table>

        <table class="items">
            <thead>
                <tr>
                    <th style="width: 70%;">Item Description</th>
                    <th style="text-align: right; width: 30%;">Amount (INR)</th>
                </tr>
            </thead>
            <tbody>
                @if($submission->items)
                    @foreach($submission->items as $item)
                        <tr>
                            <td>{{ $item['description'] }}</td>
                            <td style="text-align: right;">Rs. {{ number_format($item['amount'], 2) }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td>
                            <div style="font-size: 15px; color: #0f172a;">{{ $form->name ?? 'Service Registration' }}</div>
                            <div style="font-size: 11px; color: #64748b; font-weight: 500; margin-top: 4px;">Standard registration fee.</div>
                        </td>
                        <td style="text-align: right;">Rs. {{ number_format($submission->total_amount_paid, 2) }}</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <div class="summary-wrapper clearfix">
            <div class="notes-section">
                @if($submission->data && count($submission->data) > 0)
                    <div class="info-label">Registration Metadata</div>
                    <div class="meta-data">
                        <table class="meta-grid">
                            @foreach(array_chunk($submission->data, 2, true) as $chunk)
                                <tr>
                                    @foreach($chunk as $label => $value)
                                        @if($value && !is_array($value))
                                            <td><strong>{{ $label }}:</strong> {{ $value }}</td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </table>
                    </div>
                @endif

                <div class="info-label" style="margin-top: 30px;">Terms & Remarks</div>
                <div style="font-size: 11px; color: #64748b; white-space: pre-wrap;">{{ $invoiceConfig['terms'] ?? '1. Subject to local jurisdiction. 2. Computer generated invoice.' }}</div>
                
                @if(isset($invoiceConfig['bank_details']) && $invoiceConfig['bank_details'])
                    <div class="bank-box">
                        <strong>Bank Details:</strong><br>
                        {{ $invoiceConfig['bank_details'] }}
                    </div>
                @endif
            </div>

            <div class="totals-section">
                @php
                    $final = $submission->total_amount_paid;
                    $subtotal = $final / 1.18;
                    $tax = $final - $subtotal;
                @endphp
                
                @if(($invoiceConfig['type'] ?? 'tax') === 'tax')
                    <div class="total-row">Subtotal <span>Rs. {{ number_format($subtotal, 2) }}</span></div>
                    <div class="total-row">IGST (18%) <span>Rs. {{ number_format($tax, 2) }}</span></div>
                @endif
                
                <div class="total-row grand-total">
                    Total Amount <span>Rs. {{ number_format($final, 2) }}</span>
                </div>
            </div>
        </div>

        <div class="footer">
            <p>{{ $invoiceConfig['footer_text'] ?? 'Thank you for your business with MSMECCII.' }}</p>
            <p>&copy; {{ date('Y') }} {{ $invoiceConfig['company_name'] ?? 'MSMECCII' }}. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
