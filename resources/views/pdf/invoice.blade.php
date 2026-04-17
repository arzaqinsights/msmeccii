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
            <div class="logo">MSME<span>CCII</span></div>
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
                    <div class="details-label">Vendor Details</div>
                    <div class="details-value">MSME Chamber of Commerce</div>
                    <div class="details-value" style="font-weight: normal; font-size: 11px; white-space: pre-wrap;">{{ $details['address'] ?? 'Official Business Entity Address' }}</div>
                </td>
            </tr>
        </table>

        <table class="items">
            <thead>
                <tr>
                    <th>Description of Service</th>
                    <th style="text-align: right;">Amount (INR)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $form->name }} &mdash; Application Fee</td>
                    <td style="text-align: right;">₹{{ number_format($submission->total_amount_paid, 2) }}</td>
                </tr>
            </tbody>
        </table>

        <div class="clearfix">
            <div class="totals">
                @php
                    $final = $submission->total_amount_paid;
                    // For calculation in PDF, we'll assume standard 18% if no break down is stored, 
                    // or just show total if it's already calculated.
                    $subtotal = $final / 1.18;
                    $tax = $final - $subtotal;
                @endphp
                <div class="total-row">Subtotal <span>₹{{ number_format($subtotal, 2) }}</span></div>
                <div class="total-row">IGST (18%) <span>₹{{ number_format($tax, 2) }}</span></div>
                <div class="total-row grand-total">Total Amount <span>₹{{ number_format($final, 2) }}</span></div>
            </div>
        </div>

        <div class="footer">
            <p>This is a computer-generated invoice and does not require a physical signature.</p>
            <p>&copy; {{ date('Y') }} MSMECCII. All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>
