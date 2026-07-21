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

- Seccion ¿Por qué nosotros? integrada despues de Soluciones con cuatro beneficios visuales y orden original conservado.
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

- Seccion Aseguradoras aliadas integrada despues de ¿Por qué nosotros? con contador +20, mensaje de asesoria y logotipos blancos locales.
- Revisión visual del conjunto de logos confirmada con `.codex-partners-preview.png`, validando contraste, proporción y legibilidad sobre fondo azul.
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

## Criterios revisados

- Sin desbordamiento horizontal en la base existente.
- Estructura responsive preparada para desktop, laptop, tablet y mobile.
- Clases reutilizables disponibles para posteriores secciones.
- Preparado para contraste y navegacion por teclado en los controles principales.
- Sin desbordamiento horizontal observado en la composicion de presencia.
- Sin desbordamiento horizontal observado en la seccion ESR.
- Sin desbordamiento horizontal observado en la seccion de compromiso.
- Sin desbordamiento horizontal observado en la seccion de Soluciones.
- Sin desbordamiento horizontal observado en la seccion ¿Por qué nosotros?.
- Sin desbordamiento horizontal observado en el bloque CTA final.
- Sin desbordamiento horizontal observado en la seccion Contacto.
- El sitio responde con HTTP 200 desde el servidor local.
## Pendiente

- Comparacion visual de nuevas paginas o secciones cuando exista contenido real del Home o de paginas internas.
