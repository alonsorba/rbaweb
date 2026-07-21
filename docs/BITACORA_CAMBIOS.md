# Bitacora de cambios

# 2026-07-21 - VIS-003 - Correccion visual de Soluciones y ¿Por qué nosotros?

### Cambios
- Se amplió la sección Soluciones para que se muestre como un carrusel horizontal de una sola fila con tarjetas más anchas, títulos legibles, imágenes más grandes y tabs más claros.
- Se reforzó el bloque ¿Por qué nosotros? con tarjetas verticales más altas, retratos de mayor presencia, fondos azules mejor proporcionales y textos inferiores más visibles.
- Se ajustaron variables, contenedores, track del carrusel, tamaños de tarjeta y navegación para conservar la experiencia drag/tab/accessibility sin reconstruir la lógica.
- Se mantuvo WEB-014 pausado y no se tocaron Aseguradoras aliadas, Testimonios, CTA final, Contacto, Footer ni páginas internas.

### Archivos
- `index.php`
- `assets/css/variables.css`
- `assets/css/cards.css`
- `assets/css/carousel.css`
- `assets/css/sections.css`
- `assets/css/responsive.css`
- `assets/js/main.js`
- `docs/PLAN_TRABAJO.md`
- `docs/BITACORA_CAMBIOS.md`
- `docs/DECISIONES.md`
- `docs/QA_VISUAL.md`
- `docs/DOCUMENTACION_TECNICA.md`
- `README.md`

### Pruebas
- Sintaxis PHP validada en `index.php`.
- Revision de JS validada con `node --check` pendiente de repetir tras el cambio de `main.js`.
- Revision de CSS y diff pendiente de validacion final.
- Validacion visual pendiente de captura local tras el ajuste de carrusel y tarjetas.

### Git
- Rama: `feature/base-project`
- Commit: `534968d`
- Push: pendiente

# 2026-07-21 - VIS-002 - Correccion visual de ESR y Nuestro compromiso

### Cambios
- Se amplió la seccion ESR para corregir la altura excesiva, la jerarquia tipografica y la escala insuficiente del trofeo, la banda de pilares y el sello secundario.
- Se ajustó la seccion Nuestro compromiso para abrir la composicion horizontal, agrandar la imagen principal y dar mas presencia al texto institucional.
- Se corrigieron las proporciones con variables CSS, grid real, espaciado y tamanos de imagen sin usar `zoom` ni `transform: scale()`.
- Se mantuvo WEB-014 pausado y no se tocaron Soluciones, ¿Por qué nosotros?, Aseguradoras, Testimonios, CTA final, Contacto ni Footer.

### Archivos
- `assets/css/variables.css`
- `assets/css/cards.css`
- `assets/css/sections.css`
- `assets/css/responsive.css`
- `docs/PLAN_TRABAJO.md`
- `docs/BITACORA_CAMBIOS.md`
- `docs/DECISIONES.md`
- `docs/QA_VISUAL.md`
- `docs/DOCUMENTACION_TECNICA.md`
- `README.md`

### Pruebas
- Sintaxis PHP validada en `index.php`, `includes/components/esr.php` y `includes/components/commitment.php`.
- Revision de CSS y diff validada con `git diff --check`.
- Validacion visual local intentada en servidor embebido, con acceso HTTP limitado por la sesion del entorno.

### Git
- Rama: `feature/base-project`
- Commit: `c9db9ff`
- Push: pendiente

# 2026-07-21 - VIS-001 - Correccion visual de Hero, metricas y presencia nacional

### Cambios
- Se amplio el Hero a ancho completo, se reforzo la tarjeta principal y se ajusto el navbar para integrarse sobre la imagen con logo blanco inicial y cambio de logo al hacer scroll.
- Se escalaron las metricas con una tarjeta blanca amplia y tipografia mas grande, manteniendo los valores existentes de `+150`, `+35` y `+80`.
- Se rearmo la seccion de presencia nacional para que el mapa de Mexico domine la composicion, con el indicador de Ciudad Obregon, Sonora y el contador `+25` con mayor jerarquia visual.
- Se corrigieron proporciones, contenedores y comportamiento responsive para desktop, laptop y mobile sin usar `zoom` ni `transform: scale()`.
- Se dejo WEB-014 pausado por priorizacion de fidelidad visual del Home.

### Archivos
- `index.php`
- `includes/components/navbar.php`
- `includes/components/presence.php`
- `assets/css/variables.css`
- `assets/css/navbar.css`
- `assets/css/hero.css`
- `assets/css/sections.css`
- `assets/css/responsive.css`
- `docs/PLAN_TRABAJO.md`
- `docs/BITACORA_CAMBIOS.md`
- `docs/QA_VISUAL.md`
- `docs/DECISIONES.md`
- `README.md`

### Pruebas
- Sintaxis PHP validada en `index.php`, `includes/components/navbar.php` y `includes/components/presence.php`.
- Revision de JS validada con `node --check`.
- Revision de formato validada con `git diff --check`.
- Carga local confirmada con respuesta HTTP 200 en `index.php`.
- Capturas headless generadas para `1440x900`, `1366x768`, `1024x768`, `768x1024`, `430x900`, `390x844`, `360x800`, ademas de vistas individuales de Hero, metricas, presencia nacional y del tramo completo hasta presencia.

### Git
- Rama: `feature/base-project`
- Commit: `70611a7`
- Push: pendiente
# 2026-07-21 - WEB-014 - Implementacion de la pagina institucional QuiÃ©nes somos

### Cambios
- Se creo `quienes.php` como pagina institucional real sin tocar el Home ni avanzar a Servicios o Ubicaciones.
- Se reutilizo el navbar en modo interno con estado solido desde el inicio y enlace activo a la pagina actual.
- Se implementaron un hero interior, una introduccion institucional, cuatro diferenciadores y un CTA final reutilizando el sistema `rb-`.
- Se selecciono `assets/img/EDIFICIO-RBA-DIA.png` para el hero interior por su composicion diurna, lectura clara y espacio util para la jerarquia editorial.
- Se actualizo el footer institucional para incluir el enlace a `quienes.php` y se mantuvo `aviso-privacidad.php` funcional.

### Archivos
- `quienes.php`
- `includes/components/internal-hero.php`
- `includes/components/institutional-intro.php`
- `includes/components/institutional-differentiators.php`
- `includes/components/internal-cta.php`
- `includes/components/navbar.php`
- `includes/head.php`
- `assets/css/internal-pages.css`
- `assets/css/main.css`
- `assets/css/navbar.css`
- `assets/css/responsive.css`
- `assets/js/main.js`
- `index.php`
- `aviso-privacidad.php`
- `includes/components/footer.php`
- `docs/PLAN_TRABAJO.md`
- `docs/DOCUMENTACION_TECNICA.md`
- `docs/DECISIONES.md`
- `docs/QA_VISUAL.md`
- `docs/INVENTARIO_CONTENIDO.md`
- `docs/PREPARACION_CMS.md`
- `README.md`

### Pruebas
- Sintaxis PHP validada en `quienes.php`, `index.php`, `includes/components/internal-hero.php`, `includes/components/institutional-intro.php`, `includes/components/institutional-differentiators.php`, `includes/components/internal-cta.php`, `includes/components/navbar.php`, `includes/components/footer.php`, `includes/head.php` y `aviso-privacidad.php`.
- Revision de JS validada con `node --check`.
- Carga local confirmada con respuesta HTTP 200 en `quienes.php`, `index.php` y `aviso-privacidad.php`.
- Revision de diff sin conflictos de formato con `git diff --check`.
- Capturas headless generadas para desktop, laptop y mobile, ademas de Home y Aviso de Privacidad.

### Git
- Rama: `feature/base-project`
- Commit: `e31028e`
- Push: pendiente

# 2026-07-21 - WEB-013 - Implementacion del footer institucional

### Cambios
- Se agrego un footer institucional reutilizable con marca, navegacion interna, enlace legal y copyright dinamico.
- Se reutilizo el logo blanco horizontal aprobado para una lectura consistente sobre fondo azul corporativo.
- Se preparo la composicion para reutilizacion en paginas internas sin inventar datos de contacto ni redes sociales no confirmadas.
- Se mantuvo `aviso-privacidad.php` como pagina provisional y se conecto al mismo footer institucional para asegurar continuidad visual.

### Archivos
- `includes/components/footer.php`
- `includes/footer.php`
- `index.php`
- `aviso-privacidad.php`
- `assets/css/footer.css`
- `assets/css/responsive.css`
- `docs/PLAN_TRABAJO.md`
- `docs/DOCUMENTACION_TECNICA.md`
- `docs/BITACORA_CAMBIOS.md`
- `docs/DECISIONES.md`
- `docs/QA_VISUAL.md`
- `docs/INVENTARIO_CONTENIDO.md`
- `docs/PREPARACION_CMS.md`
- `README.md`

### Pruebas
- Sintaxis PHP validada en `includes/components/footer.php`, `index.php` y `aviso-privacidad.php`.
- Revision de JS validada con `node --check`.
- Carga local confirmada con respuesta HTTP 200 en `index.php` y `aviso-privacidad.php`.
- Revision de diff sin conflictos de formato con `git diff --check`.
- Capturas visuales generadas para escritorio, mobile y `aviso-privacidad.php`.

### Git
- Rama: `feature/base-project`
- Commit: `1610330`
- Push: pendiente

# 2026-07-21 - WEB-012 - Implementacion de la seccion Contacto

### Cambios
- Se agrego la seccion Contacto despues del CTA final, sin modificar navbar, hero, soluciones, testimonios ni footer.
- Se implemento un formulario accesible con nombre, correo, telefono, tipo de cliente, solucion de interes, mensaje y aceptacion de privacidad.
- Se preparo la logica cliente para validar campos, mostrar errores por control y bloquear el envio real hasta que exista backend.
- Se creo una ruta provisional de privacidad en `aviso-privacidad.php` para que el enlace legal sea funcional sin inventar contenido legal definitivo.
- Se confirmo que no existian correo, telefono o direccion corporativos respaldados en el repositorio, por lo que no se renderizo una columna lateral inventada.

### Archivos
- `index.php`
- `includes/components/contact.php`
- `aviso-privacidad.php`
- `assets/css/forms.css`
- `assets/css/sections.css`
- `assets/css/responsive.css`
- `assets/js/main.js`
- `docs/PLAN_TRABAJO.md`
- `docs/DOCUMENTACION_TECNICA.md`
- `docs/DECISIONES.md`
- `docs/QA_VISUAL.md`
- `docs/INVENTARIO_CONTENIDO.md`
- `docs/PREPARACION_CMS.md`
- `README.md`

### Pruebas
- Sintaxis PHP validada en `index.php`, `includes/components/contact.php` y `aviso-privacidad.php`.
- Revision de JS validada con `node --check`.
- Carga local confirmada con respuesta HTTP 200 en `http://127.0.0.1:8080/rba_web/index.php`.
- Revision de diff sin conflictos de formato con `git diff --check`.
- Capturas headless persistidas para 1366x768, 1024x768, 430x900, una vista completa de escritorio y dos vistas completas de mobile.
- Captura anclada a `#contacto` en mobile se registro en blanco y se descarto como evidencia util.

### Git
- Rama: `feature/base-project`
- Commit: `pendiente`
- Push: pendiente

# 2026-07-21 - WEB-011 - Implementacion del bloque CTA final

### Cambios
- Se agrego el bloque CTA final despues de Testimonios, sin avanzar a contacto ni footer.
- Se definio una composicion editorial con gradiente corporativo, titulo, descripcion y dos acciones reales desde datos PHP.
- Se preparo el bloque para CMS con variables de seccion, copy y enlaces permitidos a `#contacto` y `#soluciones`.
- Se evito forzar una imagen provisional porque ningun recurso local evaluado encajo de forma consistente con el cierre visual requerido.

### Archivos
- `index.php`
- `includes/components/final-cta.php`
- `assets/css/sections.css`
- `assets/css/responsive.css`
- `docs/PLAN_TRABAJO.md`
- `docs/DOCUMENTACION_TECNICA.md`
- `docs/DECISIONES.md`
- `docs/QA_VISUAL.md`
- `README.md`

### Pruebas
- Sintaxis PHP validada en `index.php` e `includes/components/final-cta.php`.
- Revision de JS validada con `node --check`.
- Carga local confirmada con respuesta HTTP 200 en `http://127.0.0.1:8080/rba_web/index.php`.
- Revision de diff sin conflictos de formato con `git diff --check`.
- Revision visual pendiente de captura final en esta sesion.

### Git
- Rama: `feature/base-project`
- Commit: `pendiente`
- Push: pendiente

# 2026-07-21 - WEB-010 - Implementacion de la seccion Testimonios

### Cambios
- Se agrego la seccion Testimonios despues de Aseguradoras aliadas, sin avanzar al selector final de soluciones, formulario ni footer.
- Se definieron tres tarjetas visibles en desktop con avatares internos provisionales, nombre, cargo, empresa, calificacion y testimonio.
- Se marcaron los datos como provisionales en PHP para que Comunicacion valide textos, cargos y posibles avatares definitivos.
- Se reutilizo `persona.png` como imagen interna de reemplazo para cuando no exista un avatar aprobado, manteniendo una salida segura y sin recursos externos.

### Archivos
- `index.php`
- `includes/components/testimonials.php`
- `assets/css/variables.css`
- `assets/css/cards.css`
- `assets/css/sections.css`
- `assets/css/responsive.css`
- `docs/PLAN_TRABAJO.md`
- `docs/DOCUMENTACION_TECNICA.md`
- `docs/DECISIONES.md`
- `docs/QA_VISUAL.md`
- `docs/INVENTARIO_CONTENIDO.md`
- `docs/PREPARACION_CMS.md`
- `README.md`

### Pruebas
- Sintaxis PHP validada en `index.php` e `includes/components/testimonials.php`.
- Revision de JS validada con `node --check`.
- Carga local confirmada con respuesta HTTP 200 en `http://127.0.0.1:8080/rba_web/index.php`.
- Revision de diff sin conflictos de formato con `git diff --check`.
- Revision visual de la seccion de testimonios pendiente de captura final en esta sesion.

### Git
- Rama: `feature/base-project`
- Commit: `pendiente`
- Push: pendiente

# 2026-07-20 - WEB-009 - Implementacion de la seccion Aseguradoras aliadas

### Cambios
- Se agrego la seccion Aseguradoras aliadas despues de Â¿Por quÃ© nosotros?, sin avanzar a testimonios ni formulario.
- Se construyo un fondo azul corporativo de ancho completo con contador +20, mensaje de asesorÃ­a y logotipos blancos decorativos.
- Se parametrizaron el contador, el mensaje y los logos desde PHP para facilitar ediciÃ³n futura desde CMS.
- Se seleccionaron los logos blancos locales AIG, AXA, Chubb, GNP, HDI, Mapfre, QuÃ¡litas y Zurich por su legibilidad y cercanÃ­a al mockup.
- Se documento que `a15afc7` y `63ede76` corresponden a WEB-008 y quedan como antecedente inmediato de este sprint.

### Archivos
- `index.php`
- `includes/components/partners.php`
- `assets/css/variables.css`
- `assets/css/sections.css`
- `assets/css/responsive.css`
- `docs/PLAN_TRABAJO.md`
- `docs/DOCUMENTACION_TECNICA.md`
- `docs/DECISIONES.md`
- `docs/QA_VISUAL.md`
- `docs/INVENTARIO_CONTENIDO.md`
- `docs/PREPARACION_CMS.md`
- `README.md`

### Pruebas
- Sintaxis PHP validada en `index.php` e `includes/components/partners.php`.
- Revision de JS validada con `node --check`.
- Carga local confirmada con respuesta HTTP 200 en `http://127.0.0.1:8080/rba_web/index.php`.
- Revision de diff sin conflictos de formato con `git diff --check`.
- Revision visual de la composicion confirmada con el preview compuesto de logos y con la CSS responsive.
- La captura headless no persistio en disco en esta sesion, por lo que se dejo trazabilidad del intento sin usarla como evidencia final.

### Git
- Rama: `feature/base-project`
- Commit: `pendiente`
- Push: pendiente

# 2026-07-20 - WEB-008 - Implementacion de la seccion Â¿Por quÃ© nosotros?

### Cambios
- Se agrego la seccion Â¿Por quÃ© nosotros? despues de Soluciones, sin avanzar a aseguradoras, testimonios ni formulario.
- Se definio un grid de cuatro beneficios con retratos recortados, fondo azul superior y etiqueta blanca inferior.
- Se parametrizaron los titulos por linea, las imagenes, el texto alternativo y la escala individual de cada tarjeta desde PHP.
- Se seleccionaron `nose.png`, `misa.png`, `jenny.png` e `itzel.png` como base visual provisional por su cercania al mockup y por su consistencia de recorte.
- Se documento la correccion de inventario de `WEB-007` con los recursos realmente usados en Soluciones y los hashes `a8ba017` y `8ce6203`.

### Archivos
- `index.php`
- `includes/components/why.php`
- `assets/css/variables.css`
- `assets/css/sections.css`
- `assets/css/responsive.css`
- `docs/PLAN_TRABAJO.md`
- `docs/DOCUMENTACION_TECNICA.md`
- `docs/DECISIONES.md`
- `docs/QA_VISUAL.md`
- `docs/INVENTARIO_CONTENIDO.md`
- `docs/PREPARACION_CMS.md`
- `README.md`

### Pruebas
- Sintaxis PHP validada en `index.php` e `includes/components/why.php`.
- Revision de JS validada con `node --check`.
- Carga local confirmada con respuesta HTTP 200 en `http://127.0.0.1:8080/rba_web/index.php`.
- Revision de diff sin conflictos de formato con `git diff --check`.
- Capturas headless generadas con Edge y revisadas en desktop y mobile.

### Git
- Rama: `feature/base-project`
- Commit: `a15afc7`
- Push: pendiente

# 2026-07-20 - WEB-007 - Implementacion de la seccion Soluciones

### Cambios
- Se agrego la seccion de Soluciones despues de Nuestro compromiso, sin tocar el resto del Home.
- Se construyo un sistema de tabs accesible para las categorias Empresas, Personas y Gestion Integral.
- Se implemento un carrusel horizontal con controles previos/siguientes y soporte de arrastre con mouse o touch.
- Se parametrizaron titulos, descripciones, CTA e imagenes por medio de variables PHP para facilitar CMS futuro.
- Se reutilizaron recursos locales existentes para cada tarjeta sin introducir librerias nuevas.

### Archivos
- `index.php`
- `includes/components/solutions.php`
- `assets/css/variables.css`
- `assets/css/sections.css`
- `assets/css/cards.css`
- `assets/css/carousel.css`
- `assets/css/responsive.css`
- `assets/js/main.js`
- `docs/PLAN_TRABAJO.md`
- `docs/DOCUMENTACION_TECNICA.md`
- `docs/DECISIONES.md`
- `docs/QA_VISUAL.md`
- `README.md`

### Pruebas
- Sintaxis PHP validada en `index.php` e `includes/components/solutions.php`.
- Revision de JS validada con `node --check`.
- Carga local confirmada con respuesta HTTP 200 en `http://127.0.0.1:8080/rba_web/index.php`.
- Revision de diff sin conflictos de formato con `git diff --check`.
- Captura visual generada con Edge headless y revisada en pantalla para confirmar la seccion Soluciones.

### Git
- Rama: `feature/base-project`
- Commit: `a8ba017`
- Push: pendiente

## 2026-07-20 - WEB-006 - Implementacion de la seccion Nuestro compromiso

### Cambios
- Se agrego la seccion de compromiso inmediatamente despues de ESR, sin avanzar a soluciones.
- Se parametrizo el texto en segmentos para conservar la jerarquia visual del mockup y facilitar edicion futura.
- Se selecciono `assets/img/compromiso.png` como recurso principal por su mejor coincidencia con la escena profesional solicitada.
- Se valido que el fondo azul ya viene integrado en la imagen, por lo que no se agrego un segundo fondo CSS.

### Archivos
- `index.php`
- `includes/components/commitment.php`
- `assets/css/variables.css`
- `assets/css/sections.css`
- `assets/css/responsive.css`
- `docs/PLAN_TRABAJO.md`
- `docs/DOCUMENTACION_TECNICA.md`
- `docs/DECISIONES.md`
- `docs/QA_VISUAL.md`
- `docs/INVENTARIO_CONTENIDO.md`
- `docs/PREPARACION_CMS.md`
- `README.md`

### Pruebas
- Sintaxis PHP validada en `index.php` e `includes/components/commitment.php`.
- Revision de JS validada con `node --check`.
- Carga local confirmada con respuesta HTTP 200 en `http://127.0.0.1:8080/rba_web/index.php`.
- Revision de diff sin conflictos de formato con `git diff --check`.

### Git
- Rama: `feature/base-project`
- Commit: `829932d`
- Push: completado

## 2026-07-20 - WEB-005 - Implementacion de la seccion Empresa Socialmente Responsable

### Cambios
- Se agrego la seccion ESR despues de presencia nacional, sin avanzar al bloque de compromiso.
- Se parametrizaron titulo, descripcion, pilares, distintivo secundario y trofeo principal en PHP.
- Se selecciono `assets/img/esr con sombra.png` como trofeo principal y `assets/img/esr.png` como distintivo secundario.
- Se incorporaron estilos especificos para la composicion horizontal, la tarjeta de pilares y el comportamiento responsive.

### Archivos
- `index.php`
- `includes/components/esr.php`
- `assets/css/variables.css`
- `assets/css/cards.css`
- `assets/css/sections.css`
- `assets/css/responsive.css`
- `docs/PLAN_TRABAJO.md`
- `docs/DOCUMENTACION_TECNICA.md`
- `docs/DECISIONES.md`
- `docs/QA_VISUAL.md`
- `docs/INVENTARIO_CONTENIDO.md`
- `docs/PREPARACION_CMS.md`
- `README.md`

### Pruebas
- Sintaxis PHP validada en `index.php` e `includes/components/esr.php`.
- Revision de JS validada con `node --check`.
- Carga local confirmada con respuesta HTTP 200 en `http://127.0.0.1:8080/rba_web/index.php`.
- Revision de diff sin conflictos de formato con `git diff --check`.

### Git
- Rama: `feature/base-project`
- Commit: `pendiente`
- Push: pendiente

## 2026-07-20 - WEB-002 - Creacion del Design System Base

### Cambios
- Se dividio la CSS base en archivos especializados.
- `main.css` quedo como importador central.
- Se crearon utilidades, botones, cards, navbar, hero, sections, carousel, forms, footer y animaciones.
- Se agregaron stubs PHP vacios en `includes/components/`.
- Se ajusto `includes/head.php` para cargar solo `main.css`.

### Archivos
- `assets/css/main.css`
- `assets/css/variables.css`
- `assets/css/reset.css`
- `assets/css/layout.css`
- `assets/css/utilities.css`
- `assets/css/buttons.css`
- `assets/css/cards.css`
- `assets/css/navbar.css`
- `assets/css/hero.css`
- `assets/css/sections.css`
- `assets/css/carousel.css`
- `assets/css/forms.css`
- `assets/css/footer.css`
- `assets/css/animations.css`
- `assets/css/responsive.css`
- `includes/head.php`
- `includes/components/navbar.php`
- `includes/components/hero.php`
- `includes/components/stats.php`
- `includes/components/presence.php`
- `includes/components/esr.php`
- `includes/components/commitment.php`
- `includes/components/solutions.php`
- `includes/components/why.php`
- `includes/components/partners.php`
- `includes/components/testimonials.php`
- `includes/components/contact.php`
- `includes/components/footer.php`

### Pruebas
- Sintaxis PHP pendiente de ejecucion final.
- Carga del sitio y responsive pendiente de ejecucion final.

### Riesgos
- No existe remoto configurado, por lo que el push sigue bloqueado.

### Git
- Rama: `feature/base-project`
- Commit: `d53bbac`
- Push: bloqueado por falta de remoto configurado

## 2026-07-20 - WEB-003 - Encabezado, hero y metricas del home

### Cambios
- Se reemplazo el bloque provisional del Home por una composicion real de navbar, hero y metricas.
- Se preparo el menu responsive con Bootstrap collapse y estado `rb-navbar--scrolled`.
- Se reutilizaron recursos locales existentes para logo e imagen principal.
- Se agregaron datos del Home en variables PHP para preparacion de CMS.

### Archivos
- `index.php`
- `includes/head.php`
- `includes/header.php`
- `includes/components/navbar.php`
- `includes/components/hero.php`
- `includes/components/stats.php`
- `assets/js/main.js`
- `assets/css/variables.css`
- `assets/css/buttons.css`
- `assets/css/cards.css`
- `assets/css/navbar.css`
- `assets/css/hero.css`
- `assets/css/sections.css`
- `assets/css/responsive.css`

### Pruebas
- Sintaxis PHP pendiente de ejecucion final.
- Verificacion visual y captura pendiente de ejecucion final.

### Git
- Rama: `feature/base-project`
- Commit: `2bc44a9`
- Push: pendiente

## 2026-07-20 - WEB-004 - Presencia nacional y mapa de Mexico

### Cambios
- Se agrego la seccion de presencia nacional despues de las metricas.
- Se implemento un mapa local de Mexico con transparencia como recurso principal.
- Se preparo una etiqueta de ubicacion para la matriz en Ciudad Obregon, Sonora.
- Se agrego un contador de estados y un conector punteado para la composicion visual.
- Se documentaron los recursos de mapa analizados y la decision tecnica tomada.

### Archivos
- `index.php`
- `includes/components/presence.php`
- `assets/css/variables.css`
- `assets/css/sections.css`
- `assets/css/responsive.css`
- `docs/INVENTARIO_CONTENIDO.md`
- `docs/PREPARACION_CMS.md`

### Pruebas
- Sintaxis PHP pendiente de ejecucion final.
- Verificacion responsive y visual pendiente de ejecucion final.

### Git
- Rama: `feature/base-project`
- Commit: `fb1f511`
- Push: pendiente
# 2026-07-21 - VIS-004 - Correccion visual de Aseguradoras aliadas y Testimonios

### Cambios
- Se amplió la sección Aseguradoras aliadas para convertirla en un bloque azul de ancho completo con contador dominante, mensaje más amplio y logos decorativos más presentes.
- Se reestructuró Testimonios como un contenedor azul oscuro redondeado con tres tarjetas visibles, título alineado al mockup y avatares ocultos visualmente.
- Se ajustaron variables, contenedores, tarjetas y responsive para mantener la experiencia data-driven, accesible y preparada para CMS sin reconstruir la lógica.
- Se mantuvo WEB-014 pausado y no se tocaron CTA final, Contacto, Footer ni páginas internas.

### Archivos
- `index.php`
- `includes/components/partners.php`
- `includes/components/testimonials.php`
- `assets/css/variables.css`
- `assets/css/cards.css`
- `assets/css/sections.css`
- `assets/css/responsive.css`
- `docs/PLAN_TRABAJO.md`
- `docs/BITACORA_CAMBIOS.md`
- `docs/DECISIONES.md`
- `docs/QA_VISUAL.md`
- `docs/DOCUMENTACION_TECNICA.md`
- `README.md`

### Pruebas
- Sintaxis PHP validada en `index.php`, `includes/components/partners.php` y `includes/components/testimonials.php`.
- Revision de JS validada con `node --check` sin errores.
- Revision de CSS y diff validada con `git diff --check`.
- Validacion visual local pendiente de captura en esta sesion por el alcance del entorno.

### Git
- Rama: `feature/base-project`
- Commit: pendiente
- Push: pendiente
