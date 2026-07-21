# Plan de trabajo - Renovacion del sitio web de R. Baidon

## Seguimiento

| ID | Fase | Tarea | Estado | Dependencias | Evidencia | Commit |
|---|---|---|---|---|---|---|
| WEB-001 | Base | Crear estructura inicial del sitio | Bloqueado | Repositorio local y recursos de marca disponibles | Base PHP modular, validacion local y push bloqueado por falta de remoto | `bc7502d` |
| WEB-002 | Base | Creacion del Design System Base | Bloqueado | Base PHP existente, Bootstrap 5.3.3 y recursos de marca | Sistema CSS modular, stubs PHP de componentes y validacion local de carga | `d53bbac` |
| WEB-003 | Home | Encabezado hero y metricas del home | Completado | Design System base, imagenes locales y remoto configurado | Navbar transparente con estado al hacer scroll, hero principal y bloque de metricas reutilizable | `2bc44a9` |
| WEB-004 | Home | Implementacion de presencia nacional y mapa de Mexico | Completado | Home base validado, mapa local disponible y seccion posterior aun no tocada | Seccion de presencia con mapa de Mexico, marcador de Sonora y contador +25 preparada para CMS | `fb1f511` |
| WEB-005 | Home | Implementacion de la seccion Empresa Socialmente Responsable | Completado | Presencia nacional ya integrada y recursos ESR locales disponibles | Seccion ESR con titulo, descripcion parametrizada, pilares reutilizables, distintivo secundario y trofeo principal listos para CMS | `139defa` |
| WEB-006 | Home | Implementacion de la seccion Nuestro compromiso | Completado | ESR ya integrada y recurso local de compromiso disponible | Seccion de compromiso con texto segmentado, imagen profesional y composicion responsive lista para CMS | `829932d` |
| WEB-007 | Home | Implementacion de la seccion Soluciones | Completado | Compromiso ya integrado y recursos locales para tarjetas de soluciones disponibles | Seccion Soluciones con tabs accesibles, carrusel horizontal, drag y cards reutilizables lista para CMS | `a8ba017` |
| WEB-008 | Home | Implementacion de la seccion ¿Por qué nosotros? | Completado | Soluciones ya integrada y recursos de personas disponibles | Seccion ¿Por qué nosotros? con grid de beneficios, retratos recortados y etiquetas inferiores lista para CMS | `a15afc7` |
| WEB-009 | Home | Implementacion de la seccion Aseguradoras aliadas | Completado | ¿Por qué nosotros? ya integrada y logos blancos locales disponibles | Seccion Aseguradoras aliadas con contador +20, mensaje de asesoría y logotipos decorativos parametrizados lista para CMS | `c38ce2d` |
| WEB-010 | Home | Implementacion de la seccion Testimonios | En progreso | Aseguradoras aliadas ya integrada y recursos provisionales de avatar disponibles | Seccion Testimonios con tres tarjetas, avatares internos y datos preparados para CMS lista para validacion final | `pendiente` |

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
- WEB-003 completo la composicion visual real del Home sin avanzar a las secciones posteriores.
- WEB-004 completo la seccion de presencia nacional sin tocar ESR ni bloques posteriores.
- WEB-005 completa la seccion de Empresa Socialmente Responsable y mantiene pendiente el bloque de compromiso.
- WEB-006 completa la seccion de compromiso y deja pendiente el bloque de soluciones.
- WEB-007 completa la seccion de Soluciones con navegacion por categorias y carrusel horizontal accesible.
- WEB-008 completa la seccion ¿Por qué nosotros? con cuatro beneficios visuales y sin avanzar a aseguradoras.
- WEB-009 completa la seccion Aseguradoras aliadas con logos blancos distribuidos de forma decorativa y sin avanzar a testimonios.
- WEB-010 avanza con la seccion Testimonios, usando avatares internos provisionales y sin avanzar a formulario ni footer.
