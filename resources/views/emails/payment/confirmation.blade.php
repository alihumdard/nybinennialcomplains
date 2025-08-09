@component('mail::message')
# Payment Successful

{{ __('Hello,') }}

{{ __('Thank you for your payment. Your biennial statement filing for the business below has been successfully processed.') }}

**Business Name:** {{ $submission->business_name }}
**DOS ID:** {{ $submission->dos_id }}

{{ __('You will receive further updates from us in due course.') }}

{{ __('Thanks,') }}<br>
{{ config('app.name') }}
@endcomponent