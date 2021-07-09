@component('mail::message')
# Laramap

- {{ $username }}
- {{ $email }}

@component('mail::panel')
    {{ $message_content }}
@endcomponent

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
