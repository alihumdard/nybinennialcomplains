<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Biennial Statement for {{ $submission->business_name }}</title>
    <style>
        body { font-family: sans-serif; font-size: 10px; margin: 0; padding: 0; }
        .container { border: 2px solid black; padding: 15px; }
        .header { text-align: center; font-weight: bold; font-size: 14px; margin-bottom: 10px; }
        .instruction { font-weight: bold; text-align: center; margin-bottom: 15px; }
        .info-box { border: 1px solid black; padding: 5px; margin-bottom: 10px; min-height: 80px; }
        .info-box table { width: 100%; border-collapse: collapse; }
        .info-box td { padding: 2px 5px; }
        .address-box { float: left; width: 60%; font-size: 11px; line-height: 1.4; padding: 10px; }
        .qr-box { float: right; width: 30%; text-align: center; border: 1px solid black; padding: 10px; }
        .section-header { background-color: #d3d3d3; font-weight: bold; padding: 4px; border: 1px solid black; margin-top: 15px; margin-bottom: 0; }
        .content-box { border: 1px solid black; border-top: none; padding: 10px; min-height: 40px; }
        .content-box table { width: 100%; }
        .content-box td { padding: 4px; }
        .clear { clear: both; }
        .footer-text { font-size: 9px; margin-top: 10px; }
        .signature-box { border: 1px solid black; border-top: none; padding: 10px; }
        .signature-box table { width: 100%; }
        .signature-box td { padding: 8px 4px; }
        .signature-line { border-top: 1px solid black; padding-top: 2px; }
    </style>
</head>
<body>
<div class="container">
    <div class="header">2019 - BIENNIAL STATEMENT INSTRUCTION FORM</div>
    <div class="header" style="font-size: 11px;">(New York LLCs)</div>
    <div class="instruction">IMPORTANT! FOLLOW INSTRUCTIONS EXACTLY WHEN COMPLETING THIS FORM. PLEASE PRINT.</div>

    <div class="info-box">
        <table>
            <tr>
                <td>Customer ID Number</td>
                <td>Notice Date</td>
                <td>DOS ID Number</td>
                <td>Formation Date</td>
            </tr>
            <tr style="font-weight: bold;">
                <td>{{-- Placeholder --}}</td>
                <td>{{ date('m/d/Y') }}</td>
                <td>{{ $submission->dos_id }}</td>
                <td>{{ \Carbon\Carbon::parse($submission->initial_dos_filing_date)->format('m/d/Y') }}</td>
            </tr>
        </table>
    </div>

    <div class="info-box">
        <div style="padding: 5px;">Business Address</div>
        <div class="address-box">
            {{ $submission->business_name }}<br>
            {{ $submission->dos_process_address_1 }}<br>
            @if($submission->dos_process_address_2)
                {{ $submission->dos_process_address_2 }}<br>
            @endif
            {{ $submission->dos_process_city }}, {{ $submission->dos_process_state }} {{ $submission->dos_process_zip }}
        </div>
        
        @if ($qrCode)
        <div class="qr-box">
            <img src="data:image/svg+xml;base64,{{ $qrCode }}" alt="QR Code" style="width: 120px; height: 120px;">
        </div>
        @endif
        <div class="clear"></div>
    </div>

    <p class="section-header">STEP 1. Verify the accuracy of the pre-printed business information.</p>
    <div class="content-box">
        <table>
            <tr>
                <td style="width: 50%;">LLC Name: <strong>{{ $submission->business_name }}</strong></td>
                <td>DOS ID Number: <strong>{{ $submission->dos_id }}</strong></td>
            </tr>
             <tr>
                <td>Formation Date: <strong>{{ \Carbon\Carbon::parse($submission->initial_dos_filing_date)->format('m/d/Y') }}</strong></td>
                <td>Filing Year: <strong>{{ date('Y') }}</strong></td>
            </tr>
        </table>
    </div>

    <p class="section-header">STEP 2. Service of Process information (if applicable)</p>
    <div class="content-box">{{ $submission->dos_process_name }}</div>

    <p class="section-header">STEP 3. PAYMENT INFORMATION</p>
    <div class="content-box">
        @if($submission->is_paid)
            <strong style="color: green;">PAID:</strong> Payment for this filing has been successfully processed. Thank you.
        @else
            <strong>PENDING:</strong> Check enclosed for $100
        @endif
    </div>
    
    @if($url)
    <p class="section-header" style="margin-top: 15px; background-color: #aae0aaff;">STEP 4: File Online (Recommended)</p>
    <div class="content-box" style="text-align: center; padding: 15px;">
        <p style="font-size: 11px; margin: 0;">For faster processing, click the link below to complete your filing online.</p>
        <a href="{{ $url }}" style="font-size: 12px; font-weight: bold; color: #0000ee;">{{ $url }}</a>
    </div>
    @endif

    <p class="section-header">STEP 5. I authorize an electronic signature on behalf of the limited liability company.</p>
    <div class="signature-box">
        <table>
            <tr>
                <td class="signature-line" style="width: 50%;">Signature (to be signed by an authorized member/manager) *REQUIRED*</td>
                <td class="signature-line" style="width: 50%;">Print Name Clearly</td>
            </tr>
            <tr>
                <td class="signature-line">Title</td>
                <td class="signature-line">Email Address</td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>