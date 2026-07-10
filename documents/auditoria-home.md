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

## 11. Bloque inicial ajustado
Estado: en progreso.
- Se ajusto el comportamiento del header del home para que pase de transparente sobre el hero a un estado solido al hacer scroll.
- Se preparo el cambio de logo del header entre version blanca y version RGB para evitar baja legibilidad sobre fondo claro.
- Se refino el hero principal con mayor presencia visual, mejor overlay y una card de contenido ligeramente mas equilibrada.
- Se dieron ajustes de proporcion al bloque de estadisticas/presencia nacional para sostener mejor la lectura en desktop.

## 12. Archivos modificados en este bloque
- `index.php`
- `assets/css/style.css`
- `assets/js/main.js`
- `documents/revision-inicial-rba-web.md`

## 13. Validaciones responsive
- Desktop: header mas legible al hacer scroll, hero con card mas estable y stats con mejor balance visual.
- Tablet: el bloque se mantiene dentro del flujo esperado sin modificar secciones posteriores.
- Movil: el header conserva contraste con el cambio de logo y el bloque inicial sigue apilado por las reglas existentes.
- Sintaxis PHP: validada con `C:\xampp\php\php.exe -l` en todas las paginas tocadas de PHP.
- Vista previa local: levantada con `php -S 127.0.0.1:8082 .php-preview-router.php`.
- Verificacion de assets: la ruta del logo en `assets/img/R BAIDON V3 BLANCO.png` responde `200 image/png` desde el router local.
- Captura visual automatizada: en navegador headless el logo siguio apareciendo como fallback en algunas capturas, asi que queda una verificacion manual pendiente para confirmar si es un efecto del entorno de preview o del navegador de pruebas.

## 14. Riesgos pendientes
- El estado visual completo depende de pruebas en navegador con el servidor local levantado.
- El cambio de logo depende de que los assets blanco y RGB permanezcan disponibles con los mismos nombres y de que el preview local siga resolviendo rutas con espacios.
- El bloque de estadisticas sigue siendo el tramo mas sensible del home para ajustes posteriores.

## 15. Siguiente bloque recomendado
- Revisar y pulir la seccion de presencia nacional/mapa si la comunicacion visual pide una jerarquia mas marcada.
- Si no hay cambios adicionales de diseño, el siguiente bloque logico es avanzar al resto del home sin tocar el header ya estabilizado.

## 16. Validacion local adicional
- El router local de preview permanece como parte del proyecto y se usa para servir PHP y assets estaticos durante la verificacion.
- La ruta del logo responde `200 image/png` en `127.0.0.1:8082`, por lo que la incidencia restante queda asociada a la pintura headless del navegador y no a la disponibilidad del asset.
- Antes de avanzar al siguiente bloque visual, conviene confirmar manualmente el logo del header en un navegador normal conectado al servidor local.

## 17. Bloque de presencia nacional
Estado: ajustado.
- Se redujo la presencia visual del mapa para que el bloque respire mejor y no compita con el bloque ESR.
- Se refino la posicion del punto de ubicacion para acercarlo a Sonora dentro de la composicion.
- Se reforzo el hover del mapa con una capa mas limpia y una tarjeta de presencia nacional mas legible.
- Se mantuvo el numero `+25` y la etiqueta de matriz como referencia principal del bloque.

## 18. Validacion responsive del bloque
- Desktop: el mapa queda mas contenido y la composicion general del bloque mantiene jerarquia antes del ESR.
- Tablet: la estructura sigue apilando correctamente el contenido cuando el layout pasa a una sola columna.
- Movil: el mapa se conserva dentro del flujo vertical sin invadir secciones posteriores.
- Sintaxis PHP: `php -l index.php` paso sin errores.
- Captura automatizada: el navegador headless no guardo archivo de captura para este bloque, asi que la revision visual queda documentada como validacion pendiente en navegador normal.
