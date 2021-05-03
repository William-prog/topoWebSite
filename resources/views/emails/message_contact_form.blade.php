@component('mail::message')
# Notificación de empleo <span>&#128119;</span>

El aspirante {{ $senderName }} 
se ha postulado para la vacante de {{ $jobTitle }}

# Información de contácto:

Correo: {{ $senderEmail }}
<br>
Número: {{ $senderNumber }}

@component('mail::button', ['url' => $cvPath])
Descargar CV
@endcomponent

Este es un correo automatizado, dpto. de software y TI<br>
Servicios y Equipos TOPO S.A. de C.V.
@endcomponent
