@component('mail::message')
# Hello

Congrats you have signed up to ....


Thanks,<br>
{{ $customer->name }}
<br>
{{ config('app.name') }}
@endcomponent
