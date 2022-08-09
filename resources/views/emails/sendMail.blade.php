@component('mail::message')

<h1>{{ $details['title'] }}</h1>

<p>Olá, meu nome é {{ $details['name'] }}</p>

<p>{{ $details['body'] }}</p>

<h5>Email enviado por {{ $details['user_email'] }}</h5>

@endcomponent
