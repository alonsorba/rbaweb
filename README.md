# R. Baidon - Sitio institucional

## Objetivo

Renovacion completa del sitio institucional de R. Baidon con una base front-end modular en PHP, HTML5 semantico, Bootstrap 5.3.3, CSS3 y JavaScript vanilla.

## Tecnologias

- PHP
- HTML5 semantico
- Bootstrap 5.3.3
- CSS3
- JavaScript vanilla

## Requisitos locales

- PHP instalado localmente.
- Servidor integrado de PHP o servidor local equivalente.
- Navegador moderno.

## Ejecucion local

```bash
php -S localhost:8000 -t .
```

Abrir:

```text
http://localhost:8000
```

## Estructura de carpetas

- `index.php`: punto de entrada actual.
- `includes/`: parciales del layout y stubs de componentes.
- `assets/css/`: Design System base.
- `assets/js/`: comportamiento vanilla.
- `assets/img/brand/`: recursos de marca.
- `assets/img/home/`: recursos para el Home.
- `assets/img/icons/`: iconos.
- `assets/img/temporary/`: recursos provisionales.
- `assets/fonts/`: fuentes locales con licencia.
- `pages/`: paginas internas futuras.
- `docs/`: documentacion del proyecto.

## Convencion de ramas y commits

- Rama base: `main`.
- Rama de trabajo actual: `feature/base-project`.
- Commits con Conventional Commits.

## Design System

El sistema visual se construye con clases propias prefijadas `rb-` y con `main.css` como importador central. La estructura ya esta preparada para reutilizar componentes y evolucionar hacia un CMS.

## Estado del Home

WEB-003 ya compone el arranque visible del Home con navbar, hero y metricas, usando solo recursos locales existentes y variables PHP preparadas para edicion posterior.

## Manuales y mockups

- `docs/PLAN_TRABAJO.md`
- `docs/DOCUMENTACION_TECNICA.md`
- `docs/BITACORA_CAMBIOS.md`
- `docs/DECISIONES.md`
- `docs/QA_VISUAL.md`
- `docs/PREPARACION_CMS.md`
- `docs/INVENTARIO_CONTENIDO.md`
