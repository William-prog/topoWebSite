@component('mail::message')
# Introduction

Working on the job post module for the website.<br>
El aspirante {{ $senderName }} 
se ha postulado para la vacante de {{$jobTitle}}
Contácto:
Correo: {{ $senderEmail }}
Número: {{ $senderNumber }}

Thanks, software and IT department<br>
{{ config('app.name') }}
@endcomponent
