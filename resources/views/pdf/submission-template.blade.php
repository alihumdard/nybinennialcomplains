<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ __('Biennial Statement Filing Form') }}</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        background: #fff;
      }
      .form-container {
        border: 2px solid black;
        padding: 0px 15px; /* Reduced padding */
        max-width: 700px; /* Reduced max-width for better spacing */
        margin: auto;
        background: #fff;
      }
      .header {
        text-align: center;
        margin-bottom: 5px; /* Reduced margin */
      }
      .header img {
        height: 35px; /* Reduced height */
      }
      .header p {
        font-size: 16px; /* Reduced font size */
        font-weight: semibold;
        margin: 5px 0 0 0;
      }
      .info-text {
        font-size: 10px; /* Reduced font size */
        text-align: center;
        margin-bottom: 5px;
      }
      .grid-3 {
        display: flex;
        justify-content: space-between;
        border: 1px solid black;
        margin: 5px 0; /* Reduced margin */
        padding: 5px;
        font-size: 12px; /* Reduced font size */
      }
      .grid-3 div {
        text-align: left;
      }
      .info-box {
        border: 1px solid black;
        margin-top: 5px; /* Reduced margin */
        padding: 5px; /* Reduced padding */
      }
      .para {
        font-weight: bold;
        margin-bottom: 3px;
      }
      .info-boxx {
        padding: 0 10px;
        margin-top: 5px; /* Reduced margin */
        position: relative;
        padding-bottom: 5px;
        display: flex;
        flex-direction: column;
        gap: 3px;
      }
      .qr-code {
        float: right;
        margin-top: -10px; /* Adjusted position */
        margin-right: -10px;
      }
      .section {
        margin-top: 5px; /* Reduced margin */
      }
      .sections {
        border: 1px solid black;
        background: #dfdede;
        padding: 6px; /* Reduced padding */
        font-size: 12px; /* Reduced font size */
        margin-top: 5px;
      }
      .section-title {
        font-weight: bold;
        margin-bottom: 2px;
      }
      .info {
        font-size: 10px; /* Reduced font size */
      }
      .field-group {
        display: flex;
        flex-wrap: wrap;
        gap: 5px; /* Reduced gap */
        margin-bottom: 3px;
        padding: 5px;
      }
      .field-group .field {
        flex: 1;
        min-width: 120px; /* Reduced min-width */
      }
      .field-group .field.small {
        flex: 0 0 40px; /* Reduced width */
      }
      .field-group label {
        display: block;
        font-size: 11px; /* Reduced font size */
        margin-bottom: 1px;
      }
      input,
      textarea {
        width: 100%;
        box-sizing: border-box;
        padding: 4px; /* Reduced padding */
        border: 1px solid #999;
        border-radius: 2px;
        font-size: 11px; /* Reduced font size */
        min-height: 22px; /* Reduced min-height */
      }
      .service-box {
        border: 1px solid black;
        background: #dfdede;
        padding: 6px; /* Reduced padding */
        font-size: 12px; /* Reduced font size */
        margin-top: 8px;
      }
      .form-group {
        display: flex;
        align-items: center;
        margin-top: 5px;
        font-family: Arial, sans-serif;
        gap: 10px; /* Reduced gap */
        flex-wrap: wrap;
      }
      .form-group label {
        font-size: 12px; /* Reduced font size */
        white-space: nowrap;
      }
      .form-group input {
        flex: 1;
        padding: 4px; /* Reduced padding */
        border: 1px solid #999;
        border-radius: 4px;
        font-size: 12px; /* Reduced font size */
        min-height: 22px;
      }
      .input-row {
        display: flex;
        align-items: center;
        margin-bottom: 8px; /* Reduced margin */
        font-family: Arial, sans-serif;
        gap: 5px; /* Reduced gap */
        flex-wrap: wrap;
      }
      .input-row label {
        font-size: 12px; /* Reduced font size */
        white-space: nowrap;
      }
      .input-row input {
        width: 80px; /* Reduced width */
        padding: 4px; /* Reduced padding */
        border: 1px solid #999;
        border-radius: 4px;
        font-size: 12px; /* Reduced font size */
        min-height: 22px;
      }
      .checkbox-row {
        display: flex;
        gap: 6px; /* Reduced gap */
        font-family: Arial, sans-serif;
        margin: 8px 0; /* Reduced margin */
      }
      .checkbox-row input[type="checkbox"] {
        width: 14px;
        height: 14px;
      }
      .checkbox-row p {
        margin: 0;
        font-size: 12px; /* Reduced font size */
      }
      .underline-row {
        display: flex;
        align-items: center;
        gap: 5px; /* Reduced gap */
        margin-bottom: 3px;
        font-family: Arial, sans-serif;
        flex-wrap: wrap;
      }
      .underline-row label {
        font-size: 12px; /* Reduced font size */
        white-space: nowrap;
      }
      .underline-row input {
        border: none;
        border-bottom: 1px solid #333;
        outline: none;
        padding: 3px 5px; /* Reduced padding */
        font-size: 12px; /* Reduced font size */
        flex: 1;
        min-height: 22px;
      }
      .date-container {
        display: flex;
        align-items: center;
        padding-bottom: 3px;
      }
      .date-label {
        font-size: 13px; /* Reduced font size */
        font-weight: 500;
        margin-right: 8px; /* Reduced margin */
        color: #333;
      }
      .date-inputs {
        display: flex;
        align-items: center;
      }
      .date-input {
        width: 35px; /* Reduced width */
        height: 22px; /* Reduced height */
        border: none;
        border-bottom: 2px solid #333;
        text-align: center;
        font-size: 11px; /* Reduced font size */
        outline: none;
      }
      .date-separator {
        margin: 0 4px; /* Reduced margin */
        font-size: 14px; /* Reduced font size */
        color: #333;
        user-select: none;
      }
      .date-input::placeholder {
        color: #aaa;
        opacity: 0.7;
      }
      .last-box {
        border: 2px solid black;
        padding: 8px; /* Reduced padding */
        margin-top: 8px; /* Reduced margin */
      }
      .footer-address {
        margin-top: 5px;
      }
      .footer-address span {
        display: block;
        font-size: 12px; /* Reduced font size */
      }
    </style>
  </head>
  <body>
    <div class="form-container">
      <!-- Header -->
      <div class="header">
        <img src="/logo.png" alt="{{ __('NY Logo') }}" />
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
          <img src="data:image/svg+xml;base64,{{ $qrCode }}" alt="{{ __('QR Code') }}" style="width: 80px; height: 80px;">
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
            {{ __('Do not write the name of the company here — it must be an individual.') }}
          </span>
        </div>

        <div class="field-group">
          <div class="field">
            <label>{{ __('First name') }}</label>
            <input type="text" value="{{ $submission->ceo_name }}" />
          </div>
          <div class="field small">
            <label>{{ __('MI') }}</label>
            <input type="text" class="small" />
          </div>
          <div class="field">
            <label>{{ __('Last Name') }}</label>
            <input type="text" />
          </div>
        </div>

        <div class="field">
          <label style="font-size: 13px">{{ __('Address Line 1') }}</label>
          <input type="text" style="margin-bottom: 10px" value="{{ $submission->ceo_address_1 }}" />
        </div>

        <div class="field-group">
          <div class="field">
            <label>{{ __('City') }}</label>
            <input type="text" value="{{ $submission->ceo_city }}" />
          </div>
          <div class="field small">
            <label>{{ __('State') }}</label>
            <input type="text" class="small" value="{{ $submission->ceo_state }}" />
          </div>
          <div class="field">
            <label>{{ __('Zip code') }}</label>
            <input type="text" value="{{ $submission->ceo_zip }}" />
          </div>
          <div class="field">
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
        <div class="field small">
          <label>{{ __('State') }}</label>
          <input type="text" value="{{ $submission->registered_agent_state }}" />
        </div>
        <div class="field">
          <label>{{ __('City') }}</label>
          <input type="text" class="small" value="{{ $submission->registered_agent_city }}" />
        </div>
        <div class="field small">
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
          <input
            type="text"
            class="date-input"
            maxlength="2"
            placeholder="{{ __('MM') }}"
          />
          <span class="date-separator">/</span>
          <input
            type="text"
            class="date-input"
            maxlength="2"
            placeholder="{{ __('DD') }}"
          />
          <span class="date-separator">/</span>
          <input
            type="text"
            class="date-input"
            maxlength="4"
            placeholder="{{ __('YYYY') }}"
          />
        </div>
      </div>

      <div class="underline-row" style="padding-top: 5px">
        <label for="name">{{ __('Email Address*:') }} </label>
        <input type="text" id="name" value="{{ $submission->email }}" />
      </div>
      <p style="margin-top: 5px;">
        <i
          >({{ __('This email will be used to send your filing confirmation and future notifications') }})</i
        >
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
