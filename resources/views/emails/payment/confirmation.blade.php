@component('mail::message')
# Payment Successful

Hello,

Thank you for your payment. Your biennial statement filing for the business below has been successfully processed.

**Business Name:** {{ $submission->business_name }}
**DOS ID:** {{ $submission->dos_id }}

You will receive further updates from us in due course.

Thanks,<br>
{{ config('app.name') }}
@endcomponent