# Plan de trabajo - Renovacion del sitio web de R. Baidon

## Seguimiento

| ID | Fase | Tarea | Estado | Dependencias | Evidencia | Commit |
|---|---|---|---|---|---|---|
| WEB-001 | Base | Crear estructura inicial del sitio | Bloqueado | Repositorio local y recursos de marca disponibles | Base PHP modular, validacion local y push bloqueado por falta de remoto | `bc7502d` |
| WEB-002 | Base | Creacion del Design System Base | Bloqueado | Base PHP existente, Bootstrap 5.3.3 y recursos de marca | Sistema CSS modular, stubs PHP de componentes y validacion local de carga | `d53bbac` |
| WEB-003 | Home | Encabezado hero y metricas del home | En progreso | Design System base, imagenes locales y remoto configurado | Navbar transparente con estado al hacer scroll, hero principal y bloque de metricas reutilizable | Pendiente |

## Fases generales

- Base tecnica.
- Home por secciones.
- Paginas internas.
- Responsive y accesibilidad.
- SEO tecnico.
- QA visual.
- Publicacion.
- Preparacion para CMS.

## Estado actual

- WEB-002 quedo preparado localmente sin tocar `index.php` ni el contenido del Home.
- WEB-003 inicia la composicion visual real del Home sin avanzar a las secciones posteriores.
