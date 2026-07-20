# QA visual

## Estado

Validacion inicial de la base del Design System.

## Alcance verificado

- El sitio sigue cargando desde PHP local.
- La hoja principal importa el sistema CSS completo.
- El Home inicial ya compone navbar, hero y metricas reutilizables.
- No se agregaron librerias nuevas.

## WEB-003

- Navbar superior con menu colapsable en mobile.
- Hero principal con imagen local, card oscura y CTA.
- Bloque de metricas con tres columnas sin separadores.

## WEB-004

- Seccion de presencia nacional con mapa local de Mexico.
- Etiqueta de ubicacion en azul corporativo con texto blanco.
- Contador +25 alineado con la composicion general.
- Conector punteado visible en desktop y oculto en mobile para mantener estabilidad.

## WEB-005

- Seccion ESR integrada despues de presencia nacional y antes del bloque de compromiso.
- Composicion horizontal en desktop con tarjeta de pilares, distintivo secundario y trofeo a la derecha.
- Apilado vertical en mobile con jerarquia conservada y sin overflow horizontal observado en la revision del CSS y el DOM.
- Sintaxis PHP, JS y diff validadas correctamente.

## WEB-006

- Seccion de compromiso integrada despues de ESR y antes de soluciones.
- Texto segmentado con palabras destacadas en azul oscuro y composicion de dos columnas en desktop.
- Imagen principal visible sin segundo fondo azul, usando el recurso local completo `compromiso.png`.
- Validacion tecnica correcta, con HTTP 200 y sin errores de sintaxis detectados.

## Criterios revisados

- Sin desbordamiento horizontal en la base existente.
- Estructura responsive preparada para desktop, laptop, tablet y mobile.
- Clases reutilizables disponibles para posteriores secciones.
- Preparado para contraste y navegacion por teclado en los controles principales.
- Sin desbordamiento horizontal observado en la composicion de presencia.
- Sin desbordamiento horizontal observado en la seccion ESR.
- Sin desbordamiento horizontal observado en la seccion de compromiso.
- El sitio responde con HTTP 200 desde el servidor local.
## Pendiente

- Comparacion visual de nuevas paginas o secciones cuando exista contenido real del Home o de paginas internas.
