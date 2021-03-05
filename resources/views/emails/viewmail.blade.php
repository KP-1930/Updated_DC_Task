@component('mail::message')

# Hello {{ $user->name }}


Thank you so much for sign Up.


@component('mail::button', ['url' => ''])
View
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent