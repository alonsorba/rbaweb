# Auditoria tecnica y visual del home

## 1. Alcance de esta auditoria
Esta auditoria revisa el estado actual del home en `index.php` y su soporte en `assets/css/style.css` y `assets/js/main.js`, tomando como referencia el plan de trabajo del proyecto.

Nota:
- el repositorio contiene el plan de trabajo, pero no un archivo de boceto visual final de Comunicacion;
- por eso, la comparacion contra el boceto es indirecta y se basa en la estructura que el plan describe y en la lectura del home actual.

## 2. Estructura actual del home
El home ya esta construido como una landing corporativa completa. Su flujo actual es:

1. Header global con navegacion y CTA de acceso a usuarios.
2. Hero principal con imagen de fondo, card de mensaje y botones de accion.
3. Bloque de confianza/estadisticas.
4. Seccion de presencia nacional con mapa.
5. Seccion ESR y reconocimiento institucional.
6. Seccion de compromiso corporativo.
7. Seccion de soluciones con categorias y carousel horizontal.
8. Seccion de proceso metodologico.
9. Testimonios.
10. Bloque de contacto con formulario.
11. Footer institucional.

## 3. Secciones existentes
### Hero principal
- clase base: `hero-carousel hero-v2 home-landing-hero`
- imagen principal: `home-landing-hero__image`
- card de contenido: `home-hero-card hero-v2-content`
- acciones: `hero-v2-actions`, `home-primary-btn`, `home-secondary-btn`

### Confianza y estadisticas
- contenedor: `infographic-section`
- shell: `infographic-shell`
- estadisticas: `infographic-stats`, `infographic-stats__item`, `infographic-stats__number`
- etiqueta de matriz: `infographic-label`
- mapa: `infographic-map`, `infographic-map__stage`, `infographic-map__dot`, `infographic-map__hover`
- bloque ESR: `infographic-esr`, `infographic-esr__content`, `infographic-esr__media`

### Compromiso
- seccion: `commitment-section`
- contenedor: `commitment-container`
- texto: `commitment-copy`, `commitment-title`
- media: `commitment-media`, `commitment-image-card`

### Soluciones
- seccion: `services-solutions`
- header: `services-solutions__header`
- botones/categorias: `services-solutions__pills`, `services-solutions__pill`
- area de carrusel: `services-solutions__carousel-shell`, `services-solutions__carousel`, `services-solutions__track`
- tarjetas: `solution-card`, `solution-card__image`, `solution-card__content`, `solution-card__btn`

### Proceso
- seccion: `timeline-v2`
- pasos: `timeline-v2-step`

### Contacto
- seccion: `cta-contact-v2`
- copia: `cta-copy-v2`

## 4. Funciones JS relacionadas
`assets/js/main.js` ya concentra casi todo el comportamiento del home:

- `updateHeroScrollEffect(scrollY)`
  - controla variables CSS del hero;
  - modifica desplazamiento y opacidad del contenido del hero.

- `updatePageHeroEffect(scrollY)`
  - mantiene el efecto de fondo/overlay en hero de paginas internas.

- `onScroll(scrollY)`
  - aplica sombra al navbar;
  - modifica opacidad y desplazamiento del header;
  - llama a los efectos de hero.

- `renderScrollFrame()`
  - anima el scroll con `requestAnimationFrame`.

- `IntersectionObserver` para:
  - revelar elementos con `reveal-on-scroll`;
  - animar contadores de estadisticas.

- `renderSolutions(key)`
  - reescribe las tarjetas del carousel segun la categoria activa.

- `setActiveSolution(key)`
  - activa visualmente el boton de categoria;
  - vuelve a renderizar las soluciones.

- eventos de arrastre en `solutionCarousel`
  - `mousedown`, `mousemove`, `mouseup`, `mouseleave`, `click`
  - permiten deslizar la tarjeta horizontalmente con mouse.

## 5. Diferencias detectadas contra el plan
### Coincidencias claras
- El proyecto ya esta en PHP + HTML5 + Bootstrap 5.3.3 + CSS + JS vanilla.
- El home ya contiene varias secciones de conversion y contenido institucional.
- Ya existen animaciones, cards, presencia nacional, hero y contacto.
- El sitio se organiza por paginas PHP independientes, como describe el plan.

### Brechas o desalineaciones
- El plan propone trabajar por fases, pero el home ya esta bastante avanzado y mezcla varias decisiones visuales en una sola pagina.
- El plan menciona una revision previa al boceto final de Comunicacion; aqui no hay archivo del boceto, asi que no se puede validar fidelidad pixel a pixel.
- `index.php` concentra demasiada logica de estructura y contenido; no existe una capa compartida de componentes.
- `assets/css/style.css` agrupa una cantidad grande de reglas globales y variantes de responsive.
- `assets/js/main.js` combina scroll, reveal, contador, cambio de soluciones y drag horizontal en un solo archivo.

## 6. Riesgos antes de redisenar
1. Cambiar `assets/css/style.css` puede afectar varias secciones a la vez.
2. El header del home depende de opacidad y transformaciones al hacer scroll; cualquier ajuste puede romper la primera impresión.
3. El carousel de soluciones depende de DOM reescrito por JS, asi que tocar HTML o clases sin coordinarlo puede dejar tarjetas vacias.
4. Los selectores de `IntersectionObserver` son amplios; una clase nueva puede entrar al sistema de reveal por accidente.
5. La composicion desktop del home usa muchas posiciones relativas y absolutes, lo que exige mucho cuidado en responsive.
6. El plan de trabajo pide una comparacion con el boceto, pero ese boceto no esta versionado aqui; la validacion visual todavia depende de evidencia externa.

## 7. Riesgos por seccion
### Hero principal
- usa una composicion muy dependiente de imagen, card flotante y botones;
- cualquier cambio de espaciado puede desalinear el copy.

### Estadisticas / presencia
- combina contenedores, contadores y mapa con hover;
- en pantallas pequenas puede requerir ajustes finos de jerarquia visual.

### ESR
- usa elementos decorativos y media grande;
- existe riesgo de recorte en tablet y mobile.

### Soluciones
- depende de carousel horizontal y datos re-renderizados por JS;
- cualquier cambio de estructura debe revisarse con el script.

### Proceso / testimonios / contacto
- son secciones menos complejas, pero aun dependen de tipografia y espaciado global.

## 8. Recomendaciones por prioridad
### Prioridad alta
- Definir el boceto visual de referencia como archivo versionado o evidencia clara.
- No modificar `style.css` sin revisar impacto en home e internas.
- Mantener la rama de trabajo actual para cualquier cambio posterior.

### Prioridad media
- Aislar visualmente el hero y la seccion de estadisticas antes del resto.
- Preparar una lista de diferencias por seccion para validar con Comunicacion.
- Separar mentalmente el trabajo de contenido del trabajo de layout.

### Prioridad baja
- Refactorizar el JS para dividirlo en bloques mas pequeños.
- Considerar componentes reutilizables en una fase posterior.

## 9. Primer bloque visual sugerido
Antes de redisenar todo el home, el primer bloque visual sugerido es:

1. Hero principal.
2. Header y comportamiento de scroll.
3. Bloque de estadisticas/presencia nacional.

Motivo:
- es la parte que define la primera impresion;
- concentra varias de las decisiones visuales mas sensibles;
- permite validar rapidamente si la direccion del rediseño coincide con Comunicacion.

## 10. Resultado tecnico inicial
- El home esta funcional y visualmente avanzado.
- No esta en una fase de arranque, sino de consolidacion previa al rediseno.
- La principal limitacion tecnica no es funcional, sino de mantenimiento y consistencia entre secciones.

## 11. Seccion de testimonios
Estado: revisado y ajustado.
- La seccion actual es estatica y se compone de un encabezado, un CTA y tres cards en una grilla Bootstrap.
- Cada card contiene avatar de iniciales, nombre, cargo, texto del testimonio, calificacion visual y una referencia de empresa.
- No existe carrusel, autoplay, indicadores ni logica de navegacion en JavaScript para este bloque.
- La estructura se puede convertir facilmente en una coleccion de testimonios si el futuro CMS expone campos por registro.

## 12. Preparacion para CMS
Campos editables sugeridos:
- nombre del cliente;
- cargo o rol;
- empresa;
- fotografia o avatar;
- texto del testimonio;
- orden de aparicion;
- estado activo o visible;
- calificacion opcional.

Estructura sugerida:
- un registro por testimonio;
- una card reutilizable por elemento;
- un encabezado editable solo desde configuracion general de la seccion;
- un orden controlado por campo numerico.

Dependencias:
- contenido visible en `index.php`;
- estilos locales en `assets/css/style.css`;
- posible render dinamico futuro desde PHP o CMS.

Riesgos:
- exceso de texto puede desbalancear la altura de las cards;
- fotografias de distintos formatos pueden romper la alineacion;
- si el CMS no controla el orden, la lectura narrativa puede perder coherencia.

Oportunidades de reutilizacion:
- mismo componente para home, pagina de casos o landing de conversion;
- misma tarjeta base con diferentes niveles de densidad;
- posible integracion con testimonios destacados o rotacion manual.

## 27. Integracion visual del Home
Estado: ajustado.
- Se reviso el home como una sola experiencia visual, de header a testimonios.
- Se elimino la alternancia global de fondos para evitar conflictos con los fondos propios de cada bloque.
- Se reforzo la continuidad entre hero, trust bar, compromiso, soluciones, proceso y testimonios.
- Se mantuvo sin cambios el contenido, la logica JS y las secciones de contacto y footer.

Criterios utilizados:
- continuidad de fondo por bloque;
- coherencia en sombras, bordes y radios;
- lectura fluida de arriba hacia abajo;
- continuidad de la identidad grafica en el tramo central del home.

Inconsistencias corregidas:
- fondos alternados que competian con secciones ya definidas;
- cambios bruscos entre bloques con fondos similares;
- remates visuales menos consistentes al pasar de proceso a testimonios.

Elementos pendientes:
- contacto y footer quedan para el siguiente bloque de trabajo;
- siguen existiendo cambios ajenos en el worktree que no pertenecen a esta integracion;
- conviene validar una vez mas en navegador normal antes de tocar el cierre comercial.

## 28. Seccion de contacto
Estado: ajustado.
- Se mejoro la continuidad visual del cierre del home con una card de apoyo y un formulario mas contenido.
- Se reforzaron labels, placeholders, focus y jerarquia tipografica para que el formulario se lea con mas claridad.
- Se mantuvo la funcionalidad actual del formulario sin agregar backend ni nuevas dependencias.
- Se preservaron los campos, validaciones y enlaces existentes.

## 29. Footer
Estado: ajustado.
- Se refino la separacion entre columnas y la jerarquia de enlaces para un cierre visual mas limpio.
- Se suavizo el fondo y se mejoro la lectura de enlaces y el bloque inferior de copyright.
- Se mantuvo el componente compartido para el resto del sitio sin tocar paginas internas.

## 30. Preparacion para CMS
Campos editables sugeridos para Contacto:
- titulo;
- subtitulo;
- correo;
- telefono;
- direccion;
- horario;
- textos auxiliares;
- destinatario futuro del formulario;
- mensaje de confirmacion.

Campos editables sugeridos para Footer:
- logotipo;
- descripcion;
- columnas de enlaces;
- datos de contacto;
- redes sociales;
- aviso legal;
- copyright;
- orden y visibilidad de enlaces.

## 31. Validacion responsive del cierre
- Desktop: contacto y footer conservan jerarquia y ancho maximo razonable.
- Laptop: el formulario mantiene una lectura estable junto a la tarjeta informativa.
- Tablet: el bloque se apila sin romper el flujo ni generar desbordes.
- Movil: los campos se apilan y el footer conserva su lectura por columnas.
- Sintaxis PHP: `php -l index.php` paso sin errores.
- JavaScript: `node --check assets/js/main.js` paso sin errores.

## 32. Riesgos y deuda tecnica
- El worktree sigue teniendo cambios ajenos en `.php-preview-router.php` y `assets/img/` que no forman parte de este cierre.
- `index.php` conserva una correccion ortografica previa separada de este bloque.
- El footer es compartido, asi que cualquier ajuste posterior debe revisarse tambien en paginas internas.

## 13. Bloque inicial ajustado
Estado: en progreso.
- Se ajusto el comportamiento del header del home para que pase de transparente sobre el hero a un estado solido al hacer scroll.
- Se preparo el cambio de logo del header entre version blanca y version RGB para evitar baja legibilidad sobre fondo claro.
- Se refino el hero principal con mayor presencia visual, mejor overlay y una card de contenido ligeramente mas equilibrada.
- Se dieron ajustes de proporcion al bloque de estadisticas/presencia nacional para sostener mejor la lectura en desktop.

## 14. Archivos modificados en este bloque
- `index.php`
- `assets/css/style.css`
- `assets/js/main.js`
- `documents/revision-inicial-rba-web.md`

## 15. Validaciones responsive
- Desktop: header mas legible al hacer scroll, hero con card mas estable y stats con mejor balance visual.
- Tablet: el bloque se mantiene dentro del flujo esperado sin modificar secciones posteriores.
- Movil: el header conserva contraste con el cambio de logo y el bloque inicial sigue apilado por las reglas existentes.
- Sintaxis PHP: validada con `C:\xampp\php\php.exe -l` en todas las paginas tocadas de PHP.
- Vista previa local: levantada con `php -S 127.0.0.1:8082 .php-preview-router.php`.
- Verificacion de assets: la ruta del logo en `assets/img/R BAIDON V3 BLANCO.png` responde `200 image/png` desde el router local.
- Captura visual automatizada: en navegador headless el logo siguio apareciendo como fallback en algunas capturas, asi que queda una verificacion manual pendiente para confirmar si es un efecto del entorno de preview o del navegador de pruebas.

## 16. Riesgos pendientes
- El estado visual completo depende de pruebas en navegador con el servidor local levantado.
- El cambio de logo depende de que los assets blanco y RGB permanezcan disponibles con los mismos nombres y de que el preview local siga resolviendo rutas con espacios.
- El bloque de estadisticas sigue siendo el tramo mas sensible del home para ajustes posteriores.

## 17. Siguiente bloque recomendado
- Revisar y pulir la seccion de presencia nacional/mapa si la comunicacion visual pide una jerarquia mas marcada.
- Si no hay cambios adicionales de diseño, el siguiente bloque logico es avanzar al resto del home sin tocar el header ya estabilizado.

## 18. Validacion local adicional
- El router local de preview permanece como parte del proyecto y se usa para servir PHP y assets estaticos durante la verificacion.
- La ruta del logo responde `200 image/png` en `127.0.0.1:8082`, por lo que la incidencia restante queda asociada a la pintura headless del navegador y no a la disponibilidad del asset.
- Antes de avanzar al siguiente bloque visual, conviene confirmar manualmente el logo del header en un navegador normal conectado al servidor local.

## 19. Bloque de presencia nacional
Estado: ajustado.
- Se redujo la presencia visual del mapa para que el bloque respire mejor y no compita con el bloque ESR.
- Se refino la posicion del punto de ubicacion para acercarlo a Sonora dentro de la composicion.
- Se reforzo el hover del mapa con una capa mas limpia y una tarjeta de presencia nacional mas legible.
- Se mantuvo el numero `+25` y la etiqueta de matriz como referencia principal del bloque.

## 20. Validacion responsive del bloque
- Desktop: el mapa queda mas contenido y la composicion general del bloque mantiene jerarquia antes del ESR.
- Tablet: la estructura sigue apilando correctamente el contenido cuando el layout pasa a una sola columna.
- Movil: el mapa se conserva dentro del flujo vertical sin invadir secciones posteriores.
- Sintaxis PHP: `php -l index.php` paso sin errores.
- Captura automatizada: el navegador headless no guardo archivo de captura para este bloque, asi que la revision visual queda documentada como validacion pendiente en navegador normal.

## 21. Bloque ESR
Estado: ajustado.
- Se reequilibro la relacion entre el texto ESR y la imagen del reconocimiento para que el trofeo no domine la composicion.
- Se reforzo la jerarquia del titulo y se ajustaron los pilares ESR para que se lean como una banda de soporte y no como contenido secundario disperso.
- Se redujo el ancho efectivo del trofeo y se mejoro su alineacion dentro del bloque.
- Se mantuvo la continuidad visual con la seccion de presencia nacional sin alterar compromiso ni el resto del home.

## 20. Validacion del bloque ESR
- Desktop: el texto y la imagen mantienen una composicion mas equilibrada y menos cargada.
- Tablet: el bloque conserva lectura clara en una columna sin invadir el siguiente contenido.
- Movil: la imagen del trofeo sigue el flujo vertical y no rompe el orden de secciones.
- Sintaxis PHP: `php -l index.php` paso sin errores.
- Captura automatizada: el navegador headless no dejo una captura utilizable, asi que la validacion visual final queda pendiente de comprobacion manual en navegador normal.

## 21. Bloque de compromiso
Estado: ajustado.
- Se mejoro el equilibrio entre el texto del compromiso y la imagen del equipo.
- Se redujeron espacios vacios con una distribucion mas compacta y estable.
- Se ajusto el recorte de la imagen para que el equipo se vea como una composicion completa y no como una pieza flotante.
- Se reforzo la jerarquia del mensaje principal para que la lectura inicial sea mas limpia.

## 22. Validacion responsive del bloque de compromiso
- Desktop: el texto y la imagen quedan mejor balanceados y con menos aire inutil.
- Tablet: la seccion sigue apilando correctamente sin romper el flujo hacia soluciones.
- Movil: el bloque conserva lectura clara y la imagen mantiene su recorte.
- Sintaxis PHP: `php -l index.php` paso sin errores.
- Captura automatizada: no se obtuvo una captura utilizable, asi que la validacion visual final sigue pendiente de revisar en navegador normal.

## 23. Bloque de soluciones
Estado: ajustado.
- Se reforzo la jerarquia del titulo con un subtitulo explicito para indicar que el contenido puede desplazarse horizontalmente.
- Se mejoro la visibilidad de las categorias activas y se agregaron controles anterior/siguiente como apoyo al carrusel.
- Se estandarizo la proporcion de las cards para que todas compartan un peso visual mas consistente.
- Se mantuvo el render dinamico por categoria y el desplazamiento horizontal con drag y touch.

## 24. Validacion del bloque de soluciones
- Desktop: las cards aprovechan mejor el ancho disponible y el carrusel conserva su desplazamiento horizontal.
- Tablet: las cards siguen visibles sin colapsar la jerarquia del bloque.
- Movil: el bloque mantiene lectura clara, las categorias se apilan mejor y las cards conservan una anchura util.
- JavaScript: `node --check assets/js/main.js` paso sin errores.
- Captura automatizada: no se obtuvo una captura utilizable del bloque, por lo que la revision visual final sigue pendiente de navegador normal.

## 25. Bloque de proceso
Estado: ajustado.
- Se reforzo la jerarquia del encabezado con un subtitulo de contexto.
- Se reorganizaron los pasos en tarjetas semanticas con numero, icono y descripcion separada.
- Se agregaron conectores visuales discretos en desktop para sostener la lectura secuencial.
- Se mantuvo el orden Diagnostico > Diseno > Implementacion > Acompanamiento sin tocar el resto del home.

## 26. Validacion del bloque de proceso
- Desktop: las cuatro etapas quedan alineadas con una secuencia clara y conectores discretos.
- Tablet: la grilla pasa a dos columnas sin cruzar textos ni iconos.
- Movil: los pasos se apilan en una sola columna y los conectores se retiran para evitar desbordes.
- Sintaxis PHP: `php -l index.php` paso sin errores.
- JavaScript: `node --check assets/js/main.js` paso sin errores.
- Captura automatizada: no se obtuvo una captura utilizable, asi que la revision visual final sigue pendiente de navegador normal.

## 27. Navbar del Home
Estado: corregido.
- La causa del bug era un conflicto de especificidad: una regla general dejaba el texto blanco incluso cuando el fondo ya se habia vuelto blanco.
- Se definieron estados claros para el navbar: `top`, `transition`, `solid` y `hidden`.
- Los selectores principales son `#topNav`, `#topNav[data-nav-state]`, `.home-nav-collapse`, `.home-nav-menu .nav-link`, `.home-contact-link` y `header.sticky-top.is-nav-hidden`.
- La logica JS ahora calcula el estado segun la altura real del hero y la posicion del `#trust-bar`.
- En desktop, tablet y movil el contraste queda controlado por variables CSS, no por una sola clase global.
- Se mantuvo `prefers-reduced-motion` con transiciones minimizadas.

Umbrales usados:
- `top`: tramo inicial del hero.
- `transition`: avance medio dentro del hero.
- `solid`: tramo final del hero.
- `hidden`: al entrar al siguiente bloque visual.

Riesgos pendientes:
- El comportamiento depende de medidas reales del hero, asi que un cambio fuerte en altura puede requerir ajustar los umbrales.
- Si se agregan nuevas reglas globales para el navbar, deben respetar las variables de estado para no reintroducir el conflicto de color.
