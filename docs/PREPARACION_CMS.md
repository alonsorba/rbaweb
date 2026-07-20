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
- La validacion de existencia del recurso permite reemplazar el mapa sin cambiar la estructura del componente.
- La misma logica permite sustituir los recursos ESR sin modificar el marcado general.

## Regla de trabajo

- Antes de convertir cualquier bloque en pagina real, definir sus datos como variables PHP o estructura equivalente.
- No acoplar contenido visible a la logica de reutilizacion.
