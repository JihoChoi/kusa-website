@component('mail::message')
# Introduction

Welcome to Purdue Korean Undergraduate Student Association!

@component('mail::button', ['url' => ''])
Confirm
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
