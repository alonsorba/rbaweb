# Documentacion del Proyecto RBA Web

## 1) Resumen rapido
- Stack: PHP (plantillas simples), Bootstrap 5, CSS custom, JS vanilla.
- Tipo de proyecto: sitio corporativo multipagina.
- Objetivo: mostrar servicios, informacion institucional, soporte al cliente y ubicaciones.

## 2) Estructura del repo
- `index.php`: Home principal (hero, servicios, ventajas, testimonios, contacto).
- `servicios.php`: Portafolio de coberturas y proceso de atencion.
- `servicio-cliente.php`: Reclamaciones y guias por tipo de siniestro (acordeones largos).
- `quienes.php`: Historia, mision/vision/valores y mensaje directivo.
- `ubicacion.php`: Oficinas y mapas embebidos.
- `aviso-privacidad.php`: aviso legal y tratamiento de datos.
- `assets/css/style.css`: estilos globales y animaciones.
- `assets/js/main.js`: comportamiento global (scroll, reveal, fallback de componentes).
- `.php-preview-router.php`: router local para preview en entorno de desarrollo.
- `assets/img/*`: imagenes, logos y video.

## 3) Arquitectura (como esta organizado)
- No hay framework MVC: cada pagina es una vista PHP completa.
- Se reutiliza una estructura comun:
  - Bloque de variables PHP al inicio (`$siteTitle`, `$phone`, etc.).
  - `<head>` con Bootstrap, icons, Google Fonts y `assets/css/style.css`.
  - Header/nav, contenido en `<main>`, footer.
  - Scripts al final: Bootstrap + `assets/js/main.js`.
- `style.css` y `main.js` actuan como capa global compartida por todas las vistas.

## 4) Flujo visual y UX global
- Header sticky con comportamiento dinamico al hacer scroll.
- Secciones con clases reutilizables:
  - `tile`: card base del sitio.
  - `glass-card`: card destacada (look premium).
  - `ratio`: wrappers de imagen/video con proporcion fija.
- Animaciones reveal on scroll para cards e imagenes (se activan al entrar al viewport).

## 5) Detalle por archivo (que hace cada uno)

### `index.php`
- Home principal.
- Secciones clave:
  - `hero-carousel` (video de fondo).
  - `#servicios` (cards de oferta).
  - `#hero` (mensaje principal + formulario rapido).
  - `#ventajas` (valor diferencial + imagen).
  - `#testimonios` (social proof).
  - `#cta` y `#contacto` (conversion).
- Incluye formulario a `procesar-contacto.php`.

### `servicios.php`
- Landing de servicios.
- Secciones:
  - Hero de pagina (`page-hero`).
  - `#portafolio`: cards por tipo de cobertura.
  - `#proceso`: pasos de atencion.
  - `#cta`: cierre comercial.

### `servicio-cliente.php`
- Centro de ayuda operacional.
- Secciones:
  - Hero de soporte.
  - `#reclamaciones`: acordeones por ramo.
  - `#siniestros`: guias accionables por escenario.
- Nota tecnica: alto volumen de acordeones, no romper `id`/`aria-controls`/`data-bs-target`.

### `quienes.php`
- Pagina institucional.
- Secciones:
  - Hero institucional.
  - Mision/vision.
  - Values banner.
  - Mensaje/director (card destacada).

### `ubicacion.php`
- Pagina de sedes.
- Secciones por ciudad (`#cd-obregon`, `#hermosillo`).
- Usa `location-card` + mapas embebidos en contenedores `ratio`.

### `aviso-privacidad.php`
- Contenido legal en formato legible.
- Usa `privacy-card` para mantener consistencia visual.

### `.php-preview-router.php`
- Router para preview local.
- Funciones:
  - CORS y manejo `OPTIONS`.
  - Bloquea traversal basico (`..`).
  - En `POST` responde JSON con payload (mock de pruebas).
  - Sirve archivos estaticos con content-type correcto.
  - Ejecuta `.php` con manejo de errores en entorno preview.

## 6) CSS (`assets/css/style.css`) explicado
- `:root`: tokens de color y variables base.
- Bloques importantes:
  - Navbar/header (`#topNav`, variantes home vs internas).
  - Hero/video (`.hero-carousel`, overlay y scroll-progress).
  - Componentes (`.tile`, `.glass-card`, `.check-circle`, etc.).
  - Footer (`.footer-*`).
  - Paginas internas (`.page-hero`, `.qs-hero`, `.location-card`).
  - Animacion global: `main .reveal-on-scroll`.
- Regla de motion accesible:
  - `@media (prefers-reduced-motion: reduce)` desactiva transiciones.

## 7) JS (`assets/js/main.js`) explicado
- Bloque 1: en recarga, fuerza scroll al top para evitar restauracion rara del navegador.
- Bloque 2 (`DOMContentLoaded`):
  - Scroll handler con `requestAnimationFrame` (mejor performance).
  - Efecto de header al scroll (opacidad + translateY).
  - Efecto de video en home via CSS variable `--video-scroll-progress`.
  - Smooth scroll para anchors del menu.
  - Fallback para carousel y collapse si Bootstrap JS no esta disponible.
  - `IntersectionObserver` para reveal animado en cards e imagenes.

## 8) Convenciones del proyecto (practicas recomendadas)
- Mantener clases reutilizables en vez de estilos inline.
- No duplicar logica JS por pagina: extender `main.js`.
- Si agregas cards nuevas, usa `tile` o `glass-card` para heredar UI + animacion.
- Si agregas secciones nuevas con anclas, valida `id` unicos.
- Evitar cambiar nombres de clases base sin revisar todo el sitio.

## 9) Checklist rapido antes de publicar cambios
- Validar que no haya caracteres corruptos (encoding UTF-8).
- Revisar responsive en mobile y desktop.
- Probar:
  - menu y anchors,
  - acordeones en `servicio-cliente.php`,
  - formularios/contacto,
  - animaciones reveal.
- Confirmar que logos de header/footer no reciban animaciones no deseadas.

## 10) Mini glosario (tecnico + casual)
- `tile`: la card base reutilizable del sitio.
- `glass-card`: card premium con look mas elegante.
- `reveal`: efecto de entrada al hacer scroll.
- `fallback`: plan B cuando una libreria no carga.
- `sticky header`: barra superior que se queda pegada al top.

