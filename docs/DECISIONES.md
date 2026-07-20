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
