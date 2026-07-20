# Bitacora de cambios

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
