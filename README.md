# R. Baidón - Sitio institucional

## Objetivo

Renovación completa del sitio institucional de R. Baidón con una base front-end modular en PHP, HTML5 semántico, Bootstrap 5.3.3, CSS3 y JavaScript vanilla.

## Tecnologías

- PHP
- HTML5 semántico
- Bootstrap 5.3.3
- CSS3
- JavaScript vanilla

## Requisitos locales

- PHP instalado localmente.
- Servidor integrado de PHP o Apache/Nginx local.
- Navegador moderno.

## Cómo ejecutar el proyecto

Con el servidor integrado de PHP:

```bash
php -S localhost:8000 -t .
```

Luego abrir:

```text
http://localhost:8000
```

## Estructura de carpetas

- `index.php`: punto de entrada del sitio.
- `includes/`: parciales reutilizables del layout.
- `includes/components/`: componentes PHP para secciones futuras.
- `assets/css/`: variables, estilos base, componentes y responsive.
- `assets/js/`: comportamiento JavaScript.
- `assets/img/brand/`: recursos de marca.
- `assets/img/home/`: recursos para el home.
- `assets/img/icons/`: iconografía del sitio.
- `assets/img/temporary/`: recursos provisionales.
- `assets/fonts/`: tipografías locales con licencia.
- `pages/`: páginas internas futuras.
- `docs/`: documentación técnica y de seguimiento.

## Convención de ramas y commits

- Rama base: `main`.
- Rama de trabajo para esta base: `feature/base-project`.
- Commits con formato Conventional Commits.

Ejemplo:

```text
feat: crea estructura inicial del sitio web
```

## Manuales y mockups

- `docs/PLAN_TRABAJO.md`
- `docs/DOCUMENTACION_TECNICA.md`
- `docs/BITACORA_CAMBIOS.md`
- `docs/DECISIONES.md`
- `docs/QA_VISUAL.md`
- `docs/INVENTARIO_CONTENIDO.md`
- `docs/PREPARACION_CMS.md`

Los mockups y manuales de marca deben conservarse como referencias oficiales del proyecto y documentarse en el inventario cuando estén disponibles dentro del repositorio.

## Nota sobre tipografía

Montserrat se deja preparada como tipografía de interfaz. Si los archivos oficiales no están disponibles, el proyecto puede apoyarse temporalmente en una carga externa documentada hasta contar con los recursos licenciados.

