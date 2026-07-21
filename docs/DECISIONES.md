# VIS-004

- Se identifico que Aseguradoras aliadas estaba contenida por un layout demasiado corto, con contador y mensaje poco dominantes y logos con poca presencia sobre el fondo azul.
- Se resolvio Aseguradoras aliadas como un bloque azul de ancho completo con jerarquia editorial mas fuerte, logos decorativos mas distribuidos y contrapunto visual entre contador y mensaje.
- Se identifico que Testimonios seguia leyendose como tres tarjetas blancas sobre fondo claro y con avatares que no coincidian con la referencia.
- Se resolvio Testimonios como un contenedor azul oscuro redondeado con tres tarjetas visibles, titulo alineado al mockup y avatares ocultos visualmente sin perder la estructura data-driven.
- WEB-014 permanece pausado para no mezclar la correccion visual del Home con una pagina interna aun pendiente.

# Decisiones tecnicas

## Base inicial

- Se conservo `index.php` sin cambios para no alterar el Home.
- Se mantuvo Bootstrap 5.3.3 como dependencia ya aprobada.
- Montserrat sigue cargando desde Google Fonts hasta contar con archivos licenciados locales.

## Design System

- Se dividio el sistema en archivos de responsabilidad unica para evitar una CSS monolitica.
- `main.css` quedo como unico importador para simplificar el mantenimiento.
- Las clases nuevas se prefijan con `rb-` para minimizar colisiones con Bootstrap y con codigo futuro.

## Componentes PHP

- Los stubs de `includes/components/` no imprimen contenido.
- Cada archivo reserva una variable PHP para que el futuro CMS pueda inyectar datos sin reescribir la estructura.

## Compatibilidad

- Se conservan alias tecnicos necesarios para la base previa mientras el sistema evoluciona hacia los nuevos componentes.

## Home inicial

- El logo de cabecera y la imagen principal del hero se toman de recursos locales ya disponibles para no introducir dependencias nuevas.
- La navegacion superior inicia transparente sobre el hero y cambia al hacer scroll mediante una clase controlada por JavaScript.
- El contenido visible del Home se alimenta desde variables PHP para facilitar el futuro CMS.

## VIS-001

- Se identifico que la reduccion visual provenia de Hero dentro de un contenedor estandar, logo de cabecera pequeño, tarjeta hero demasiado contenida y escalas prudentes en metricas y presencia.
- El Hero paso a ocupar todo el ancho disponible con un fondo de imagen completo, overlay controlado y tarjeta principal mas ancha para acercarse al mockup sin usar zoom ni `transform: scale()`.
- Las metricas se ampliaron con una tarjeta blanca horizontal y la presencia nacional paso a una composicion de mapa dominante con indicador y contador mas legibles.
- Se ajustaron contenedores por seccion para que el Home use mejor el ancho real de pantalla sin reescribir Bootstrap ni tocar las secciones posteriores.
- WEB-014 quedo pausado temporalmente para no avanzar con una pagina interna mientras la fidelidad del Home seguia por debajo de la referencia.
## Presencia nacional

- Se eligio el mapa local `assets/img/mapa al ras.png` por ser el candidato mas cercano al mockup y por contar con transparencia y definicion suficiente.
- La linea punteada y el marcador se resolvieron con HTML y CSS para evitar dependencias extras y conservar estabilidad responsive.
- En mobile se prioriza la legibilidad del mapa y se oculta el conector si compromete la composicion.

## Empresa Socialmente Responsable

- Se eligio `assets/img/esr con sombra.png` como trofeo principal por su vista frontal, pedestal completo, sombra natural y mejor correspondencia con el mockup.
- `assets/img/esr.png` se reservo como distintivo secundario debajo de la tarjeta de pilares por su escala mas compacta.
- Los iconos de pilares se mantuvieron como recursos locales transparentes, con texto visible asociado para conservar accesibilidad y legibilidad.
- La tarjeta de pilares se implemento con fondo corporativo oscuro, sin bordes internos fuertes y sin sombras adicionales que compitan con el trofeo.

## Nuestro compromiso

- Se eligio `assets/img/compromiso.png` como recurso principal por ser el candidato visual mas cercano al mockup y por incluir la escena profesional completa.
- No se agrego un fondo azul adicional porque el recurso ya trae la composicion cromatica integrada y duplicarla generaria ruido visual.
- El texto se compuso con segmentos destacados para controlar jerarquia y saltos sin depender de un rasterizado o una imagen compuesta.
- La imagen se mantuvo sin recortes agresivos ni filtros para no alterar manos, rostros ni tonos de piel.

## Soluciones

- Se implemento `includes/components/solutions.php` como componente data-driven para facilitar edicion futura desde CMS.
- Se eligio una interaccion por tabs para las categorias porque resuelve mejor la navegacion semantica y evita depender de sliders de terceros.
- El carrusel se resolvio con scroll horizontal nativo, scroll-snap y botones propios para mantener rendimiento y accesibilidad.
- Se agrego soporte de drag con mouse y touch sobre la pista para mejorar la exploracion de tarjetas sin comprometer teclado.
- Las imagenes se toman de archivos locales ya disponibles y se validan antes de renderizar para evitar enlaces rotos.

## Â¿Por quÃ© nosotros?

- Se implemento `includes/components/why.php` como bloque data-driven para permitir edicion por CMS sin duplicar markup.
- Se eligieron `nose.png`, `misa.png`, `jenny.png` e `itzel.png` por ser los mejores candidatos locales para representar asesoria, prevencion, analisis y acompanamiento.
- Se mantuvo un fondo azul independiente detras de cada recorte para aproximar el mockup sin convertir el bloque en una tarjeta completamente azul.
- La etiqueta blanca inferior se superpone ligeramente al visual para replicar la jerarquia observada en la referencia.
- Las diferencias de escala entre retratos se corrigieron con una variable CSS individual por item en lugar de valores fijos dispersos.

## Aseguradoras aliadas

- Se implemento `includes/components/partners.php` como bloque data-driven para sostener contador, mensaje y logos sin contenido fijo embebido.
- Se eligieron variantes blancas locales de AIG, AXA, Chubb, GNP, HDI, Mapfre, QuÃ¡litas y Zurich por su legibilidad sobre el fondo azul corporativo.
- La composicion se resolvio con logos posicionados de forma decorativa en escritorio y con grilla simple de dos columnas en mobile para conservar claridad.
- No se aplicaron filtros ni recoloreado por CSS para evitar degradar la nitidez de los archivos ya preparados.
- La opacidad de cada logo se ajusta por datos para equilibrar jerarquia visual sin cambiar el asset original.

## VIS-002

- Se identifico que ESR estaba comprimida por una combinacion de copy demasiado estrecho, trofeo pequeno, banda de pilares subdimensionada y un shell con altura mayor a la necesaria.
- Se corrigio la seccion ESR con un grid mas abierto, mayor jerarquia tipografica, una banda de pilares mas alta y un trofeo que vuelve a ser protagonista sin usar `scale()`.
- Se identifico que Nuestro compromiso quedaba contenido por una columna de texto angosta y una imagen visualmente pequena para la referencia.
- Se abrio la composicion de Nuestro compromiso con una columna de texto mas amplia, una imagen de mayor presencia y un contenedor mas equilibrado.
- WEB-014 permanece pausado para no mezclar la correccion visual del Home con una pagina interna aun pendiente.

## VIS-003

- Se identifico que Soluciones perdia fuerza visual por un track demasiado contenido, tarjetas estrechas, imagenes pequenas y recorridos de carrusel poco relacionados con el ancho real de pantalla.
- Se resolvio Soluciones con una sola fila horizontal de tarjetas mas amplias, contenedor mas abierto, tabs mas grandes y navegacion por tarjeta para mantener la lectura del carrusel.
- Se identifico que ¿Por qué nosotros? quedaba subescala por tarjetas bajas, retratos pequenos y una base inferior demasiado discreta.
- Se reforzo ¿Por qué nosotros? con mayor altura, imagenes mas protagonistas y una base blanca mas visible para aproximarse a la referencia.
- WEB-014 permanece pausado para no mezclar la correccion visual del Home con una pagina interna aun pendiente.

## Testimonios

- Se implemento `includes/components/testimonials.php` como bloque data-driven para permitir validacion de contenido sin duplicar markup.
- Se eligio `persona.png` como avatar interno provisional porque funciona como reemplazo generico y evita depender de retratos no aprobados.
- Los textos y metadatos se dejaron como provisionales para no presentar testimonios como contenido final hasta validacion de Comunicacion.
- La composicion se resolvio con cards limpias, fondo blanco, estrellas azules y grid responsive para mantener legibilidad sin autoplay.
- Se priorizo la accesibilidad con texto real, ratings etiquetados y fallback seguro cuando un avatar no exista.

## Bloque CTA final

- Se implemento `includes/components/final-cta.php` como cierre reutilizable del Home con dos acciones reales y datos preparados para CMS.
- Se eligio una composicion sin imagen obligatoria para no forzar recursos locales que no correspondian de forma clara al bloque de conversacion final.
- El gradiente azul y la capa glass se usaron para mantener continuidad con la identidad corporativa sin competir con el contenido precedente.
- Los enlaces del CTA se limitaron a `#contacto` y `#soluciones` para evitar destinos ambiguos antes de que el CMS administre la navegacion final.
- Se reforzo el contraste del boton outline dentro del bloque para conservar legibilidad sobre el fondo oscuro.

## Contacto

- Se implemento `includes/components/contact.php` como formulario de una sola columna porque no existian datos corporativos confirmados para una vista lateral real.
- Se reutilizaron las categorias de `WEB-007` para poblar la opcion de solucion de interes y evitar duplicar contenido en el formulario.
- La validacion se resolvio con HTML5 nativo mas JavaScript propio para mostrar errores accesibles sin enviar datos a un backend inexistente.
- `aviso-privacidad.php` se creo como ruta provisional para que el checkbox y el enlace del formulario apunten a un destino funcional sin inventar el texto legal final.
- Se mantuvo el envio neutral con `action=""` para no simular procesado ni confirmar un envio que todavia no existe.

## Footer institucional

- Se implemento `includes/components/footer.php` como bloque data-driven para reutilizar marca, navegacion, legales y copyright sin contenido embebido.
- Se eligio `R BAIDON V3 BLANCO.png` por ser el logo horizontal de mejor lectura sobre el fondo azul oscuro del footer.
- Se resolvieron los enlaces internos con anchors del Home y con una adaptacion automatica para paginas internas, evitando duplicar navegacion distinta por plantilla.
- No se incorporaron datos de contacto ni redes sociales porque el repositorio no contiene fuentes corporativas confirmadas para ese contenido.
- Se mantuvo el footer listo para CMS al reservar los textos visibles en variables PHP y no en el marcado del componente.

## QuiÃ©nes somos

- Se implemento `quienes.php` como la primera pagina institucional interna del sitio para no avanzar a Servicios ni Ubicaciones.
- Se eligio `assets/img/EDIFICIO-RBA-DIA.png` para el hero interior por su composicion diurna, espacio util para la jerarquia de copy y lectura clara sobre overlay.
- Se reforzo el hero con `background-image` ademas del `<img>` para evitar capturas vacias en headless y mantener el recurso local visible de forma estable.
- Se activo un contexto `internal` en el navbar para mostrarlo solido desde el inicio sin tocar la experiencia del Home.
- No se incluyeron historia, mision, vision ni valores porque no existe texto oficial respaldado en el repositorio.
- El CTA final se limito a `index.php#soluciones` e `index.php#contacto` para mantener la navegacion funcional y sin rutas inventadas.
