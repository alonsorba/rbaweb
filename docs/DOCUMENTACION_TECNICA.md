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

## Nuestro compromiso

WEB-006 agrega la seccion de compromiso inmediatamente despues de ESR.

- `includes/components/commitment.php` recibe el texto por segmentos para sostener la jerarquia visual sin convertir el parrafo en una imagen.
- La imagen principal usa `assets/img/compromiso.png`, un recurso local con escena profesional ya integrada y fondo azul incluido.
- El componente valida el archivo, toma dimensiones reales cuando estan disponibles y usa `loading="lazy"` junto con `decoding="async"`.
- La composicion se resuelve con grid de dos columnas en desktop y se apila en mobile sin generar overflow horizontal.
- No se agrego un fondo azul adicional porque el recurso ya contiene la coloracion requerida por el mockup.

## Soluciones

WEB-007 agrega la seccion de Soluciones despues de Nuestro compromiso.

- `includes/components/solutions.php` construye la estructura con datos PHP para categorias, cards, imagenes y CTA.
- El componente usa `role="tablist"`, `role="tab"` y `role="tabpanel"` para sostener navegacion accesible por teclado.
- El carrusel horizontal se implementa con scroll-snap, botones previos/siguientes y soporte de arrastre con mouse o touch.
- Los recursos de cada tarjeta se resuelven desde archivos locales existentes y se preparan para edicion futura desde CMS.
- La logica JavaScript sincroniza estado activo, scroll de la pista y habilitacion de controles sin depender de librerias extra.

## ¿Por qué nosotros?

WEB-008 agrega la seccion ¿Por qué nosotros? despues de Soluciones.

- `includes/components/why.php` genera un grid semantico de cuatro beneficios con retrato, fondo azul y etiqueta inferior blanca.
- El componente valida la existencia de cada recurso antes de renderizar y omite elementos incompletos para evitar imagenes rotas.
- Las tarjetas reciben una escala individual controlada por datos PHP para compensar diferencias de recorte sin estilos dispersos.
- La composicion se mantiene sin carrusel ni JavaScript adicional, con un grid que desciende a dos columnas y luego a una columna en mobile.
- El bloque queda listo para CMS porque el texto, el orden y el recurso visual dependen de estructura de datos y no del marcado fijo.

## Aseguradoras aliadas

WEB-009 agrega la seccion Aseguradoras aliadas despues de ¿Por qué nosotros?.

- `includes/components/partners.php` construye el contador, el mensaje y los logos con datos PHP.
- El componente valida que cada logo exista en la carpeta local, resuelve sus dimensiones reales y omite los archivos que no esten disponibles.
- La composicion se resuelve con fondo azul corporativo, capa decorativa absoluta en escritorio y grilla simple en mobile.
- Los logos visibles se toman de variantes blancas locales para evitar filtros agresivos y mantener coherencia con la marca.
- El bloque sigue siendo editable desde CMS porque el orden, la opacidad y la ruta de cada logo viven en una estructura de datos.
- La vista mobile reorganiza los logotipos en una grilla de dos columnas para conservar legibilidad sin slider.
- Los datos de la seccion viven en variables PHP en `index.php`, lo que facilita la edicion futura desde CMS.

## Testimonios

WEB-010 agrega la seccion Testimonios despues de Aseguradoras aliadas.

- `includes/components/testimonials.php` construye tres tarjetas desde datos PHP y valida rating, avatares y textos antes de renderizar.
- El componente usa `persona.png` como avatar interno provisional cuando no existe un retrato aprobado para evitar imagenes rotas o dependencias externas.
- Los textos, nombres, cargos y empresas quedan marcados como provisionales en los datos para que Comunicacion los valide antes de publicacion.
- La composicion se resuelve con grid de tres columnas en desktop, dos en laptop y una en mobile, sin autoplay ni carrusel.
- El rating se dibuja con estrellas configurables y el bloque queda listo para CMS porque el contenido no vive embebido en el marcado.

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
- La seccion de compromiso usa variables para separacion, ancho maximo, altura minima del visual y escala maxima de la imagen.
- La seccion de Soluciones usa variables para espaciado del shell, tabs, pista del carrusel, ancho de card, alto minimo, media y padding lateral.
- La seccion ¿Por qué nosotros? usa variables para separacion del grid, altura minima de card, altura minima del visual, solape de la etiqueta y padding de imagen.
- La seccion Aseguradoras aliadas usa variables para el padding del shell, el gap interno, la altura minima del bloque, el ancho maximo de texto y escalas base de logotipos.
- La seccion Aseguradoras aliadas usa variables para opacidad base, tamanos de logo por contexto y ajustes responsive por breakpoint.
- La seccion Testimonios usa variables para el gap del grid, el padding de cada card, la altura minima, el tamano del avatar y el color de las estrellas.
