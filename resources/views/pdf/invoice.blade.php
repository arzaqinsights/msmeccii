<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice {{ $submission->invoice_number }}</title>
    <style>
        body { font-family: 'Helvetica', 'Arial', sans-serif; color: #334155; line-height: 1.6; margin: 0; padding: 0; }
        .invoice-box { max-width: 800px; margin: auto; padding: 30px; }
        .header { border-bottom: 2px solid #f1f5f9; padding-bottom: 20px; margin-bottom: 30px; }
        .logo { font-size: 28px; font-weight: 900; color: #0f172a; text-transform: uppercase; letter-spacing: -1px; }
        .logo span { color: #10b981; }
        .title { float: right; text-align: right; }
        .title h1 { margin: 0; font-size: 24px; color: #0f172a; text-transform: uppercase; }
        .title p { margin: 5px 0 0; font-weight: bold; color: #64748b; font-size: 12px; }
        
        .details-container { width: 100%; margin-bottom: 40px; }
        .details-container td { vertical-align: top; width: 50%; }
        .details-label { font-size: 10px; font-weight: 900; color: #94a3b8; text-transform: uppercase; margin-bottom: 5px; }
        .details-value { font-size: 14px; font-weight: bold; color: #1e293b; }
        
        table.items { width: 100%; border-collapse: collapse; margin-bottom: 40px; }
        table.items th { background: #f8fafc; color: #64748b; font-size: 10px; font-weight: 900; text-transform: uppercase; padding: 12px; text-align: left; border-bottom: 2px solid #f1f5f9; }
        table.items td { padding: 15px 12px; border-bottom: 1px solid #f1f5f9; font-size: 13px; font-weight: bold; color: #334155; }
        
        .totals { float: right; width: 250px; }
        .total-row { padding: 8px 12px; font-size: 13px; color: #64748b; font-weight: bold; }
        .total-row.grand-total { background: #0f172a; color: #fff; border-radius: 8px; margin-top: 10px; padding: 12px; }
        .total-row span { float: right; text-align: right; }
        
        .footer { position: fixed; bottom: 30px; left: 30px; right: 30px; font-size: 10px; color: #94a3b8; text-align: center; border-top: 1px solid #f1f5f9; padding-top: 20px; }
        .clearfix::after { content: ""; clear: both; display: table; }
    </style>
</head>
<body>
    <div class="invoice-box">
        <div class="header clearfix">
            @if($form->invoice_logo)
                <img src="{{ public_path($form->invoice_logo) }}" style="height: 60px; float: left;">
            @else
                <div class="logo" style="float: left;">MSME<span>CCII</span></div>
            @endif
            <div class="title">
                <h1>Tax Invoice</h1>
                <p>#{{ $submission->invoice_number }}</p>
            </div>
        </div>

        <table class="details-container">
            <tr>
                <td>
                    <div class="details-label">Issued To</div>
                    <div class="details-value">{{ $user->name }}</div>
                    <div class="details-value" style="font-weight: normal; font-size: 12px;">{{ $user->email }}</div>
                    <div class="details-value" style="font-weight: normal; font-size: 12px;">{{ $user->phone_number }}</div>
                </td>
                <td style="text-align: right;">
                    <div class="details-label">Organization / Vendor</div>
                    <div class="details-value">MSME Chamber of Commerce & Industry</div>
                    <div class="details-value" style="font-weight: normal; font-size: 11px; white-space: pre-wrap;">{{ $details['address'] ?? 'Official Business Entity Address' }}</div>
                    @if(isset($details['gst']))
                        <div class="details-value" style="font-size: 10px; color: #64748b; margin-top: 5px;">GSTIN: {{ $details['gst'] }}</div>
                    @endif
                </td>
            </tr>
        </table>

        <!-- Summary Table -->
        <table class="items">
            <thead>
                <tr>
                    <th>Item Description</th>
                    <th style="text-align: right;">Amount (INR)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div style="font-size: 14px; color: #0f172a;">{{ $form->name }} Registration</div>
                        <div style="font-size: 10px; color: #64748b; font-weight: normal; margin-top: 5px;">
                            @foreach($submission->data as $label => $value)
                                @if(!is_array($value))
                                    <strong>{{ $label }}:</strong> {{ $value }} |
                                @endif
                            @endforeach
                        </div>
                    </td>
                    <td style="text-align: right;">Rs. {{ number_format($submission->total_amount_paid, 2) }}</td>
                </tr>
            </tbody>
        </table>

        <div class="clearfix">
            <div class="totals">
                @php
                    $final = $submission->total_amount_paid;
                    $subtotal = $final / 1.18;
                    $tax = $final - $subtotal;
                @endphp
                <div class="total-row">Subtotal <span>Rs. {{ number_format($subtotal, 2) }}</span></div>
                <div class="total-row">IGST (18%) <span>Rs. {{ number_format($tax, 2) }}</span></div>
                <div class="total-row grand-total">Total Amount <span>Rs. {{ number_format($final, 2) }}</span></div>
            </div>
        </div>

        @if($form->invoice_terms)
            <div style="margin-top: 40px; border-top: 1px solid #f1f5f9; pt-20">
                <div class="details-label">Terms & Conditions / Remarks</div>
                <div style="font-size: 10px; color: #64748b; white-space: pre-wrap;">{{ $form->invoice_terms }}</div>
            </div>
        @endif

        <div class="footer">
            <p>This is a computer-generated tax invoice issued by MSMECCII regarding application ID #{{ $submission->id }}.</p>
            <p>&copy; {{ date('Y') }} MSMECCII. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
