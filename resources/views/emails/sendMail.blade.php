@component('mail::message')

<h1>{{ $details['title'] }}</h1>

<p>{{ $details['body'] }}</p>

@component('mail::panel')
This is the panel content.
@endcomponent

@component('mail::table')
| Laravel       | Table         | Example  |
| ------------- |:-------------:| --------:|
| Col 2 is      | Centered      | $10      |
| Col 3 is      | Right-Aligned | $20      |
@endcomponent

{{-- @component('mail::button', ['url' => ''])
Botão
@endcomponent --}}

{{-- VLW,<br> --}}
{{ config('app.name') }}
@endcomponent
