<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ __('Biennial Statement Filing Form') }}</title>
    <style>
    @page {
        margin: .5cm;
    }

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: #fff;
    }

    .form-container {
        /* border: 2px solid black; */
        padding: 10px;
        /* max-width: 700px; */
        margin: auto;
        background: #fff;
    }

    .header {
        text-align: center;
        /* pura content center ho */
        /* margin-bottom: 5px; */
        white-space: nowrap;
        /* image aur text ek hi line pe rahen */
    }

    .header img {
        height: 70px;
        vertical-align: middle;
        /* text ke sath align kare */
        display: inline-block;
    }

    .header p {
        font-size: 16px;
        font-weight: bold;
        margin: 0 0 0 10px;
        /* thoda gap image aur text ke darmiyan */
        display: inline-block;
        vertical-align: middle;
    }


    .info-text {
        font-size: 10px;
        text-align: center;
        margin-bottom: 5px;
    }

    /* ✅ Grid replaced with table layout */
    .grid-3 {
        display: table;
        width: 100%;
        border: 1px solid black;
        margin: 5px 0;
        font-size: 12px;
        border-collapse: collapse;
    }

    .grid-3 div {
        display: table-cell;
        border-right: 1px solid black;
        padding: 5px;
        text-align: center;
    }

    .grid-3 div:last-child {
        border-right: none;
    }

    .info-box {
        border: 1px solid black;
        /* margin-top: 5px; */
        padding: 5px 5px 5px 15px;
    }

    .para {
        font-weight: bold;
        margin-bottom: 3px;
    }

    .info-boxx {
        padding: 1px;
        margin-top: 5px;
        position: relative;
        padding-bottom: 5px;
        padding-left: 15px;
    }

    .qr-code {
        float: right;
        margin-top: 8px;
        margin-right: 3px;
    }

    .section {
        margin-top: 5px;
    }

    .sections {
        border: 1px solid black;
        background: #dfdede;
        padding: 6px;
        font-size: 12px;
        margin-top: 5px;
    }

    .section-title {
        font-weight: bold;
        padding-left: 15px;
        margin-bottom: 2px;
    }

    .info {
        font-size: 10px;
        padding-left: 15px;
    }

    /* ✅ Flex replaced with inline-block */
    .field-group {
        margin-bottom: 3px;
        padding: 5px 0px;
    }

    .field-group .field {
        display: inline-block;
        width: 30%;
        /* padding-left: 5px; */
        min-width: 120px;
        margin-bottom: 4px;
        vertical-align: top;
    }

    .fields {
        display: inline-block;
        width: 80%;
        /* padding-left: 20px; */
        min-width: 120px;
        margin-bottom: 4px;
        vertical-align: top;
    }

    .field-group .field.small {
        width: 40px;
    }

    .field-group label {
        display: block;
        font-size: 11px;
        margin-bottom: 1px;
    }

    input,
    textarea {
        width: 100%;
        box-sizing: border-box;
        padding: 4px;
        border: 1px solid #999;
        border-radius: 2px;
        font-size: 11px;
        min-height: 22px;
    }

    .service-box {
        border: 1px solid black;
        background: #dfdede;
        padding: 6px 6px 6px 15px;
        font-size: 12px;
        margin-top: 8px;
    }

    /* ✅ Flex replaced with inline-block */
    .form-group {
        margin-top: 20px;
    }

    .form-group label {
        font-size: 12px;
        display: inline-block;
        margin-right: 5px;
    }

    .form-group input {
        display: inline-block;
        width: 10%;
        padding: 4px;
        border: 1px solid #999;
        border-radius: 4px;
        font-size: 12px;
        min-height: 22px;
    }

    .input-row {
        margin-bottom: 8px;
    }

    .input-row label {
        font-size: 12px;
        display: inline-block;
        margin-right: 5px;
    }

    .input-row input {
        display: inline-block;
        width: 80px;
        padding: 4px;
        border: 1px solid #999;
        border-radius: 4px;
        font-size: 12px;
        min-height: 22px;
    }

    .checkbox-row {
        margin: 8px 0;
        padding-top: 20px;
    }

    .checkbox-row input[type="checkbox"] {
        width: 14px;
        height: 14px;
        margin-right: 4px;
    }

    .checkbox-row p {
        display: inline-block;
        margin: 0;
        font-size: 12px;
    }

    .underline-row {
        margin-bottom: 3px;
    }

    .underline-row label {
        font-size: 12px;
        display: inline-block;
        margin-right: 5px;
    }

    .underline-row input {
        border: none;
        border-bottom: 1px solid #333;
        outline: none;
        padding: 3px 5px;
        font-size: 12px;
        width: 70%;
        min-height: 22px;
    }

    .date-container {
        padding-bottom: 3px;
    }

    .date-label {
        font-size: 13px;
        font-weight: 500;
        margin-right: 8px;
        color: #333;
        display: inline-block;
    }

    .date-inputs {
        display: inline-block;
    }

    .date-input {
        width: 35px;
        height: 22px;
        border: none;
        border-bottom: 2px solid #333;
        text-align: center;
        font-size: 11px;
        outline: none;
    }

    .date-separator {
        margin: 0 4px;
        font-size: 14px;
        color: #333;
        user-select: none;
    }

    .date-input::placeholder {
        color: #aaa;
        opacity: 0.7;
    }

    .last-box {
        border: 2px solid black;
        padding: 8px;
        margin-top: 8px;
    }

    .footer-address {
        margin-top: 5px;
    }

    .footer-address span {
        display: block;
        font-size: 12px;
    }
    </style>
</head>

<body>
    <div class="form-container">
        <!-- Header -->
        <div class="header">
            <img src="{{ public_path('logo.png') }}" alt="Logo" style="width:100px;">
            <p>{{ __('Biennial Statement Filing Form') }}</p>
        </div>
        <div class="info-text">
            {{ __('Please review the information below for accuracy. If any information is incorrect or need to be updated cross out the information and write the correct or updated information.') }}
        </div>

        <!-- Notice Info -->
        <div class="grid-3">
            <div>
                <b>{{ __('Notice Date') }}</b><br />
                {{ date('m/d/Y') }}
            </div>
            <div>
                <b>{{ __('DOS ID Number') }}</b><br />
                {{ $submission->dos_id }}
            </div>
            <div>
                <b>{{ __('Formation Date') }}</b><br />
                {{ \Carbon\Carbon::parse($submission->initial_dos_filing_date)->format('m/d/Y') }}
            </div>
        </div>

        <!-- Business Address -->
        <div class="info-box">
            <p class="para">{{ __('Business Address') }}</p>
            {{ $submission->business_name }}<br />
            {{ $submission->dos_process_address_1 }}<br />
            @if($submission->dos_process_address_2)
            {{ $submission->dos_process_address_2 }}<br>
            @endif
            {{ $submission->dos_process_city }}, {{ $submission->dos_process_state }} {{ $submission->dos_process_zip }}
        </div>

        <!-- Instructions & QR Code -->
        <div class="info-boxx">
            <div class="qr-code">
                @if ($qrCode)
                <img src="data:image/svg+xml;base64,{{ $qrCode }}" alt="{{ __('QR Code') }}"
                    style="width: 80px; height: 80px;">
                @endif
            </div>
            {{ __('Fill out the information below as accurately as possible.') }}<br />
            ◇ <b>{{ __('Prefer to complete this electronically?') }}</b><br />
            {{ __('Scan the QR code to complete the form online.') }}
            <p class="padding">
                <span><b>{{ __('Business Name:') }}</b> {{ $submission->business_name }}</span>
            </p>
            <span>
                ({{ __('Note: The business name cannot be changed on this form') }})<br />
                {{ __('To change the business name, you must file a') }}
                <b>{{ __('Certificate of Amendment') }}</b>
            </span>
        </div>

        <!-- CEO Info -->
        <div class="section">
            <div class="sections">
                <div class="section-title">
                    {{ __('Chief Executive Officer’s Name and Business Address') }}
                </div>
                <span class="info">
                    {{ __('Enter the full name and home or business address of the person who runs the company.') }}<br />
                  <span class="info">  {{ __('Do not write the name of the company here — it must be an individual.') }}</span>
                </span>
            </div>

            <div class="field-group">
                <div class="field" style="">
                    <label>{{ __('First name') }}</label>
                    <input type="text" value="{{ $submission->ceo_name }}" />
                </div>
                <div class="field small" style="padding-left: 15px;">
                    <label>{{ __('MI') }}</label>
                    <input type="text" class="small" />
                </div>
                <div class="field" style="padding-left: 15px;">
                    <label>{{ __('Last Name') }}</label>
                    <input type="text" />
                </div>
            </div>

            <div class="fields">
                <label style="font-size: 13px">{{ __('Address Line 1') }}</label>
                <input type="text" style="margin-bottom: 10px" value="{{ $submission->ceo_address_1 }}" />
            </div>

            <div class="field-group">
                <div class="field" style="">
                    <label>{{ __('City') }}</label>
                    <input type="text" value="{{ $submission->ceo_city }}" />
                </div>
                <div class="field small" style="padding-left: 15px;">
                    <label>{{ __('State') }}</label>
                    <input type="text" class="small" value="{{ $submission->ceo_state }}" />
                </div>
                <div class="field" style="padding-left: 15px;">
                    <label>{{ __('Zip code') }}</label>
                    <input type="text" value="{{ $submission->ceo_zip }}" />
                </div>
                <div class="field" style="">
                    <label>{{ __('Country') }}</label>
                    <input type="text" value="{{ $submission->country ?? '' }}" />
                </div>
            </div>
        </div>

        <!-- Service Address -->
        <div class="service-box">
            <b>{{ __('Service of Process Address') }}</b><br />
            ({{ __('Where legal documents can be sent. Must be a U.S. Street address — no P.O. Boxes.') }})<br />
            {{ __('If same as business address, write “Same.”') }}
        </div>

        <div class="field-group" style="padding: 5px 0px">
            <div class="field">
                <label>{{ __('Address line 1') }}</label>
                <input type="text" value="{{ $submission->registered_agent_address_1 }}" />
            </div>
            <div class="field small" style="padding-left: 15px;">
                <label>{{ __('State') }}</label>
                <input type="text" value="{{ $submission->registered_agent_state }}" />
            </div>
            <div class="field" style="padding-left: 15px;">
                <label>{{ __('City') }}</label>
                <input type="text" class="small" value="{{ $submission->registered_agent_city }}" />
            </div>
            <div class="field small" style="">
                <label>{{ __('Zip Code') }}</label>
                <input type="text" class="small" value="{{ $submission->registered_agent_zip }}" />
            </div>
        </div>

        <div class="sections">
            <div class="section-title">{{ __('Board of Directors Information') }}</div>
            <span class="info">
                {{ __('A board of directors is a group of people responsible for overseeing and guiding a company’s major decisions.') }}
            </span>
        </div>

        <div class="form-group">
            <label for="directors">{{ __('Total number of board of directors:') }}</label>
            <input type="text" id="directors" />
        </div>
        <div class="input-row">
            <label for="directors">
                {{ __('Number of Directors on the Board of Directors that are Women:') }}
            </label>
            <input type="text" id="directors" />
        </div>

        <div class="sections">
            <div class="section-titles">{{ __('Signer’s declaration') }}</div>
        </div>

        <div class="checkbox-row">
            <input type="checkbox" id="confirm" />
            <p>
                {{ __('I confirm that the information provided is true and correct, and that I am') }}<br />
                {{ __('authorized to sign and submit this Biennial Statement.') }}
            </p>
        </div>

        <div>
            <span style="font-weight: 600; font-size: 14px">{{ __('Name Of signer:') }}</span>
            <div class="underline-row">
                <label for="name">{{ __('(Print Name):') }}</label>
                <input type="text" id="name" />
            </div>
        </div>

        <div>
            <span style="font-weight: 600; font-size: 14px">{{ __('Signer’s Capacity*') }}</span>
            <span>({{ __('e.g., CEO, President') }}): </span>
            <div class="underline-row">
                <input type="text" id="name" />
            </div>
        </div>

        <div class="underline-row">
            <label for="name">{{ __('Signature:') }}</label>
            <input type="text" id="name" />
        </div>

        <div class="date-container">
            <div class="date-label">Date:</div>
            <div class="date-inputs">
                <input type="text" class="date-input" maxlength="2" placeholder="{{ __('MM') }}" />
                <span class="date-separator">/</span>
                <input type="text" class="date-input" maxlength="2" placeholder="{{ __('DD') }}" />
                <span class="date-separator">/</span>
                <input type="text" class="date-input" maxlength="4" placeholder="{{ __('YYYY') }}" />
            </div>
        </div>

        <div class="underline-row" style="padding-top: 5px">
            <label for="name">{{ __('Email Address*:') }} </label>
            <input type="text" id="name" value="{{ $submission->email }}" />
        </div>
        <p style="margin-top: 5px;">
            <i>({{ __('This email will be used to send your filing confirmation and future notifications') }})</i>
        </p>

        <div class="last-box">
            <p style="font-size: 14px">
                <span style="font-weight: bold">{{ __('Filing Fee:') }}</span> $125.00
            </p>
            <p style="font-size: 14px; font-weight: bold">
                {{ __('Payment Methods Accepted:') }}
            </p>
            <div class="checkbox-row">
                <input type="checkbox" id="confirm" />
                <p>{{ __('Check or Money Order (Payable to: New York Biennial Compliance)') }}</p>
            </div>
            <p style="font-size: 14px; font-weight: bold">
                {{ __('Mail Completed Form and Payment of $125.00 To:') }}
            </p>
            <p style="font-size: 14px; font-weight: bold">
                {{ __('New York Biennial Compliance.') }}
            </p>
            <div class="footer-address">
                <span>69 State Street, Suite 1300 #2017</span>
                <span>Albany, NY 12207</span>
            </div>
            <p style="font-size: 14px; font-weight: bold; margin-top: 10px;">{{ __('Processing Time:') }}</p>
            <p>
                {{ __('You will receive a confirmation by mail or email within 24–48 business hours after your filing is processed.') }}
            </p>
        </div>
    </div>
</body>

</html>