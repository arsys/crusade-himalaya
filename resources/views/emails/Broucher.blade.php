@component('mail::message')
# New email for subscription: {{$data['email']}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
