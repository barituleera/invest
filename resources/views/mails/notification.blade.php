@component('mail::message')
{{-- # Introduction --}}

<h2> Hello, {{ $name }} </h2>

@php
    $pattern = array('<br/>');
    $nb = explode('<br>', $body);
    foreach ($nb as $b) {
        echo $b.'<br>';
    }
@endphp

@component('mail::button', ['url' => 'https:://www.keycoinify.com/dashboard'])
visit your dashboard
@endcomponent


For any questions, please contact us at {{env('MAIL_FROM_ADDRESS')}} or whatsApp us on {{env('APP_PHONE')}}
<br><br>

Thank you for investmenting with us,<br>
{{ config('app.name') }}
@endcomponent
