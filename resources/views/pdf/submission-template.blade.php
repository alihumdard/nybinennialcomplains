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


    .headings {
        font-size: 10px;
    }

    .paragraphs {
        font-size: 9px;
    }

    .header {
        padding: 0 80px;
        margin: 0 !important;
        white-space: nowrap;
    }

    .header img {
        width: 100px;
        height: 100px;
        /* colon : lagao */
        vertical-align: middle;
        /* text ke sath align kare */
        display: inline-block;

        margin: 0 !important;
        padding: 0 !important;

    }

    .header p {
        font-size: 20px;
        display: inline-block;
        margin: 0 0 0 15px;
        /* sirf thoda gap logo aur text me */
        vertical-align: middle;
    }

    .info-text {
        font-size: 15px;
        margin: 0 !important;
        /* yahan margin hata do */
        padding: 0px 20px;
    }


    /* ✅ Grid replaced with table layout */
    .grid-3 {
        display: table;
        width: 100%;
        border: 1px solid black;
        margin: 5px 0;
        /* font-size: 12px; */
        border-collapse: collapse;
    }

    .grid-3 div {
        display: table-cell;
        /* border-right: 1px solid black; */
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
        margin: 0px;
        margin-bottom: 18px;
        margin-top: 10px;
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
        /* font-size: 12px; */
        margin-top: 5px;
    }

    .section-title {
        font-weight: bold;
        padding-left: 15px;
        margin-bottom: 2px;
    }

    .info {
        /* font-size: 10px; */
        padding-left: 15px;
    }

    /* ✅ Flex replaced with inline-block */
    .field-group {
        margin-bottom: 3px;
        padding: 5px 0px;
    }

    .field-group .field {
        display: inline-block;
        /* width: 30%; */
        /* padding-left: 5px; */
        /* min-width: 120px; */
        margin-bottom: 4px;
        vertical-align: top;
    }

    .fields {
        display: inline-block;
        width: 98.2%;
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
        /* font-size: 11px; */
        margin-bottom: 1px;
    }

    input,
    textarea {
        width: 100%;
        box-sizing: border-box;
        padding: 4px;
        border: 1px solid #999;
        border-radius: 2px;
        /* font-size: 11px; */
        min-height: 22px;
    }

    .service-box {
        border: 1px solid black;
        background: #dfdede;
        padding: 6px 6px 6px 15px;
        /* font-size: 12px; */
        margin-top: 8px;
    }

    /* ✅ Flex replaced with inline-block */
    .form-group {
        margin-top: 20px;
    }

    .form-group label {
        /* font-size: 12px; */
        display: inline-block;
        margin-right: 5px;
    }

    .form-group input {
        display: inline-block;
        width: 10%;
        padding: 4px;
        border: 1px solid #999;
        border-radius: 4px;
        /* font-size: 12px; */
        min-height: 22px;
    }

    .input-row {
        margin-bottom: 8px;
        margin-top: 4px;
    }

    .input-row label {
        /* font-size: 12px; */
        display: inline-block;
        margin-right: 7px;
    }

    .input-row input {
        display: inline-block;
        width: 73px;
        padding: 4px;

        margin-left: 3.5px;
        border: 1px solid #999;
        border-radius: 4px;
        /* font-size: 12px; */
        min-height: 22px;
    }

    .checkbox-row {
        /* margin: 8px 0; */
        padding-top: 10px;
    }



    .checkbox-rows {
        display: flex;
        align-items: center;
    }

    .checkbox-rows input[type="checkbox"] {
        width: 14px;
        /* thoda clear dikhne ke liye size bara kar sakte ho */
        height: 14px;
        margin: 0;
        /* ✅ sab margin remove */
        padding: 0;
        /* ✅ sab padding remove */
        border: none;
    }


    .checkbox-rows p {
        display: inline-block;
        margin: 0;
        /* font-size: 12px; */
    }

    .checkbox-row input[type="checkbox"] {
        width: 10px;
        height: 10 px;
        margin-right: 4px;
        border: none;
    }

    .checkbox-row p {
        display: inline-block;
        margin: 0;
        /* font-size: 12px; */
    }

    .underline-row {
        /* margin-bottom: 3px; */
    }

    .underline-row label {
        /* font-size: 12px; */
        display: inline;
        margin-right: 5px;
    }

    .underline-row input {
        border: none;
        border-bottom: 1px solid #333;
        outline: none;
        /* padding: 3px 5px; */
        /* font-size: 12px; */
        width: 70%;
        min-height: 22px;
    }

    .date-container {
        padding-bottom: 3px;
        margin: 0% !important;
        padding: 0% !important;
    }

    .date-label {
        /* font-size: 13px; */
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
        /* font-size: 11px; */
        outline: none;
    }

    .date-separator {
        margin: 0 4px;
        /* font-size: 14px; */
        color: #333;
        user-select: none;
    }

    .date-input::placeholder {
        color: #aaa;
        opacity: 0.7;
    }

    .last-box {
        border: 2px solid black;
        padding: 0px 8px 8px 8px;
        margin-top: 8px;
    }

    .footer-address {
        margin-top: 5px;
    }

    .footer-address span {
        display: block;
        /* font-size: 12px; */
    }

    .form-row {
        white-space: nowrap;
        /* line break roke ga */
    }

    .form-field {
        display: inline-block;
        vertical-align: top;
        width: 23.3%;
        /* 4 fields = ~25% minus gaps */
        margin-right: 1%;
    }

    .form-field:last-child {
        margin-right: 0;
    }

    .ir-row {
        white-space: nowrap;
        /* line break prevent karega */
    }

    .ir-field {
        display: inline-block;
        vertical-align: top;
        margin-right: 15px;
        /* width: 41.5%; */
        /* approx size, adjust as needed */
    }

    .ir-small {
        width: 10%;
        /* MI chhota box */
    }

    .ir-field:last-child {
        margin-right: 0;
    }
    </style>
</head>

<body>
    <div class="form-container">
        <!-- Header -->
        <div class="header">
            <img src="{{ public_path('logo.png') }}" alt="Logo">
            <p>{{ __('Biennial Statement Filing Form') }}</p>
        </div>

        <div class="info-text paragraphs">
            {{ __('Please review the information below for accuracy. If any information is incorrect or need to be updated cross out the information and write the correct or updated information.') }}
        </div>


        <!-- Notice Info -->
        <div class="grid-3">
            <div style="padding-bottom: 27px; line-height: 1;">
                <b class="headings">Notice Date </b><br />
                <span class="paragraphs"> {{ date('m/d/Y') }}</span>
            </div>
            <div style="padding-bottom: 27px; line-height: 1;">
                <b class="headings">{{ __('DOS ID Number') }}</b><br />
                <span class="paragraphs">{{ $submission->dos_id }}</span>
            </div>
            <div style="padding-bottom: 27px; line-height: 1;">
                <b class="headings">{{ __('Formation Date') }}</b><br />
                <span
                    class="paragraphs">{{ \Carbon\Carbon::parse($submission->initial_dos_filing_date)->format('m/d/Y') }}</span>
            </div>
        </div>

        <!-- Business Address -->
        <div class="info-box">
            <p class="para headings">{{ __('Business Address') }}</p>
            <span class="paragraphs">
                {{ $submission->business_name }}<br />
                {{ $submission->dos_process_address_1 }}<br />
                @if($submission->dos_process_address_2)
                {{ $submission->dos_process_address_2 }}<br>
                @endif
                <!-- {{ $submission->dos_process_city }}, {{ $submission->dos_process_state }}
                {{ $submission->dos_process_zip }} -->
            </span>
        </div>

        <!-- Instructions & QR Code -->
        <div class="info-boxx">
            <div class="qr-code">
                @if ($qrCode)
                <img src="data:image/svg+xml;base64,{{ $qrCode }}" alt="{{ __('QR Code') }}"
                    style="width: 80px; height: 80px;">
                @endif
            </div>
            <span class="paragraphs">
                {{ __('Fill out the information below as accurately as possible.') }}<br />
            </span>
            <ul class="headings" style="margin:0; padding:0; list-style-position: inside;">
                <li style="padding-top: 3px;"><b>Prefer to complete this electronically?</b></li>
            </ul>


            <span class="paragraphs">
                {{ __('Scan the QR code to complete the form online.') }}
            </span>
            <p class="padding headings">
                <span><b>{{ __('Business Name:') }}</b> {{ $submission->business_name }}</span>
            </p>
            <span class="paragraphs">
                <span
                    style="font-weight: bold;">({{ __('Note: The business name cannot be changed on this form') }})</span><br />
                {{ __('To change the business name, you must file a') }}
            </span>
            <b class="headings">{{ __('Certificate of Amendment') }}</b>
        </div>

        <!-- CEO Info -->
        <div class="section">
            <div class="sections" style="padding: 6px 0px;">
                <div class="section-title headings">
                    {{ __('Chief Executive Officer’s Name and Business Address') }}
                </div>
                <span class="info paragraphs">
                    {{ __('Enter the full name and home or business address of the person who runs the company.') }}<br />
                    <span class="info">
                        {{ __('Do not write the name of the company here — it must be an individual.') }}</span>
                </span>
            </div>

            <div class="ir-row">
                <div class="ir-field" style=" width: 40%;">
                    <label class="headings" style="font-weight: bold; padding-left: 2px;">{{ __('First name') }}</label>
                    <input type="text" value="{{ $submission->ceo_name }}" />
                </div>
                <div class="ir-field ir-small" style=" padding-left: 17px;">
                    <label class="headings" style="font-weight: bold; padding-left: 2px;">{{ __('MI') }}</label>
                    <input type="text" />
                </div>
                <div class="ir-field" style="width: 38.5%; padding-left: 16px;">
                    <label class="headings" style="font-weight: bold; padding-left: 2px;">{{ __('Last Name') }}</label>
                    <input type="text" />
                </div>
            </div>


            <div class="fields">
                <label class="headings" style="font-weight: bold; padding-left: 2px;">{{ __('Address Line 1') }}</label>
                <input type="text" style="margin-bottom: 10px" value="{{ $submission->ceo_address_1 }}" />
            </div>

            <div class="form-row">
                <div class="form-field" style="width: 40%;">
                    <label class="headings" style="font-weight: bold; padding-left: 2px;">{{ __('City') }}</label>
                    <input type="text" value="{{ $submission->ceo_city }}" />
                </div>
                <div class="form-field" style="width: 10%; padding: 0px 25px;">
                    <label class="headings" style="font-weight: bold; padding-left: 2px;">{{ __('State') }}</label>
                    <input type="text" value="{{ $submission->ceo_state }}" />
                </div>
                <div class="form-field" style="width: 10%; padding-right: 23px;">
                    <label class="headings" style="font-weight: bold; padding-left: 2px;">{{ __('Zip code') }}</label>
                    <input type="text" value="{{ $submission->ceo_zip }}" />
                </div>
                <div class="form-field">
                    <label class="headings" style="font-weight: bold; padding-left: 2px;">{{ __('Country') }}</label>
                    <input type="text" value="{{ $submission->country ?? '' }}" />
                </div>
            </div>

        </div>

        <!-- Service Address -->
        <div class="service-box" style="padding-top: 2px;">
            <b class="headings">{{ __('Service of Process Address') }}</b><br />
            <span class="paragraphs">
                ({{ __('Where legal documents can be sent. Must be a U.S. Street address — no P.O. Boxes.') }})<br />
            </span>
            <b class="headings"> {{ __('If same as business address, write “Same.”') }}</b>
        </div>

        <div class="field-group" style="padding: 5px 0px">
            <div class="field" style="width: 40%;">
                <label class="headings" style="font-weight: bold; padding-left: 2px;">{{ __('Address line 1') }}</label>
                <input type="text" value="{{ $submission->registered_agent_address_1 }}" />
            </div>
            <div class="field small" style="padding-left: 33px; width: 10%;">
                <label class="headings" style="font-weight: bold; padding-left: 2px;">{{ __('State') }}</label>
                <input type="text" value="{{ $submission->registered_agent_state }}" />
            </div>
            <div class="field" style="padding-left: 32px; width: 9.6%;">
                <label class="headings" style="font-weight: bold; padding-left: 2px;">{{ __('City') }}</label>
                <input type="text" class="small" value="{{ $submission->registered_agent_city }}" />
            </div>
            <div class="field small" style="width: 23.3%; padding-left: 33px;">
                <label class="headings" style="font-weight: bold; padding-left: 2px;">{{ __('Zip Code') }}</label>
                <input type="text" class="small" value="{{ $submission->registered_agent_zip }}" />
            </div>
        </div>

        <div class="service-box" style="padding-top: 2px;">
            <b class="headings">{{ __('Board of Directors Information') }}</b><br />
            <span class="paragraphs">
                {{ __('A board of directors is a group of people responsible for overseeing and guiding a company’s major decisions.') }}<br />
            </span>
        </div>


        <div class="form-group">
            <label for="directors" class="paragraphs"
                style="padding-bottom: 10px;">{{ __('Total number of board of directors:') }}</label>
            <input type="text" id="directors" />
        </div>
        <div class="input-row">
            <label for="directors" class="paragraphs" style="padding-bottom: 10px;">
                {{ __('Number of Directors on the Board') }}<br>
                {{ __('of Directors that are Women:') }}
            </label>

            <input type="text" id="directors" />
        </div>

        <div class="sections" style="padding: 6px 0px;">
            <div class="headings" style="padding-left: 15px; font-weight: bold;">{{ __('Signer’s declaration') }}</div>
        </div>

        <div class="checkbox-row">
            <input type="checkbox" id="confirm" />
            <p class="paragraphs">
                {{ __('I confirm that the information provided is true and correct, and that I am') }}<br />
                {{ __('authorized to sign and submit this Biennial Statement.') }}
            </p>
        </div>

        <div>
            <span class="headings"
                style="font-weight: 600; padding-bottom: 0px !important;">{{ __('Name Of signer:') }}</span>
            <div class="underline-row">
                <label for="name" class="headings" style="font-weight: bold;">{{ __('(Print Name):') }}</label>
                <input style="width: 71.5%;" type="text" id="name" />
            </div>
        </div>

        <div style="padding-bottom: 20px;">
            <span class="headings" style="font-weight: 600;">{{ __('Signer’s Capacity*') }}</span>
            <span class="paragraphs">({{ __('e.g., CEO, President') }}): </span>
            <div class="underline-row">
                <input style="width: 81.5%;" type="text" id="name" />
            </div>
        </div>


        <div class="date-container">
            <div class="headings date-label" style="font-weight: bold; padding-bottom: 5px;">Date</div>
            <div class="date-inputs">
                <input type="text" class="date-input headings" maxlength="2" placeholder="{{ __('MM') }}" />
                <span class="date-separator">/</span>
                <input type="text" class="date-input headings" maxlength="2" placeholder="{{ __('DD') }}" />
                <span class="date-separator">/</span>
                <input type="text" class="date-input headings" maxlength="4" placeholder="{{ __('YYYY') }}" />
            </div>
        </div>
        <div class="underline-row">
            <label for="" class="headings" style="font-weight: bold;">Signature:</label>
            <input style="width: 73.5%;" type="text" id="name" />
        </div>

        <!-- <div class="underline-row" style="padding-top: 5px">
            <label for="name " class="headings" style="font-weight: bold;">{{ __('Email Address*:') }} </label>
            <input type="text" class="paragraphs" id="name" value="{{ $submission->email }}" />
        </div> -->
        <p style="margin-top: 5px;" class="paragraphs">
            <i>({{ __('This email will be used to send your filing confirmation and future notifications') }})</i>
        </p>
        <div class="sections">
            <div class="headings" style="padding-left: 3px 0px 3px 15px; font-weight: bold;">
                {{ __('Submission Instructions ') }}
            </div>
        </div>
        <div class="last-box">
            <p style="padding-top: 0% !important;">
                <span style="font-weight: bold" class="headings">{{ __('Filing Fee:') }}</span><span class="paragraphs">
                    $125.00</span>
            </p>
            <p style="font-weight: bold;" class="headings">
                {{ __('Payment Methods Accepted:') }}
            </p>
            <div class="checkbox-rows">
                <input type="checkbox" id="confirm" />
                <p class="paragraphs" style="padding-bottom: 5px; margin:0;">
                    {{ __('Check or Money Order (Payable to: New York Biennial Compliance)') }}
                </p>
            </div>

            <p style="font-weight: bold; margin: 0; padding: 0;" class="headings">
                {{ __('Mail Completed Form and Payment of $125.00 To:') }}
            </p>
            <p style="font-weight: bold; margin: 0; padding: 1px 0px;" class="headings">
                {{ __('New York Biennial Compliance.') }}
            </p>
            <div class="footer-address paragraphs" style="margin: 0; padding: 0;">
                <span>69 State Street, Suite 1300 #2017</span><br />
                <span>Albany, NY 12207</span>
            </div>

            <p class="headings" style=" font-weight: bold; margin: 10px 0px 0px 0px; padding: 0;">{{ __('Processing Time:') }}</p>
            <p class="paragraphs" style="padding: 0; margin: 0;">
                {{ __('You will receive a confirmation by mail or email within 24–48 business hours after your filing is processed.') }}
            </p>
            <div>
                <div>
                    <p class="headings" style="font-weight: bold; margin-top: 10px;">
                        {{ __('Expedited Electronic Submission:') }}
                    </p>

                    <div style="margin-top: 5px; white-space: nowrap; " >
                        <label for="directors" class="paragraphs"
                            style="margin: 0; display: inline-block; vertical-align: middle;">
                            {{ __('For faster processing, scan the QR code below') }}<br>
                            {{ __('to keep your form and payment online') }}
                        </label>

                        <div style="display: inline-block; vertical-align: middle; margin-left: 35px;">
                            @if ($qrCode)
                            <img src="data:image/svg+xml;base64,{{ $qrCode }}" alt="{{ __('QR Code') }}"
                                style="width: 70px; height: 70px;">
                            @endif
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <p class="paragraphs">This is a provate Compliance assistance service and is not affiliated with the New York
            Department of state or any givernment agency. Filling may also be completed directly with the Department of
            state . Fees charged by the service include state filling fees and additional</p>
    </div>
</body>

</html>