@component('mail::message')
# Subject: Your Biennial Statement PDF

Hello,

Your PDF document should be attached directly to this email.

---

**How to find the attached PDF:**

* Look for a **paperclip icon (📎)** at the top or bottom of this email.
* Or, scroll to the very bottom of this message to see a file preview box.
* The file will be named `biennial-statement-{{ $submission->dos_id }}.pdf`.

**Important:** There is no download button inside the body of this email. The file is a direct attachment.

@component('mail::panel')
{{ __('If you follow the steps above and still cannot find or open the attached PDF, it means the file may be failing to generate correctly. Please reply and let us know exactly what you see so we can help you solve the root cause.') }}
@endcomponent

{{ __('Thank you,') }}<br>
{{ config('app.name') }}
@endcomponent