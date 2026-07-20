# Documentación técnica

## Arquitectura base

La primera entrega del sitio se organiza como una base PHP modular sin framework de servidor:

- `index.php` como punto de entrada visible.
- `includes/head.php` para metadatos, estilos y apertura del documento.
- `includes/header.php` para la navegación superior.
- `includes/footer.php` para el pie de página.
- `includes/scripts.php` para cargar JavaScript al final del documento.
- `assets/css/` para variables, estilos base, componentes y responsive.
- `assets/js/` para comportamiento vanilla.

## Criterios de implementación

- HTML5 semántico.
- Bootstrap 5.3.3 como base de grid y utilidades.
- CSS propio para identidad visual, radios, sombras y ajustes responsive.
- JavaScript mínimo, sin dependencias adicionales.
- Estructura preparada para crecimiento por secciones y reutilización de componentes.

## Estrategia de tipografía

- Montserrat se prepara como tipografía de interfaz.
- Mientras no existan archivos licenciados oficiales en el repositorio, la carga se resuelve como recurso externo temporal.
- La carpeta `assets/fonts/` queda preparada para la etapa en que se incorporen fuentes con licencia y autorización interna.

## Estrategia de activos

- El repositorio ya contiene imágenes oficiales y recursos previos en `assets/img/`.
- No se han eliminado ni renombrado recursos existentes.
- Las carpetas nuevas bajo `assets/img/brand`, `home`, `icons` y `temporary` se crean para ordenar la futura evolución del sitio.

## Preparación para CMS

- Las secciones futuras deberán desacoplar contenido, orden, visibilidad e imágenes.
- Los bloques repetitivos deberán prepararse para iteración desde datos estructurados.
- La documentación funcional de cada módulo se registrará en `docs/PREPARACION_CMS.md`.

