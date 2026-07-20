# Bitácora de cambios

## 2026-07-20 - WEB-001 - Crear estructura inicial del sitio

### Cambios
- Se creó la base modular en PHP con `head`, `header`, `footer` y `scripts`.
- Se agregó `index.php` con un layout mínimo visible para comprobar carga de PHP, CSS, Bootstrap y JS.
- Se añadieron las hojas de estilo base y el archivo de JavaScript inicial.
- Se creó la estructura documental solicitada para planeación, decisiones, QA e inventario.
- Se prepararon carpetas vacías con `.gitkeep` para la futura organización de assets.

### Archivos
- `.gitignore`
- `index.php`
- `includes/head.php`
- `includes/header.php`
- `includes/footer.php`
- `includes/scripts.php`
- `assets/css/variables.css`
- `assets/css/main.css`
- `assets/css/components.css`
- `assets/css/responsive.css`
- `assets/js/main.js`
- `docs/PLAN_TRABAJO.md`
- `docs/DOCUMENTACION_TECNICA.md`
- `docs/BITACORA_CAMBIOS.md`
- `docs/DECISIONES.md`
- `docs/QA_VISUAL.md`
- `docs/INVENTARIO_CONTENIDO.md`
- `docs/PREPARACION_CMS.md`

### Pruebas
- Pendiente de validación final en servidor PHP local.

### Pendientes o riesgos
- Falta remoto Git configurado, por lo que el push no puede completarse todavía.
- Montserrat queda como carga temporal externa hasta recibir los archivos oficiales con licencia.

### Git
- Rama: `feature/base-project`
- Commit: pendiente

## 2026-07-20 - WEB-001 - Ajuste visual de cabecera

### Cambios
- Se cambió la variante de logotipo usada en la cabecera por una versión horizontal más adecuada para el espacio superior disponible.
- Se ajustó la escala responsiva de la marca para evitar que la cabecera se volviera excesivamente alta en móvil.
- Se repitió la captura visual en viewport móvil para validar el ajuste.

### Archivos
- `includes/header.php`
- `assets/css/components.css`
- `assets/css/responsive.css`

### Pruebas
- `php -l includes/header.php`
- Captura HTML en `430 x 900` con Chrome headless.

### Pendientes o riesgos
- El push sigue bloqueado porque no hay remoto configurado.

### Git
- Rama: `feature/base-project`
- Commit: pendiente de registrar el hash del ajuste visual
