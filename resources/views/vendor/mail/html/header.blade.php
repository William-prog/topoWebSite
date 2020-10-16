<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'TopoWebsite')
<!-- <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">-->
<img src="img/logo2.png" class="logo" alt="TOPO logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>