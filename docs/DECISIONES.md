# Decisiones tecnicas

## Base inicial

- Se conservo `index.php` sin cambios para no alterar el Home.
- Se mantuvo Bootstrap 5.3.3 como dependencia ya aprobada.
- Montserrat sigue cargando desde Google Fonts hasta contar con archivos licenciados locales.

## Design System

- Se dividio el sistema en archivos de responsabilidad unica para evitar una CSS monolitica.
- `main.css` quedo como unico importador para simplificar el mantenimiento.
- Las clases nuevas se prefijan con `rb-` para minimizar colisiones con Bootstrap y con codigo futuro.

## Componentes PHP

- Los stubs de `includes/components/` no imprimen contenido.
- Cada archivo reserva una variable PHP para que el futuro CMS pueda inyectar datos sin reescribir la estructura.

## Compatibilidad

- Se conservan alias tecnicos necesarios para la base previa mientras el sistema evoluciona hacia los nuevos componentes.
