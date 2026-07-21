# Preparacion para CMS

## Principio general

Cada seccion futura debera documentar campos editables, limites, imagenes, orden, visibilidad y reglas de publicacion.

## Base actual

- Los stubs de componentes ya reservan variables PHP.
- La CSS se separo por responsabilidad para facilitar mapeo de bloques administrables.
- No se hardcodeo contenido nuevo en los componentes reutilizables.

## Nuevos campos editables

- WEB-003 usa variables para logo, links, CTA, hero y metricas.
- WEB-004 usa variables para titulo de seccion, recurso de mapa, etiqueta de ubicacion y contador.
- WEB-005 usa variables para aniversario, lineas del titulo, descripcion por partes, pilares, distintivo secundario y trofeo principal.
- WEB-006 usa variables para segmentos de texto, imagen principal y metadata visual del bloque de compromiso.
- WEB-007 usa variables para titulo de seccion, categorias, tarjetas, imagenes, descripciones, CTA y escala visual de cada recurso.
- WEB-008 usa variables para titulo, lineas de beneficio, imagenes, texto alternativo y escala individual por tarjeta.
- WEB-009 usa variables para contador, mensaje, logos, rutas, opacidad y posicion de cada aseguradora aliada.
- La validacion de existencia del recurso permite reemplazar el mapa sin cambiar la estructura del componente.
- La misma logica permite sustituir los recursos ESR sin modificar el marcado general.
- La misma logica se reutiliza en compromiso para cambiar la imagen sin tocar el markup.
- La misma logica se reutiliza en Soluciones y en ¿Por qué nosotros? para validar recursos antes de renderizar.
- La misma logica se reutiliza en Aseguradoras aliadas para omitir logos faltantes sin romper la composicion general.

## Regla de trabajo

- Antes de convertir cualquier bloque en pagina real, definir sus datos como variables PHP o estructura equivalente.
- No acoplar contenido visible a la logica de reutilizacion.
