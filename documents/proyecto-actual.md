# Proyecto actual

## 1. Identificacion general
- Nombre del proyecto: RBA Web.
- Repositorio GitHub: `https://github.com/alonsorba/rbaweb.git`.
- Rama local actual: `main`.
- Rama remota principal: `origin/main`.
- Rama remota adicional detectada: `origin/main2`.
- Estado Git local: `main` esta `ahead 4` respecto a `origin/main`.

## 2. Alcance actual del proyecto
El proyecto es un sitio web corporativo desarrollado en PHP con paginas separadas por seccion. Su objetivo es presentar la oferta de seguros, fianzas, informacion institucional, ubicaciones, aviso de privacidad y atencion al cliente.

En el estado actual ya existe una base funcional y visualmente avanzada para:
- pagina de inicio con hero principal, estadisticas, compromiso institucional, soluciones, proceso, testimonios y contacto;
- pagina de servicios;
- pagina de servicio al cliente;
- pagina "quienes somos";
- pagina de ubicaciones;
- pagina de aviso de privacidad;
- estilos globales y comportamiento global compartido.

## 3. Que se ha hecho hasta ahora
Segun la documentacion del repo y el historial de Git, el trabajo realizado incluye:
- construccion del sitio en PHP sin framework MVC;
- integracion de Bootstrap 5.3.3 y Bootstrap Icons;
- desarrollo de CSS personalizado para identidad visual y componentes reutilizables;
- desarrollo de JavaScript vanilla para scroll, animaciones, revelado progresivo y soportes de UI;
- evolucion del home desde un carrusel hacia un hero con video e interacciones;
- ajustes de navbar, logo, footer y accesos;
- agrego de seccion de compromiso responsive;
- correcciones ortograficas y refinamiento de contenido;
- inclusion de contenido de prueba para servicio al cliente;
- definicion de avisos legales y paginas institucionales.

## 4. Tiempo invertido
No existe un registro de horas por tarea dentro del repositorio, asi que el tiempo invertido exacto no se puede calcular con precision.

Lo que si se puede afirmar a partir de Git es:
- primer commit visible en el historial revisado: `2025-12-23`;
- ultimo commit local visible en `HEAD`: `2026-07-02`;
- ventana temporal cubierta por el historial revisado: aproximadamente 192 dias calendario;
- commits alcanzables en `HEAD`: 40;
- refs totales alcanzables en el repositorio: 42.

Interpretacion practica:
- el proyecto ha tenido trabajo sostenido durante varios meses;
- si necesitas horas reales, hace falta un registro manual de tiempo o un sistema de tracking.

## 5. Tecnologias que se estan usando
Tecnologias y dependencias observables en el proyecto:
- PHP para renderizado de paginas y variables de sitio;
- HTML5 para la estructura;
- CSS personalizado para layout, identidad visual y animaciones;
- JavaScript vanilla para interaccion y comportamiento global;
- Bootstrap 5.3.3 para grid, componentes y base responsive;
- Bootstrap Icons para iconografia;
- Google Fonts con `Poppins`;
- recursos multimedia locales: imagenes, video MP4 y logos;
- Git y GitHub para control de versiones.

## 6. Estructura tecnica actual
El proyecto no usa un framework MVC. La organizacion actual es por paginas PHP completas.

Patron general:
- variables PHP al inicio de cada pagina;
- `<head>` con CDN de Bootstrap, icons y fuentes;
- contenido dentro de `<main>`;
- footer comun;
- scripts al final.

Archivos principales detectados:
- `index.php`
- `servicios.php`
- `servicio-cliente.php`
- `quienes.php`
- `ubicacion.php`
- `aviso-privacidad.php`
- `assets/css/style.css`
- `assets/js/main.js`

## 7. Fase del proyecto
El repositorio no tiene una division formal de fases documentada como modulo o archivo de plan. Sin embargo, por el historial de commits, el proyecto puede interpretarse en estas fases:

1. Base inicial del sitio.
2. Construccion visual y primeros carruseles/animaciones.
3. Ajustes de identidad visual y navbar.
4. Evolucion del home hacia un video institucional y animaciones de objetos.
5. Expansion de contenido institucional y refinamiento responsive.
6. Correccion de textos, pulido de UI y estabilizacion general.

Fase actual inferida:
- fase de estabilizacion, correccion y refinamiento de contenido/experiencia de usuario.

## 8. Situacion actual en GitHub
Estado actual del repositorio:
- repositorio remoto configurado: `origin` apuntando a `https://github.com/alonsorba/rbaweb.git`;
- rama principal remota: `origin/main`;
- rama remota adicional encontrada: `origin/main2`;
- rama local activa: `main`;
- estado relativo: `main` esta 4 commits adelante de `origin/main`.

Lectura del historial:
- `origin/main` contiene el punto de referencia principal del proyecto;
- la rama local `main` incluye correcciones ortograficas y ajustes posteriores;
- `origin/main2` aparece como una rama historica o alternativa relacionada con el carrusel.

## 9. Errores o dificultades detectadas
Problemas y riesgos observables:
- codificacion de caracteres inconsistente: se ven secuencias corruptas como `Gestion`, `anos` y `Mexico` mal renderizados en varias pantallas, lo que sugiere un problema UTF-8/ISO en el contenido o en la forma de servirlo;
- exceso de dependencias visuales en un solo archivo de estilos, lo que vuelve delicados los cambios globales;
- uso de muchos ids y anclas internas, especialmente en `servicio-cliente.php`, donde un cambio puede romper enlaces o accesibilidad;
- presencia de archivos multimedia con nombres largos o espacios, lo que complica mantenimiento y referencias;
- mezcla de contenido, estructura y presentacion en paginas PHP completas, lo que reduce la escalabilidad si el sitio crece.

## 10. Estado funcional actual
El sitio ya presenta:
- landing principal con narrativa comercial completa;
- secciones de conversion y contacto;
- contenido institucional;
- soporte y orientacion al usuario;
- informacion legal;
- experiencia responsive base;
- animaciones y transiciones personalizadas.

En otras palabras: el proyecto ya no esta en etapa de arranque, sino en una fase madura de ajuste y consolidacion.

## 11. Observaciones utiles para agentes de IA
Para que un agente de IA trabaje bien sobre este proyecto, conviene asumir lo siguiente:
- el codigo esta orientado a paginas PHP independientes, no a un framework;
- `style.css` y `main.js` son capas compartidas criticas;
- antes de cambiar clases o ids globales hay que revisar todo el sitio;
- la correccion de codificacion debe tratarse como prioridad tecnica;
- la documentacion futura deberia separar claramente contenido, UI, interaccion y mantenimiento.

## 12. Resumen corto
- Proyecto: sitio corporativo de RBA Seguros y Fianzas.
- Estado: funcional, avanzado y en fase de refinamiento.
- GitHub: `https://github.com/alonsorba/rbaweb.git`.
- Rama actual: `main`.
- Diferencia con remoto: `main` va 4 commits adelante de `origin/main`.
- Tiempo exacto: no registrado; historial visible entre `2025-12-23` y `2026-07-02`.
- Principal dificultad tecnica: codificacion de caracteres y mantenimiento de una base visual grande.

## 13. Actualizacion 2026-07-28
- Rama de trabajo activa: `feature/normalizacion-base`.
- Commit base mas reciente: `c107142` (`feat: ajustar altura de secciones del home`).
- El home ya quedo organizado como una secuencia completa: hero, indicadores, trust bar, ESR, compromiso, soluciones, por que nosotros, partners, testimonios, contacto y footer compartido.
- El footer paso a un include comun (`partials/footer.php`) y se reutiliza en las paginas principales.
- Las secciones del home usan una altura minima ligada al viewport (`100vh`/`100svh` menos la altura del header) y `scroll-margin-top` para mantener la navegacion por anclas limpia.
- La base responsive sigue en consolidacion y el worktree todavia contiene archivos nuevos sin rastrear en `assets/css/` y `assets/img/` como parte de la normalizacion visual.
