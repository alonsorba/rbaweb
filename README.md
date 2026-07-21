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

VIS-001 corrige la escala visual inicial del Home en Hero, metricas y presencia nacional para acercarlo al mockup de Comunicacion sin tocar las secciones posteriores.

WEB-004 agrega presencia nacional con mapa de Mexico, marcador de matriz en Sonora y contador de estados, manteniendo la misma base editable para CMS.

WEB-005 agrega la seccion de Empresa Socialmente Responsable con aniversario, pilares, distintivo secundario y trofeo principal, sin avanzar al bloque de compromiso.

WEB-006 agrega la seccion de Nuestro compromiso con texto segmentado e imagen local, sin avanzar a Soluciones.

WEB-007 agrega la seccion de Soluciones con tabs accesibles, carrusel horizontal y cards reutilizables, sin avanzar a otras secciones.

WEB-008 agrega la seccion Â¿Por quÃ© nosotros? con grid de cuatro beneficios, retratos recortados y etiquetas inferiores, sin avanzar a aseguradoras.

WEB-009 agrega la seccion de Aseguradoras aliadas con contador, mensaje y logos blancos decorativos, sin avanzar a testimonios ni formulario.

WEB-010 agrega la seccion de Testimonios con tres tarjetas provisionales, avatares internos y rating configurable, sin avanzar a formulario ni footer.

WEB-011 agrega el bloque CTA final con dos acciones reales, sin forzar una imagen provisional y manteniendo el cierre del Home listo para CMS.

WEB-012 agrega la seccion de Contacto con formulario accesible, validacion cliente y aviso de privacidad funcional, sin backend ni datos corporativos inventados.

WEB-013 agrega el footer institucional reutilizable con marca, navegacion interna, enlaces legales y copyright dinamico, sin inventar datos de contacto ni redes sociales.

WEB-014 queda pausado temporalmente por priorizacion de fidelidad visual del Home.

## Manuales y mockups

- `docs/PLAN_TRABAJO.md`
- `docs/DOCUMENTACION_TECNICA.md`
- `docs/BITACORA_CAMBIOS.md`
- `docs/DECISIONES.md`
- `docs/QA_VISUAL.md`
- `docs/PREPARACION_CMS.md`
- `docs/INVENTARIO_CONTENIDO.md`
