@component('mail::message')
# Laramap

- {{ $sms->username }}
- {{ $sms->email }}

@component('mail::panel')
    {{ $sms->message }}
@endcomponent

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
