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

