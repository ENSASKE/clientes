Hola <i>{{ $informacion->receiver }}</i>,
<p>Este es un ejemplo de Email HTML.</p>
  
<div>
<p><b>Contenido:</b>&nbsp;{{ $informacion->informacion_contenido }}</p>
</div>
 
<p><u>Variables:</u></p>
 
<div>
<p><b>Variable 1:</b>&nbsp;{{ $variable1 }}</p>
<p><b>Variable 2:</b>&nbsp;{{ $variable2 }}</p>
</div>
 
Gracias,
<br/>
<i>{{ $informacion->sender }}</i>