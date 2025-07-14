@component('mail::message')
# Submission Information

Hello,

Here is an update on your biennial statement filing.

**Business Name:** {{ $submission->business_name }}
**DOS ID:** {{ $submission->dos_id }}

@if ($submission->is_paid)
@component('mail::panel')
Your payment has been successfully processed. Thank you for your payment.
@endcomponent
@else
@component('mail::panel')
Your submission is pending payment. Please download the attached PDF and follow the instructions to complete your filing.
@endcomponent

@component('mail::button', ['url' => route('submission.pdf', $submission->id)])
Download Statement PDF
@endcomponent
@endif

Thanks,<br>
{{ config('app.name') }}
@endcomponent