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

## Preparacion para CMS

- Cada stub PHP deja una variable reservada para futuros datos editables.
- La separacion de tokens, utilidades y componentes facilita convertir el front en bloques administrables.
- No se agrego contenido temporal ni lorem ipsum.

