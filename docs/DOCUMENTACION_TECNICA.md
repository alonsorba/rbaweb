# Documentacion tecnica

## Arquitectura base

La base del sitio se mantiene en PHP modular sin framework de servidor.

- `index.php` como punto de entrada existente.
- `includes/head.php` para metadatos, estilos y apertura del documento.
- `includes/header.php` para la cabecera actual.
- `includes/footer.php` para el pie actual.
- `includes/scripts.php` para el cierre del documento.
- `includes/components/` para stubs de componentes reutilizables.
- `assets/css/` para el Design System base.
- `assets/js/` para comportamiento vanilla.

## Home inicial

WEB-003 compone solamente el arranque visible del Home:

- Navbar superior con estado transparente sobre hero.
- Hero principal con imagen local, card oscura y acciones primarias.
- Bloque de metricas reutilizable con tres contadores.
- Datos preparados en variables PHP para posterior edicion desde CMS.

## Presencia nacional

WEB-004 agrega una seccion dedicada a cobertura nacional con el mapa local de Mexico, una etiqueta de ubicacion, una conexion visual punteada y un contador de estados.

- `includes/components/presence.php` valida la existencia del recurso antes de renderizarlo.
- El mapa usa un archivo local PNG con transparencia y dimensiones grandes para evitar pixelado.
- La composicion se resuelve con grid, variables CSS y un conector decorativo que se oculta en mobile si no aporta estabilidad visual.

## Empresa Socialmente Responsable

WEB-005 agrega la seccion ESR como bloque siguiente al mapa de presencia nacional.

- `includes/components/esr.php` recibe todos los datos por estructura PHP y no contiene contenido principal hardcodeado.
- El componente separa la linea de aniversario, el titulo de dos lineas, la descripcion, la tarjeta de pilares, el distintivo secundario y el trofeo principal.
- La tarjeta de pilares usa grid de tres columnas en desktop y se repliega en mobile sin romper la jerarquia visual.
- El trofeo principal se resolvio con un recurso local transparente y se renderiza con `object-fit: contain` para conservar pedestal y proporciones.
- Los iconos de pilares usan archivos locales con transparencia y se cargan desde rutas preparadas para el futuro CMS.

## Arquitectura CSS

`main.css` funciona como unico archivo de carga del sistema y ordena:

- `variables.css`
- `reset.css`
- `layout.css`
- `utilities.css`
- `buttons.css`
- `cards.css`
- `navbar.css`
- `hero.css`
- `sections.css`
- `carousel.css`
- `forms.css`
- `footer.css`
- `animations.css`
- `responsive.css`

## Tokens globales

Se definieron variables para:

- Colores oficiales.
- Gradientes corporativos.
- Espaciados.
- Breakpoints.
- Border radius.
- Sombras.
- Glassmorphism y blur.
- Transiciones y duraciones.
- Z-index.
- Tipografias y pesos.
- Tamaños de texto y alturas.
- Contenedores y medidas base.

## Sistema de clases

- Todas las clases nuevas usan prefijo `rb-`.
- Se mantuvieron alias tecnicos para compatibilidad con la base previa, sin introducir nuevas librerias.
- El componente de navegacion cambia a estado scroll mediante una clase controlada por JavaScript.

## Preparacion para CMS

- Cada stub PHP deja una variable reservada para futuros datos editables.
- La separacion de tokens, utilidades y componentes facilita convertir el front en bloques administrables.
- No se agrego contenido temporal ni lorem ipsum.
- El Home inicial usa variables para el logo, enlaces, hero, CTA y metricas.
- La presencia nacional usa variables para la seccion, el mapa, la etiqueta, el punto de ubicacion y el contador.
- La seccion ESR usa variables para aniversario, espaciados, tarjeta de pilares, distintivo secundario y maxima altura del trofeo.
