@component('mail::message')
# Introduction

The body of your message.

- one
- two
- three

@component('mail::button', ['url' => 'http://blog.dev'])
Start Browsing
@endcomponent

@component ('mail::panel', ['url' => ''])
	This will be an inspiring quote...
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
