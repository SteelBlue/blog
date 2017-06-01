@component('mail::message')
# Introduction

Thanks so much for registering!

@component('mail::button', ['url' => 'http://blog.dev'])
Start Browsing
@endcomponent

@component ('mail::panel', ['url' => ''])
This will be an inspiring quote...
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
