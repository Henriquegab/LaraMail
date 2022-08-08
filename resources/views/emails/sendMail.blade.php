@component('mail::message')
# Introduction

O corpo da mensagem!

 {{-- <h1>{{ $details['title'] }}</h1> --}}
<p>{{ $details['body'] }}</p>

@component('mail::button', ['url' => ''])
Botão
@endcomponent

VLW,<br>
{{ config('app.name') }}
@endcomponent
