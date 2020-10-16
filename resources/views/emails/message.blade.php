@component('mail::message')
# Reporte enviado (esto es una prueba)

La alerta de reportes IPER ha sido enviada

@component('mail::button')
Ver reporte
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent