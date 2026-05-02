<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice {{ $submission->manual_invoice_number ?? $submission->invoice_number }}</title>
    <style>
        @page { margin: 0; }
        body { 
            font-family: '{{ $invoiceConfig['font_family'] ?? 'Helvetica' }}', sans-serif; 
            margin: 0; 
            padding: 40px; 
            color: {{ $invoiceConfig['text_color_main'] ?? '#0f172a' }};
            font-size: {{ $invoiceConfig['font_size_body'] ?? 12 }}pt;
            line-height: 1.4;
        }
        .header { 
            margin-bottom: 40px; 
            border-bottom: 2px solid {{ $invoiceConfig['border_color'] ?? '#e2e8f0' }}; 
            padding: 20px;
            background-color: {{ $invoiceConfig['header_bg_color'] ?? '#ffffff' }};
            display: table;
            width: 100%;
        }
        .header-cell {
            display: table-cell;
            vertical-align: top;
        }
        .logo img { 
            width: {{ $invoiceConfig['logo_width'] ?? 120 }}px; 
            height: auto; 
        }
        .logo-text { 
            font-size: {{ ($invoiceConfig['font_size_title'] ?? 24) * 0.8 }}pt; 
            font-weight: 900; 
            text-transform: uppercase; 
        }
        .logo-text span { color: {{ $invoiceConfig['primary_color'] ?? '#10b981' }}; }
        
        .title-box h1 { 
            font-size: {{ $invoiceConfig['font_size_title'] ?? 24 }}pt; 
            color: {{ $invoiceConfig['primary_color'] ?? '#10b981' }}; 
            margin: 0; 
            text-transform: uppercase;
        }
        .title-box p { 
            font-size: {{ ($invoiceConfig['font_size_body'] ?? 12) * 0.8 }}pt; 
            color: {{ $invoiceConfig['text_color_sub'] ?? '#64748b' }}; 
            margin: 5px 0 0; 
            font-weight: bold;
        }
        
        .info-sub { 
            color: {{ $invoiceConfig['text_color_sub'] ?? '#64748b' }}; 
            font-size: {{ ($invoiceConfig['font_size_body'] ?? 12) * 0.8 }}pt; 
        }

        table.items th { 
            background: {{ $invoiceConfig['table_header_bg'] ?? '#f8fafc' }}; 
            color: {{ $invoiceConfig['table_header_text'] ?? '#64748b' }}; 
            text-align: left; 
            padding: 12px; 
            font-size: 10px; 
            text-transform: uppercase; 
            border-bottom: 2px solid {{ $invoiceConfig['primary_color'] ?? '#10b981' }};
        }
        
        table.items { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        table.items th { 
            background: {{ $invoiceConfig['table_header_bg'] ?? '#f8fafc' }}; 
            color: {{ $invoiceConfig['table_header_text'] ?? '#475569' }}; 
            font-size: 10px; 
            font-weight: 900; 
            text-transform: uppercase; 
            padding: 15px; 
            text-align: left; 
            border-bottom: 2px solid {{ $invoiceConfig['primary_color'] ?? '#10b981' }}; 
        }
        table.items td { padding: 18px 15px; border-bottom: 1px solid {{ $invoiceConfig['border_color'] ?? '#f1f5f9' }}; font-size: 13px; font-weight: 600; color: {{ $invoiceConfig['text_color_main'] ?? '#334155' }}; }
        table.items tr:nth-child(even) { background-color: {{ $invoiceConfig['table_zebra_bg'] ?? '#fcfcfc' }}; }
        
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
        <div class="header">
            @if(($invoiceConfig['logo_position'] ?? 'left') === 'left')
                <div class="header-cell logo">
                    @include('pdf.partials.logo')
                </div>
                <div class="header-cell title-box" style="text-align: right;">
                    @include('pdf.partials.title')
                </div>
            @elseif(($invoiceConfig['logo_position'] ?? 'left') === 'center')
                <div class="header-cell" style="text-align: center; width: 100%;">
                    @include('pdf.partials.logo')
                    <div style="margin-top: 10px;">
                        @include('pdf.partials.title')
                    </div>
                </div>
            @else
                <div class="header-cell title-box" style="text-align: left;">
                    @include('pdf.partials.title')
                </div>
                <div class="header-cell logo" style="text-align: right;">
                    @include('pdf.partials.logo')
                </div>
            @endif
        </div>

        <table class="info-grid">
            <tr>
                <td>
                    <div class="info-label">Customer Info</div>
                    <div class="info-value">{{ $user->name }}</div>
                    @if(($invoiceConfig['show_metadata'] ?? true) && $user->designation)
                        <div class="info-sub"><strong>{{ $user->designation }}</strong></div>
                    @endif
                    @if(($invoiceConfig['show_metadata'] ?? true) && $user->company_name)
                        <div class="info-sub">{{ $user->company_name }}</div>
                    @endif
                    @if(($invoiceConfig['show_metadata'] ?? true) && $user->address)
                        <div class="info-sub" style="margin-top: 3px; font-style: italic;">{{ $user->address }}</div>
                    @endif
                    <div class="info-sub">{{ $user->email }}</div>
                    <div class="info-sub">{{ $user->phone_number }}</div>
                    @if(($invoiceConfig['show_metadata'] ?? true) && $user->gstin)
                        <div class="info-sub" style="margin-top: 5px;"><strong>GSTIN:</strong> {{ $user->gstin }}</div>
                    @endif
                </td>
                <td>
                    <div class="info-label">Vendor Info</div>
                    @if($invoiceConfig['show_company_name'] ?? true)
                        <div class="info-value">{{ $invoiceConfig['company_name'] ?? 'MSME Chamber of Commerce' }}</div>
                    @endif
                    @if($invoiceConfig['show_address'] ?? true)
                        <div class="info-sub" style="white-space: pre-wrap;">{{ $invoiceConfig['address'] ?? 'Official Business Address' }}</div>
                    @endif
                    <div class="info-sub"><strong>Email:</strong> {{ $invoiceConfig['email'] ?? 'support@msmeccii.in' }}</div>
                    @if(($invoiceConfig['show_gstin'] ?? true) && isset($invoiceConfig['gstin']) && $invoiceConfig['gstin'])
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
                @if(($invoiceConfig['show_metadata'] ?? true) && $submission->data && count($submission->data) > 0)
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
                
                @if(($invoiceConfig['show_bank_details'] ?? true) && isset($invoiceConfig['bank_details']) && $invoiceConfig['bank_details'])
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

                @if($invoiceConfig['show_signature'] ?? true)
                    <div style="margin-top: 40px; text-align: center;">
                        <div style="margin-bottom: 5px;">
                            @php
                                $sigPath = null;
                                if(isset($invoiceConfig['signature_url'])) {
                                    $sigPath = public_path(str_replace('/storage/', 'storage/', $invoiceConfig['signature_url']));
                                }
                            @endphp

                            @if($sigPath && file_exists($sigPath))
                                <img src="{{ $sigPath }}" style="width: {{ $invoiceConfig['signature_width'] ?? 150 }}px; height: auto;">
                            @else
                                <div style="height: 40px;"></div>
                            @endif
                        </div>
                        <div style="border-top: 1px solid #1e293b; padding-top: 5px; font-size: 11px; font-weight: 900; text-transform: uppercase;">
                            {{ $invoiceConfig['signature_text'] ?? 'Authorized Signatory' }}
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <div class="footer">
            <p>{{ $invoiceConfig['footer_text'] ?? 'Thank you for your business with MSMECCII.' }}</p>
            <p>&copy; {{ date('Y') }} {{ $invoiceConfig['company_name'] ?? 'MSMECCII' }}. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
