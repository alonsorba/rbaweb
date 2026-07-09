# Plan de trabajo y documentación - Renovación RBA Web

## 1. Contexto del proyecto

La empresa cuenta actualmente con el sitio público `https://www.rbaidon.com.mx/` y se está trabajando en una renovación visual y estructural en conjunto con el Departamento de Comunicación.

El desarrollo será realizado en front-end usando:

- PHP
- HTML5
- Bootstrap 5.3.3
- CSS personalizado
- JavaScript vanilla
- Git y GitHub

El Departamento de Comunicación será responsable del diseño visual, lineamientos gráficos, textos, imágenes e indicaciones de experiencia visual. El área de codificación será responsable de convertir esos bocetos en una página funcional, responsiva, ordenada y mantenible.

En una etapa futura, cuando el sitio esté terminado, se contempla crear un gestor de contenido para que Comunicación pueda modificar textos, imágenes, secciones y elementos visuales sin entrar directamente al código.

---

## 2. Estado actual detectado

El proyecto actual se llama **RBA Web** y se encuentra en el repositorio:

```txt
https://github.com/alonsorba/rbaweb.git
```

Datos importantes del proyecto actual:

- Rama local actual: `main`.
- Rama remota principal: `origin/main`.
- Rama remota adicional detectada: `origin/main2`.
- La rama local `main` está 4 commits adelante de `origin/main`.
- El sitio ya cuenta con una base funcional y visualmente avanzada.
- El proyecto está organizado con páginas PHP independientes, no con framework MVC.
- Los archivos globales más delicados son `assets/css/style.css` y `assets/js/main.js`.

Archivos principales actuales:

```txt
index.php
servicios.php
servicio-cliente.php
quienes.php
ubicacion.php
aviso-privacidad.php
assets/css/style.css
assets/js/main.js
```

Riesgos técnicos identificados:

- Inconsistencias de codificación de caracteres.
- Exceso de estilos globales en un solo archivo CSS.
- Riesgo de romper clases, IDs o anclas ya utilizadas.
- Nombres de archivos multimedia largos o con espacios.
- Mezcla de contenido, estructura y presentación dentro de páginas PHP completas.

---

## 3. Objetivo general

Renovar el sitio web de R. Baidón siguiendo el boceto entregado por Comunicación, manteniendo un flujo de trabajo controlado, documentado y versionado en GitHub.

El resultado esperado es un sitio:

- Visualmente alineado al nuevo diseño.
- Responsivo para escritorio, tablet y móvil.
- Organizado por componentes reutilizables.
- Fácil de mantener.
- Preparado para evolucionar hacia un gestor de contenido.
- Publicable y estable para revisión interna.

---

## 4. Roles de trabajo

### Desarrollo / Codificación

Responsabilidades:

- Implementar estructura HTML/PHP.
- Adaptar estilos CSS y Bootstrap.
- Programar interacciones con JavaScript.
- Revisar responsividad.
- Subir avances al repositorio.
- Documentar cambios.
- Validar que cada entrega no rompa secciones previas.

### Departamento de Comunicación

Responsabilidades:

- Entregar bocetos actualizados.
- Definir textos finales.
- Proporcionar imágenes, íconos, logos y recursos visuales.
- Revisar fidelidad visual.
- Aprobar secciones terminadas.
- Indicar ajustes de diseño antes de avanzar a la siguiente fase.

---

## 5. Flujo de trabajo recomendado

Cada avance debe seguir este ciclo:

1. Revisar el boceto o indicación de Comunicación.
2. Definir el alcance exacto del cambio.
3. Generar prompt para Codex.
4. Ejecutar Codex sobre el proyecto.
5. Revisar la salida de Codex.
6. Probar localmente.
7. Corregir errores visuales o técnicos.
8. Hacer commit con mensaje claro.
9. Subir cambios al repositorio.
10. Compartir salida de Codex y capturas para seguimiento.
11. Registrar avance en este documento.

---

## 6. Reglas obligatorias para cada tarea en Codex

Cada prompt enviado a Codex debe incluir estas reglas:

```txt
Trabaja sobre el proyecto actual en PHP, HTML5, Bootstrap 5.3.3, CSS y JavaScript vanilla.
No cambies la estructura general del proyecto sin justificarlo.
No elimines secciones existentes sin indicarlo.
Antes de modificar clases globales, revisa si se usan en otras páginas.
Mantén compatibilidad responsive.
Evita duplicar CSS innecesario.
Cuida la codificación UTF-8 para acentos y caracteres especiales.
Al terminar, muestra un resumen de archivos modificados.
Indica posibles riesgos o pruebas pendientes.
Después de validar los cambios, sube el proyecto al repositorio correspondiente con un commit descriptivo de los cambios realizados.
```

Formato recomendado de commit:

```txt
feat: implementar seccion hero del home
fix: corregir responsividad de estadisticas
style: ajustar tarjetas de soluciones
refactor: organizar estilos globales del home
docs: actualizar documentacion del proyecto
```

---

## 7. Plan por fases

## Fase 0 - Preparación y control del repositorio

### Objetivo

Dejar el repositorio limpio, sincronizado y listo para trabajar con avances controlados.

### Actividades

- Revisar estado actual de Git.
- Confirmar si los 4 commits locales pendientes deben subirse a `origin/main`.
- Crear rama de trabajo para la renovación.
- Confirmar estructura de carpetas.
- Crear o actualizar documentación inicial.
- Verificar que el proyecto corra localmente.

### Entregable

Repositorio sincronizado y rama de trabajo creada.

### Tiempo sugerido

0.5 a 1 día.

### Prompt para Codex

```txt
Necesito preparar el repositorio del proyecto RBA Web para continuar la renovación del sitio de forma controlada.

Contexto:
- Proyecto en PHP, HTML5, Bootstrap 5.3.3, CSS y JavaScript vanilla.
- Repositorio: https://github.com/alonsorba/rbaweb.git
- Rama local actual: main.
- La rama local main está 4 commits adelante de origin/main.
- Existe una rama remota adicional origin/main2.

Tareas:
1. Revisa el estado de Git.
2. Indica si hay cambios pendientes o commits locales sin subir.
3. Recomienda una rama de trabajo para la renovación, por ejemplo: renovacion-home-2026.
4. No elimines ramas ni archivos.
5. Verifica la estructura principal del proyecto.
6. Crea o actualiza un archivo de documentación llamado PLAN-RENOVACION.md con el estado inicial del proyecto, riesgos detectados y flujo de trabajo.
7. Al finalizar, muestra:
   - archivos revisados;
   - archivos modificados;
   - comandos Git recomendados;
   - riesgos detectados.
8. Después de validar los cambios, sube el proyecto al repositorio correspondiente con un commit descriptivo de los cambios realizados.

Commit sugerido:
docs: preparar plan inicial de renovacion web
```

### Qué enviarme después de Codex

Enviar:

- Resumen que Codex entregó.
- Archivos modificados.
- Mensaje de commit usado.
- Captura del sitio si hubo cambios visibles.
- Errores o advertencias.

---

## Fase 1 - Auditoría técnica y visual del home actual

### Objetivo

Comparar el avance actual contra el boceto y detectar diferencias antes de seguir codificando.

### Actividades

- Revisar `index.php`.
- Revisar estilos del home en `assets/css/style.css`.
- Revisar interacciones en `assets/js/main.js`.
- Identificar secciones ya avanzadas.
- Detectar diferencias visuales contra el boceto.
- Separar problemas por prioridad.

### Entregable

Lista clara de ajustes pendientes por sección.

### Tiempo sugerido

1 día.

### Prompt para Codex

```txt
Necesito una auditoría técnica y visual del home actual del proyecto RBA Web.

Contexto:
- Proyecto en PHP, HTML5, Bootstrap 5.3.3, CSS y JavaScript vanilla.
- El home principal está en index.php.
- Los estilos principales están en assets/css/style.css.
- Las interacciones están en assets/js/main.js.
- Ya existe un avance visual basado en el primer boceto del Departamento de Comunicación.

Tareas:
1. Revisa index.php, assets/css/style.css y assets/js/main.js.
2. Identifica todas las secciones actuales del home.
3. Detecta problemas de estructura, responsividad, codificación de caracteres, clases globales y duplicación de estilos.
4. No realices cambios grandes todavía.
5. Si haces cambios, que sean únicamente correcciones menores y justificadas.
6. Genera una lista de pendientes dividida por:
   - urgente;
   - importante;
   - mejora visual;
   - mejora técnica;
   - pendiente de validación con Comunicación.
7. Actualiza PLAN-RENOVACION.md agregando la auditoría del home.
8. Al finalizar, muestra resumen de archivos modificados y pruebas sugeridas.
9. Después de validar los cambios, sube el proyecto al repositorio correspondiente con un commit descriptivo de los cambios realizados.

Commit sugerido:
docs: agregar auditoria tecnica y visual del home
```

### Qué enviarme después de Codex

Enviar la salida completa de Codex para revisar prioridades y decidir el siguiente prompt.

---

## Fase 2 - Normalización base: estructura, codificación y recursos

### Objetivo

Corregir la base técnica antes de seguir agregando secciones.

### Actividades

- Verificar UTF-8 en páginas PHP.
- Corregir textos con acentos mal renderizados.
- Revisar meta charset.
- Ordenar referencias a imágenes y videos.
- Detectar archivos multimedia con nombres problemáticos.
- Crear convenciones de nombres.

### Entregable

Base más estable para continuar desarrollo.

### Tiempo sugerido

1 a 2 días.

### Prompt para Codex

```txt
Necesito normalizar la base técnica del proyecto RBA Web antes de continuar con nuevas secciones.

Contexto:
- Proyecto front-end en PHP, HTML5, Bootstrap 5.3.3, CSS y JavaScript vanilla.
- Se detectaron posibles problemas de codificación de caracteres, por ejemplo acentos o palabras como Gestión, años o México.
- El proyecto usa páginas PHP independientes.

Tareas:
1. Revisa todas las páginas PHP principales:
   - index.php
   - servicios.php
   - servicio-cliente.php
   - quienes.php
   - ubicacion.php
   - aviso-privacidad.php
2. Verifica que todas usen meta charset UTF-8.
3. Corrige textos visibles con caracteres dañados.
4. Revisa que no se rompan rutas de imágenes, videos, CSS o JS.
5. Revisa nombres de recursos multimedia y señala cuáles convendría renombrar en una fase posterior.
6. No hagas rediseños visuales en esta fase.
7. Actualiza PLAN-RENOVACION.md con las correcciones realizadas y recomendaciones de nombres para assets.
8. Al finalizar, muestra archivos modificados, cambios realizados y pruebas pendientes.
9. Después de validar los cambios, sube el proyecto al repositorio correspondiente con un commit descriptivo de los cambios realizados.

Commit sugerido:
fix: normalizar codificacion y textos base del sitio
```

### Qué enviarme después de Codex

Enviar:

- Lista de textos corregidos.
- Archivos modificados.
- Cualquier ruta que Codex haya cambiado.
- Resultado de pruebas locales.

---

## Fase 3 - Hero principal y navegación

### Objetivo

Ajustar la primera impresión del sitio: menú, logo, hero, botones y comportamiento al hacer scroll.

### Actividades

- Ajustar header transparente/anclado.
- Cambiar menú a blanco o fondo según scroll.
- Alinear logo y enlaces.
- Mejorar hero principal.
- Revisar botones principales.
- Validar responsividad.

### Entregable

Hero y navegación listos para revisión con Comunicación.

### Tiempo sugerido

1 a 2 días.

### Prompt para Codex

```txt
Necesito ajustar el hero principal y la navegación del home de RBA Web con base en el boceto actual.

Contexto:
- Proyecto en PHP, HTML5, Bootstrap 5.3.3, CSS y JavaScript vanilla.
- El home está en index.php.
- El CSS principal está en assets/css/style.css.
- El JS principal está en assets/js/main.js.
- Comunicación indicó que conforme se haga scroll, el menú/header debe quedar anclado y cambiar a fondo blanco, similar al comportamiento de vastspace.com.

Tareas:
1. Revisa la estructura actual del header y hero.
2. Implementa o ajusta el header fijo/anclado al hacer scroll.
3. En estado inicial sobre el hero, el header debe integrarse visualmente con la imagen/video.
4. Al hacer scroll, el header debe cambiar a fondo blanco, con textos visibles y buena sombra o separación.
5. Ajusta logo, navegación y botones de contacto/acceso a usuarios.
6. Mejora la responsividad del hero en escritorio, tablet y móvil.
7. No modifiques secciones inferiores salvo que sea necesario para evitar conflictos.
8. Cuida que las clases globales no rompan otras páginas.
9. Actualiza PLAN-RENOVACION.md con el avance de esta fase.
10. Al finalizar, muestra archivos modificados, resumen técnico y pruebas pendientes.
11. Después de validar los cambios, sube el proyecto al repositorio correspondiente con un commit descriptivo de los cambios realizados.

Commit sugerido:
feat: ajustar hero principal y header con scroll
```

### Qué enviarme después de Codex

Enviar:

- Salida de Codex.
- Captura del hero en la parte superior.
- Captura del header después de hacer scroll.
- Archivos modificados.
- Commit realizado.

---

## Fase 4 - Estadísticas animadas

### Objetivo

Implementar o mejorar el bloque de estadísticas con sombra suave y conteo animado desde 0 hasta el número final.

### Actividades

- Crear contenedor con sombra.
- Ajustar espaciado y tipografía.
- Implementar animación de números.
- Activar animación al entrar en viewport.
- Evitar que la animación se repita de forma molesta.

### Entregable

Sección de estadísticas terminada y responsiva.

### Tiempo sugerido

0.5 a 1 día.

### Prompt para Codex

```txt
Necesito mejorar la sección de estadísticas del home de RBA Web.

Contexto:
- Proyecto en PHP, HTML5, Bootstrap 5.3.3, CSS y JavaScript vanilla.
- La sección muestra números como +150, +35 y +80.
- Comunicación indicó que debe existir un cuadro/contenedor con sombra suave y que los números aparezcan animados desde 0 hasta llegar a su valor final.

Tareas:
1. Localiza la sección de estadísticas en index.php.
2. Ajusta el diseño para que esté dentro de un contenedor blanco con bordes redondeados y sombra suave.
3. Implementa animación de conteo desde 0 hasta el valor final.
4. La animación debe ejecutarse cuando la sección entre en pantalla.
5. Evita que la animación se repita innecesariamente cada vez que se hace scroll.
6. Mantén compatibilidad responsive.
7. Usa JavaScript vanilla dentro de assets/js/main.js o en una función ordenada existente.
8. No rompas otras animaciones existentes.
9. Actualiza PLAN-RENOVACION.md con el avance de esta fase.
10. Al finalizar, muestra archivos modificados, resumen técnico y pruebas pendientes.
11. Después de validar los cambios, sube el proyecto al repositorio correspondiente con un commit descriptivo de los cambios realizados.

Commit sugerido:
feat: agregar estadisticas animadas en home
```

### Qué enviarme después de Codex

Enviar:

- Código o resumen de la función JS agregada.
- Captura del bloque.
- Prueba en móvil o responsive.
- Commit realizado.

---

## Fase 5 - Sección mapa y presencia nacional

### Objetivo

Ajustar la sección del mapa para que se vea completa, centrada y con interacción hover.

### Actividades

- Centrar mapa.
- Corregir proporciones.
- Alinear etiqueta de matriz.
- Mostrar mapa completo al hacer hover si se implementa interacción.
- Validar adaptación móvil.

### Entregable

Mapa funcional, proporcionado y visualmente alineado al boceto.

### Tiempo sugerido

1 a 2 días.

### Prompt para Codex

```txt
Necesito ajustar la sección del mapa de presencia nacional en el home de RBA Web.

Contexto:
- Proyecto en PHP, HTML5, Bootstrap 5.3.3, CSS y JavaScript vanilla.
- El home está en index.php.
- Comunicación indicó que al hacer hover sobre el mapa, este debe mostrarse completo en el centro.
- También se debe alinear correctamente la etiqueta 'Matriz en Ciudad Obregón, Sonora' y su línea indicadora.

Tareas:
1. Localiza la sección del mapa en index.php y sus estilos en assets/css/style.css.
2. Corrige tamaño, proporción y centrado del mapa.
3. Alinea correctamente la etiqueta de matriz con su punto/línea indicadora.
4. Implementa efecto hover si es viable sin afectar la experiencia móvil.
5. En móvil, evita depender solo de hover; usa una presentación estática o adaptada.
6. No deformes la imagen del mapa.
7. Mantén la sección responsiva en escritorio, tablet y móvil.
8. Actualiza PLAN-RENOVACION.md con el avance de esta fase.
9. Al finalizar, muestra archivos modificados, resumen técnico y pruebas pendientes.
10. Después de validar los cambios, sube el proyecto al repositorio correspondiente con un commit descriptivo de los cambios realizados.

Commit sugerido:
feat: ajustar mapa de presencia nacional
```

### Qué enviarme después de Codex

Enviar:

- Captura de escritorio.
- Captura móvil.
- Explicación del hover.
- Archivos modificados.
- Commit realizado.

---

## Fase 6 - Sección ESR y compromiso institucional

### Objetivo

Pulir la sección de Empresa Socialmente Responsable, el trofeo ESR y los valores relacionados.

### Actividades

- Alinear texto e imagen.
- Ajustar jerarquía tipográfica.
- Revisar iconos de valores.
- Corregir responsividad.

### Entregable

Sección ESR terminada para revisión visual.

### Tiempo sugerido

0.5 a 1 día.

### Prompt para Codex

```txt
Necesito pulir la sección ESR y compromiso institucional del home de RBA Web.

Contexto:
- Proyecto en PHP, HTML5, Bootstrap 5.3.3, CSS y JavaScript vanilla.
- La sección incluye texto sobre XV años de ser Empresa Socialmente Responsable, un trofeo ESR y valores como ética empresarial, cuidado del medio ambiente y bienestar social.

Tareas:
1. Localiza la sección ESR en index.php.
2. Ajusta alineación de texto, trofeo e insignias.
3. Mejora jerarquía visual de títulos y subtítulos.
4. Revisa que el trofeo no se corte ni se deforme.
5. Mantén una composición limpia en escritorio.
6. Crea una adaptación responsive correcta para tablet y móvil.
7. No cambies el contenido textual salvo errores ortográficos evidentes.
8. Actualiza PLAN-RENOVACION.md con el avance de esta fase.
9. Al finalizar, muestra archivos modificados, resumen técnico y pruebas pendientes.
10. Después de validar los cambios, sube el proyecto al repositorio correspondiente con un commit descriptivo de los cambios realizados.

Commit sugerido:
style: pulir seccion ESR del home
```

---

## Fase 7 - Sección compromiso y soluciones

### Objetivo

Consolidar la narrativa comercial del home y las tarjetas de soluciones.

### Actividades

- Ajustar sección de compromiso.
- Pulir tarjetas de soluciones.
- Revisar tabs o categorías.
- Corregir tamaño de íconos e imágenes.
- Evitar que las cards se vean cortadas.

### Entregable

Sección de soluciones funcional y lista para revisión.

### Tiempo sugerido

2 a 3 días.

### Prompt para Codex

```txt
Necesito consolidar la sección de compromiso y soluciones del home de RBA Web.

Contexto:
- Proyecto en PHP, HTML5, Bootstrap 5.3.3, CSS y JavaScript vanilla.
- El home incluye una sección de compromiso con imagen de personas y una sección de Soluciones con tarjetas por categoría.
- Las categorías principales son Empresas, Personas y Gestión Integral.

Tareas:
1. Revisa la sección de compromiso y la sección Soluciones en index.php.
2. Ajusta espaciados, jerarquía visual y alineación de la sección de compromiso.
3. Revisa las tarjetas de soluciones: tamaño, iconos, textos, botones y separación.
4. Asegura que las tarjetas sean responsivas y no se corten.
5. Si existen tabs o botones de categoría, valida que funcionen correctamente.
6. Mantén el diseño lo más fiel posible al boceto entregado por Comunicación.
7. No elimines soluciones existentes sin reportarlo.
8. Actualiza PLAN-RENOVACION.md con el avance de esta fase.
9. Al finalizar, muestra archivos modificados, resumen técnico y pruebas pendientes.
10. Después de validar los cambios, sube el proyecto al repositorio correspondiente con un commit descriptivo de los cambios realizados.

Commit sugerido:
feat: consolidar compromiso y soluciones del home
```

---

## Fase 8 - Proceso, testimonios, formulario y footer

### Objetivo

Terminar las secciones inferiores del home.

### Actividades

- Ajustar metodología/proceso.
- Pulir testimonios.
- Revisar formulario de contacto.
- Ajustar footer.
- Revisar enlaces y botones.

### Entregable

Home completo en versión revisable.

### Tiempo sugerido

2 a 3 días.

### Prompt para Codex

```txt
Necesito terminar y pulir las secciones inferiores del home de RBA Web.

Contexto:
- Proyecto en PHP, HTML5, Bootstrap 5.3.3, CSS y JavaScript vanilla.
- El home incluye secciones inferiores como proceso/metodología, testimonios, formulario de contacto y footer.

Tareas:
1. Revisa las secciones inferiores de index.php.
2. Ajusta la sección de proceso para que sea clara, ordenada y responsive.
3. Ajusta testimonios para que tengan buena legibilidad y distribución.
4. Revisa el formulario de contacto: campos, alineación, labels, botones y responsive.
5. Revisa footer: enlaces, logo, columnas y textos legales.
6. Valida que los botones y enlaces no estén rotos.
7. No conectes todavía el formulario a backend real, salvo que ya exista una integración actual.
8. Actualiza PLAN-RENOVACION.md con el avance de esta fase.
9. Al finalizar, muestra archivos modificados, resumen técnico y pruebas pendientes.
10. Después de validar los cambios, sube el proyecto al repositorio correspondiente con un commit descriptivo de los cambios realizados.

Commit sugerido:
feat: completar secciones inferiores del home
```

---

## Fase 9 - Responsividad general y pruebas visuales

### Objetivo

Validar que el home funcione correctamente en diferentes tamaños de pantalla.

### Actividades

- Revisar desktop grande.
- Revisar laptop.
- Revisar tablet.
- Revisar móvil.
- Corregir overflow horizontal.
- Validar imágenes y textos.

### Entregable

Home responsive y estable.

### Tiempo sugerido

1 a 2 días.

### Prompt para Codex

```txt
Necesito hacer una revisión responsive completa del home de RBA Web.

Contexto:
- Proyecto en PHP, HTML5, Bootstrap 5.3.3, CSS y JavaScript vanilla.
- El home ya tiene varias secciones implementadas y debe validarse en diferentes tamaños.

Tareas:
1. Revisa index.php, assets/css/style.css y assets/js/main.js.
2. Valida diseño en anchos aproximados:
   - 1440px
   - 1366px
   - 1024px
   - 768px
   - 430px
   - 390px
3. Corrige desbordamientos horizontales.
4. Ajusta tamaños de fuente, imágenes, cards y botones donde sea necesario.
5. Revisa que el menú móvil funcione correctamente.
6. Revisa que las animaciones no afecten el rendimiento en móvil.
7. No cambies la identidad visual general.
8. Actualiza PLAN-RENOVACION.md con resultados de pruebas responsive.
9. Al finalizar, muestra archivos modificados, resumen técnico y pruebas pendientes.
10. Después de validar los cambios, sube el proyecto al repositorio correspondiente con un commit descriptivo de los cambios realizados.

Commit sugerido:
fix: corregir responsividad general del home
```

---

## Fase 10 - Páginas internas

### Objetivo

Alinear las páginas internas con la nueva identidad visual del home.

### Actividades

- Revisar servicios.
- Revisar servicio al cliente.
- Revisar quiénes somos.
- Revisar ubicación.
- Revisar aviso de privacidad.
- Unificar header y footer.
- Reutilizar componentes.

### Entregable

Sitio completo coherente en diseño.

### Tiempo sugerido

4 a 6 días.

### Prompt para Codex

```txt
Necesito alinear las páginas internas de RBA Web con la nueva identidad visual del home.

Contexto:
- Proyecto en PHP, HTML5, Bootstrap 5.3.3, CSS y JavaScript vanilla.
- Las páginas internas principales son:
  - servicios.php
  - servicio-cliente.php
  - quienes.php
  - ubicacion.php
  - aviso-privacidad.php
- El home renovado debe servir como referencia visual.

Tareas:
1. Revisa cada página interna.
2. Identifica diferencias visuales contra el nuevo home.
3. Unifica header, footer, tipografía, colores, botones y espaciados.
4. Reutiliza componentes existentes cuando sea posible.
5. No elimines contenido importante.
6. Mantén URLs y anclas existentes salvo que sea necesario cambiarlas.
7. Revisa especialmente servicio-cliente.php porque puede tener muchos IDs y anclas internas.
8. Actualiza PLAN-RENOVACION.md con el avance de páginas internas.
9. Al finalizar, muestra archivos modificados, resumen técnico y pruebas pendientes.
10. Después de validar los cambios, sube el proyecto al repositorio correspondiente con un commit descriptivo de los cambios realizados.

Commit sugerido:
feat: alinear paginas internas con nueva identidad visual
```

---

## Fase 11 - Preparación para futuro gestor de contenido

### Objetivo

Dejar el código listo para que en el futuro se pueda crear un CMS o gestor de contenido sin rehacer todo el sitio.

### Actividades

- Identificar textos editables.
- Identificar imágenes editables.
- Separar datos repetitivos en arrays PHP cuando convenga.
- Documentar posibles campos del futuro CMS.
- Evitar hardcode innecesario en nuevas secciones.

### Entregable

Documento base para futuro gestor de contenido.

### Tiempo sugerido

1 a 2 días.

### Prompt para Codex

```txt
Necesito preparar el proyecto RBA Web para que en una fase futura pueda crearse un gestor de contenido para el Departamento de Comunicación.

Contexto:
- El sitio actualmente es front-end con PHP, HTML5, Bootstrap 5.3.3, CSS y JavaScript vanilla.
- Todavía no se debe crear el gestor de contenido.
- La intención futura es que Comunicación pueda editar textos, imágenes, servicios, testimonios y secciones sin tocar código.

Tareas:
1. Revisa el home y páginas internas.
2. Identifica qué contenido debería ser editable en un futuro CMS.
3. Sugiere una estructura de campos por sección.
4. Si es seguro, separa contenido repetitivo en arrays PHP simples sin cambiar el resultado visual.
5. No implementes base de datos ni panel administrativo todavía.
6. Crea o actualiza un archivo llamado CMS-FUTURO.md con:
   - secciones editables;
   - campos sugeridos;
   - tipos de datos;
   - prioridad de implementación;
   - riesgos técnicos.
7. Actualiza PLAN-RENOVACION.md con el resumen de preparación CMS.
8. Al finalizar, muestra archivos modificados, resumen técnico y pruebas pendientes.
9. Después de validar los cambios, sube el proyecto al repositorio correspondiente con un commit descriptivo de los cambios realizados.

Commit sugerido:
docs: documentar preparacion para futuro gestor de contenido
```

---

## Fase 12 - Cierre, QA y entrega interna

### Objetivo

Preparar el proyecto para revisión final interna y posible publicación.

### Actividades

- Revisar ortografía.
- Revisar enlaces.
- Revisar imágenes faltantes.
- Validar responsive.
- Validar rendimiento visual.
- Preparar checklist de entrega.
- Crear documentación de mantenimiento.

### Entregable

Versión candidata para aprobación interna.

### Tiempo sugerido

2 a 3 días.

### Prompt para Codex

```txt
Necesito preparar una revisión final de calidad del proyecto RBA Web antes de entrega interna.

Contexto:
- Proyecto en PHP, HTML5, Bootstrap 5.3.3, CSS y JavaScript vanilla.
- El sitio debe estar listo para revisión del Departamento de Comunicación y aprobación interna.

Tareas:
1. Revisa todo el sitio.
2. Detecta errores ortográficos visibles.
3. Revisa enlaces internos y botones.
4. Revisa rutas de imágenes, videos, CSS y JS.
5. Revisa responsividad general.
6. Revisa posibles errores en consola del navegador si puedes detectarlos.
7. No hagas rediseños grandes.
8. Corrige únicamente errores claros o mejoras menores de estabilidad.
9. Crea o actualiza CHECKLIST-QA.md con pruebas realizadas y pendientes.
10. Actualiza PLAN-RENOVACION.md con el cierre de QA.
11. Al finalizar, muestra archivos modificados, resumen técnico y pruebas pendientes.
12. Después de validar los cambios, sube el proyecto al repositorio correspondiente con un commit descriptivo de los cambios realizados.

Commit sugerido:
fix: realizar QA final del sitio renovado
```

---

## 8. Calendario sugerido

| Fase | Actividad | Duración sugerida |
|---|---:|---:|
| 0 | Preparación del repositorio | 0.5 - 1 día |
| 1 | Auditoría técnica y visual | 1 día |
| 2 | Normalización base | 1 - 2 días |
| 3 | Hero y navegación | 1 - 2 días |
| 4 | Estadísticas animadas | 0.5 - 1 día |
| 5 | Mapa y presencia nacional | 1 - 2 días |
| 6 | ESR y compromiso institucional | 0.5 - 1 día |
| 7 | Compromiso y soluciones | 2 - 3 días |
| 8 | Proceso, testimonios, formulario y footer | 2 - 3 días |
| 9 | Responsividad general | 1 - 2 días |
| 10 | Páginas internas | 4 - 6 días |
| 11 | Preparación para CMS futuro | 1 - 2 días |
| 12 | QA y entrega interna | 2 - 3 días |

Tiempo total estimado: **17.5 a 29 días hábiles**, dependiendo de la velocidad de aprobación de Comunicación y de la cantidad de cambios visuales solicitados.

---

## 9. Checklist de control por avance

Antes de cerrar cada fase, validar:

```txt
[ ] El cambio corresponde al boceto o indicación aprobada.
[ ] El sitio carga sin errores visibles.
[ ] No hay desbordamiento horizontal.
[ ] El diseño funciona en escritorio.
[ ] El diseño funciona en móvil.
[ ] No se rompieron páginas internas.
[ ] No se duplicó CSS innecesario.
[ ] No se dañaron acentos ni caracteres especiales.
[ ] Se actualizó la documentación correspondiente.
[ ] Se hizo commit descriptivo.
[ ] Se subió el cambio al repositorio.
[ ] Se guardó captura o evidencia visual.
```

---

## 10. Formato para reportarme avances de Codex

Después de cada ejecución en Codex, enviarme este formato:

```md
## Salida de Codex - Fase X

### Prompt usado
[Pegar prompt completo]

### Resumen entregado por Codex
[Pegar resumen]

### Archivos modificados
- archivo 1
- archivo 2

### Cambios principales
- cambio 1
- cambio 2

### Commit realizado
`tipo: descripcion del commit`

### Errores o advertencias
- error o advertencia 1

### Capturas
- escritorio
- móvil

### Duda o siguiente decisión
[Qué falta decidir]
```

---

## 11. Recomendaciones para trabajar con Codex sin gastar tantos tokens

- Usar prompts por fase, no pedir todo el sitio de una sola vez.
- Adjuntar solo los archivos necesarios para cada tarea.
- Pedir primero auditoría cuando no se tenga claro qué modificar.
- Evitar prompts largos con varias secciones no relacionadas.
- Pedir cambios pequeños y verificables.
- Solicitar siempre resumen de archivos modificados.
- Pedir que no reescriba todo el CSS si solo se necesita ajustar una sección.
- Mantener documentación actualizada para que Codex tenga contexto sin revisar todo el historial.

---

## 12. Convención de commits recomendada

```txt
feat: nueva funcionalidad o nueva sección
fix: corrección de error
style: ajuste visual sin cambiar funcionalidad
refactor: reorganización interna del código
docs: documentación
chore: mantenimiento del proyecto
```

Ejemplos:

```txt
feat: implementar hero principal renovado
style: ajustar tarjetas de soluciones
fix: corregir header sticky en movil
docs: actualizar plan de renovacion web
refactor: separar datos de soluciones en arrays php
```

---

## 13. Riesgos y controles

| Riesgo | Impacto | Control |
|---|---|---|
| Cambios globales rompen otras páginas | Alto | Revisar uso de clases antes de modificar CSS global |
| Codificación incorrecta de acentos | Medio | Validar UTF-8 en cada página |
| Boceto cambia durante desarrollo | Medio | Trabajar por fases aprobadas |
| Exceso de CSS duplicado | Medio | Reutilizar componentes y documentar estilos |
| Sitio no responsive | Alto | Validar cada fase en varios anchos |
| Recursos pesados afectan carga | Medio | Optimizar imágenes y videos en fase de QA |
| Futuro CMS requiere rehacer estructura | Alto | Documentar contenido editable desde ahora |

---

## 14. Próximo paso recomendado

El siguiente paso recomendado es ejecutar la **Fase 0 - Preparación y control del repositorio**.

Una vez Codex entregue su salida, se debe compartir:

- resumen de Codex;
- archivos modificados;
- estado de Git;
- commit realizado;
- errores o advertencias.

Con eso se podrá decidir si se continúa con la auditoría del home o si primero se sincroniza el repositorio remoto.
