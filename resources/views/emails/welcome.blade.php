@component('mail::message')
# Introduction

Thanks so much for registering!

@component('mail::button', ['url' => 'https://blog.dev'])
Start Browsing
@endcomponent

@component('mail::panel')
Some inspirational quote to go here...
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
