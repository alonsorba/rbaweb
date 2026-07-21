# VIS-004

- Se corrigio la escala visual de Aseguradoras aliadas y Testimonios sin modificar CTA final, Contacto, Footer ni paginas internas.
- La causa principal de Aseguradoras aliadas era una composicion demasiado angosta y con logos decorativos poco presentes para la referencia.
- La causa principal de Testimonios era un bloque blanco con tarjetas pequeñas y avatares visibles que no coincidian con el mockup.
- Se amplio Aseguradoras aliadas con jerarquia de contador mas fuerte, mensaje mas protagonista y logos distribuidos sobre el fondo azul.
- Se convierto Testimonios en un contenedor azul oscuro redondeado con tres tarjetas visibles y avatares ocultos visualmente.

# QA visual

## Estado

Validacion inicial de la base del Design System.

## Alcance verificado

- El sitio sigue cargando desde PHP local.
- La hoja principal importa el sistema CSS completo.
- El Home inicial ya compone navbar, hero y metricas reutilizables.
- No se agregaron librerias nuevas.

## WEB-003

- Navbar superior con menu colapsable en mobile.
- Hero principal con imagen local, card oscura y CTA.
- Bloque de metricas con tres columnas sin separadores.

## WEB-004

- Seccion de presencia nacional con mapa local de Mexico.
- Etiqueta de ubicacion en azul corporativo con texto blanco.
- Contador +25 alineado con la composicion general.
- Conector punteado visible en desktop y oculto en mobile para mantener estabilidad.

## VIS-001

- Se corrigio la escala visual del Home en Hero, metricas y presencia nacional sin tocar ESR, compromiso, soluciones, testimonios, CTA, contacto ni footer.
- La causa principal de la compresion era la suma de un Hero contenido dentro de `rb-container`, un logo pequeno, una tarjeta hero demasiado estrecha y metricas/presencia con escalas tipograficas conservadoras.
- Se validaron capturas para `1440x900`, `1366x768`, `1024x768`, `768x1024`, `430x900`, `390x844` y `360x800`, ademas de vistas individuales del Hero, metricas, presencia nacional y del tramo completo hasta presencia.
- No se observo overflow horizontal en las capturas revisadas y el navbar con scroll conserva la navegacion funcional.
- WEB-014 quedo pausado por priorizacion de fidelidad visual del Home.

## VIS-002

- Se corrigio la escala visual de ESR y Nuestro compromiso sin modificar Soluciones, ¿Por qué nosotros?, Aseguradoras, Testimonios, CTA, contacto ni footer.
- La causa principal estaba en una combinacion de `max-width` conservadores, min-heights altos y una banda de pilares y un trofeo insuficientemente escalados para la referencia.
- Se amplió ESR con jerarquia tipografica mayor, banda de pilares mas alta, sello secundario mas visible y trofeo con mas presencia en desktop.
- Se abrio la composicion de Nuestro compromiso con una columna de texto mas amplia y una imagen principal de mayor protagonismo.
- WEB-014 sigue pausado por priorizacion de fidelidad visual del Home.

## VIS-003

- Se corrigio la escala visual de Soluciones y ¿Por qué nosotros? sin modificar Aseguradoras aliadas, Testimonios, CTA, contacto, footer ni paginas internas.
- La causa principal de Soluciones era una combinacion de tarjetas demasiado estrechas, medias visuales pequenas y un carrusel que no ocupaba suficiente ancho real.
- La causa principal de ¿Por qué nosotros? era un conjunto de tarjetas bajas, retratos pequenos y captions inferiores con poco aire y jerarquia insuficiente.
- Se ampliaron tarjetas, titulos y tabs de Soluciones para lograr una sola fila horizontal más cercana al mockup.
- Se reforzaron las tarjetas de ¿Por qué nosotros? con mayor altura, retratos mas presentes y una base blanca mas legible.
- WEB-014 sigue pausado por priorizacion de fidelidad visual del Home.
## WEB-005

- Seccion ESR integrada despues de presencia nacional y antes del bloque de compromiso.
- Composicion horizontal en desktop con tarjeta de pilares, distintivo secundario y trofeo a la derecha.
- Apilado vertical en mobile con jerarquia conservada y sin overflow horizontal observado en la revision del CSS y el DOM.
- Sintaxis PHP, JS y diff validadas correctamente.

## WEB-006

- Seccion de compromiso integrada despues de ESR y antes de soluciones.
- Texto segmentado con palabras destacadas en azul oscuro y composicion de dos columnas en desktop.
- Imagen principal visible sin segundo fondo azul, usando el recurso local completo `compromiso.png`.
- Validacion tecnica correcta, con HTTP 200 y sin errores de sintaxis detectados.

## WEB-007

- Seccion de Soluciones integrada despues de compromiso y antes del cierre de pagina.
- Tabs accesibles para Empresas, Personas y Gestion Integral con estados `aria-selected` y paneles asociados.
- Carrusel horizontal con cards reutilizables, CTA `VER COBERTURA`, botones previos/siguientes y soporte de arrastre.
- Verificacion tecnica correcta, sin overflow horizontal detectado en la revision del DOM y estilos.
- Captura headless generada y revisada con viewport alto para confirmar el render de la seccion.

## WEB-008

- Seccion Â¿Por quÃ© nosotros? integrada despues de Soluciones con cuatro beneficios visuales y orden original conservado.
- Grid de cuatro columnas en desktop, dos columnas en tablet y una columna en mobile sin scroll horizontal.
- Fotografia recortada por tarjeta con fondo azul superior y etiqueta blanca inferior alineada.
- Capturas revisadas:
  - `1366x768` en Edge headless, resultado correcto en carga general.
  - `1024x768` en Edge headless, resultado correcto en carga general.
  - `430x900` en Edge headless, resultado correcto en carga general.
  - `768x900` en Edge headless, resultado correcto en tablet.
  - `390x900` en Edge headless, resultado correcto en mobile.
  - `360x900` en Edge headless, resultado correcto en mobile compacto.
  - `1440x7200` en Edge headless, resultado correcto para revisar la seccion completa.
  - `430x7000` en Edge headless, resultado correcto para revisar la seccion completa en ancho mobile.
- Warning no bloqueante de Edge visible en varias capturas: `Every renderer should have at least one task provided by a primary task provider`.
- Los intentos de captura con ancla `#por-que-nosotros` produjeron imagen en blanco y se descartaron; la evidencia final se tomo sin ancla.

## WEB-009

- Seccion Aseguradoras aliadas integrada despues de Â¿Por quÃ© nosotros? con contador +20, mensaje de asesoria y logotipos blancos locales.
- RevisiÃ³n visual del conjunto de logos confirmada con `.codex-partners-preview.png`, validando contraste, proporciÃ³n y legibilidad sobre fondo azul.
- La composicion desktop se mantiene como capa decorativa absoluta y la vista mobile repliega los logotipos a una grilla de dos columnas sin overflow horizontal observado en la revision del CSS y el DOM.
- El intento de captura headless en PNG no persistio en disco en esta sesion, por lo que se dejo trazabilidad del hallazgo y se tomo como evidencia visual el preview compuesto de logos.
- Sintaxis PHP, JS, diff y respuesta HTTP 200 validadas correctamente.

## WEB-010

- Seccion Testimonios integrada despues de Aseguradoras aliadas con tres tarjetas provisionales y avatares internos genericos.
- Grid de tres columnas en desktop, dos en laptop y una columna en mobile sin overflow horizontal observado en la revision del CSS y el DOM.
- Los textos y metadatos quedan marcados como provisionales y el avatar interno `persona.png` evita imagenes rotas mientras Comunicacion valida el contenido.
- La captura headless no persistio en disco por un fallo de GPU en Chrome headless, por lo que no se tomo como evidencia final en esta sesion.
- Sintaxis PHP, JS, diff y respuesta HTTP 200 validadas correctamente.

## WEB-011

- Bloque CTA final integrado despues de Testimonios con titulo, descripcion y dos acciones reales.
- Composicion responsive con gradiente corporativo, shell glass y botones de alto contraste sin imagen obligatoria.
- Revision del DOM y estilos sin overflow horizontal visible en escritorio ni mobile en la base del bloque.
- Sintaxis PHP, JS, diff y respuesta HTTP 200 validadas correctamente.
- Captura headless pendiente de una revision visual final en esta sesion.

## WEB-012

- Seccion Contacto integrada despues del CTA final con encabezado, formulario accesible y enlace funcional al Aviso de Privacidad.
- En escritorio la composicion se resolvio en una sola tarjeta centrada porque no existian datos corporativos confirmados para una columna lateral real.
- Los campos usan labels visibles, errores asociados y boton real sin enviar datos al backend.
- Capturas revisadas:
  - `1366x768` en Edge headless, generada para la base general del Home.
  - `1024x768` en Edge headless, generada para la base general del Home.
  - `430x900` en Edge headless, generada para la base mobile del Home.
  - `1366x12000` en Edge headless, valida el cierre del Home con CTA final, Contacto y el inicio del footer.
  - `430x10000` y `430x14000` en Edge headless, revisadas para confirmar el bloque Contacto y su continuidad hacia el footer.
- Warning no bloqueante de Edge visible en varias capturas: `Every renderer should have at least one task provided by a primary task provider`.
- La captura con ancla `#contacto` en mobile no aterrizo en el bloque y se descarto; la evidencia util se tomo con capturas completas de pagina.

## WEB-013

- Footer institucional integrado al final del sitio con marca, navegacion interna, enlace legal y copyright dinamico.
- La composicion usa fondo azul oscuro, grid de tres columnas en desktop y apilado progresivo en tablet y mobile.
- El logo blanco horizontal se mantiene legible sobre el fondo y no genera overflow horizontal en la parte baja de la pagina.
- `aviso-privacidad.php` reutiliza el mismo footer para conservar consistencia visual en paginas internas.
- Capturas revisadas:
  - `.codex-footer-desktop.png` en Edge headless, valida el cierre de `index.php` con footer completo.
  - `.codex-footer-mobile.png` en Edge headless, valida el footer apilado en mobile.
  - `.codex-footer-privacy.png` en Edge headless, valida la reutilizacion del footer en `aviso-privacidad.php`.

## WEB-014

- Pagina institucional `quienes.php` integrada con navbar interno solido, hero interior, introduccion, diferenciadores, CTA y footer reutilizable.
- La fotografia del hero se visualiza correctamente con `EDIFICIO-RBA-DIA.png` y conserva contraste suficiente sobre el overlay.
- El navbar muestra `QuiÃ©nes somos` como enlace activo con `aria-current="page"` y mantiene el regreso al Home mediante enlaces funcionales.
- No se renderizaron secciones vacias de historia, mision, vision o valores porque no existe respaldo editorial en el repositorio.
- Capturas revisadas:
  - `.codex-quienes-1366-final.png` en Edge headless, valida el hero interior y la composicion desktop.
  - `.codex-quienes-1024.png` en Edge headless, valida el comportamiento en laptop.
  - `.codex-quienes-430-final.png` en Edge headless, valida el apilado mobile y el hero con imagen.
  - `.codex-home-final.png` en Edge headless, confirma que Home no presenta regresiones.
  - `.codex-privacy-final.png` en Edge headless, confirma que el footer reutilizado sigue funcionando en `aviso-privacidad.php`.

## Criterios revisados

- Sin desbordamiento horizontal en la base existente.
- Estructura responsive preparada para desktop, laptop, tablet y mobile.
- Clases reutilizables disponibles para posteriores secciones.
- Preparado para contraste y navegacion por teclado en los controles principales.
- Sin desbordamiento horizontal observado en la composicion de presencia.
- Sin desbordamiento horizontal observado en la seccion ESR.
- Sin desbordamiento horizontal observado en la seccion de compromiso.
- Sin desbordamiento horizontal observado en la seccion de Soluciones.
- Sin desbordamiento horizontal observado en la seccion Â¿Por quÃ© nosotros?.
- Sin desbordamiento horizontal observado en el bloque CTA final.
- Sin desbordamiento horizontal observado en la seccion Contacto.
- Sin desbordamiento horizontal observado en el footer institucional.
- Sin desbordamiento horizontal observado en la pagina institucional QuiÃ©nes somos.
- El sitio responde con HTTP 200 desde el servidor local.
## Pendiente

- Comparacion visual de nuevas paginas o secciones cuando exista contenido real del Home o de paginas internas.
