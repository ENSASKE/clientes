Hola {{ $informacion->receiver }},
Este es un ejemplo de Email con Texto Plano.
 
Contenido: {{ $informacion->informacion_contenido }}
 
Variables:
 
variable1: {{ $variable1 }}
variable2: {{ $variable2 }}
 
Gracias,
{{ $informacion->sender }}