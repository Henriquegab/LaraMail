@component('mail::message')
# Introduction

O corpo da mensagem!


<p>{{ $details['body'] }}</p>

@component('mail::button', ['url' => ''])
Botão
@endcomponent

VLW,<br>
{{ config('app.name') }}
@endcomponent
