@component('mail::message')
# Introduction

O corpo da mensagem!

<<<<<<< HEAD

=======
 {{-- <h1>{{ $details['title'] }}</h1> --}}
>>>>>>> 6b17707239791d3f21b7b3ae241dd29477cb1f88
<p>{{ $details['body'] }}</p>

@component('mail::button', ['url' => ''])
Botão
@endcomponent

VLW,<br>
{{ config('app.name') }}
@endcomponent
