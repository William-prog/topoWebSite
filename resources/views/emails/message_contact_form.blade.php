@component('mail::message')
# Introduction

The body of your message.<br>
This is the passed variable{{ $data ?? '' }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
