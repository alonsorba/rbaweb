# Plan de trabajo - Renovación del sitio web de R. Baidón

**Proyecto:** Renovación integral de `https://www.rbaidon.com.mx/`  
**Responsable de desarrollo:** Área de TI / Desarrollo front-end  
**Responsable de diseño y contenidos:** Departamento de Comunicación  
**Stack obligatorio:** PHP, HTML5, Bootstrap 5.3.3, CSS3 y JavaScript  
**Alcance inicial:** Front-end desde cero  
**Evolución prevista:** Gestor de contenidos administrable por Comunicación  
**Objetivo visual:** Reproducir con la mayor fidelidad posible los diseños aprobados, respetando manual de marca, manual de identidad visual, contenidos, imágenes, proporciones y comportamiento responsive.

---

## 1. Objetivo general

Construir desde cero el nuevo sitio institucional de R. Baidón mediante un proceso ordenado, documentado, verificable y versionado. El desarrollo deberá:

- Reproducir fielmente los mockups aprobados.
- Mantener consistencia con la identidad de marca.
- Ser completamente responsive.
- Cumplir criterios básicos de accesibilidad, rendimiento, SEO técnico y mantenibilidad.
- Dejar una arquitectura preparada para integrar un gestor de contenidos en una segunda etapa.
- Registrar cada cambio en documentación Markdown y en Git.
- Subir cada avance al repositorio correspondiente mediante commits claros y trazables.

---

## 2. Fuentes oficiales del proyecto

Toda decisión de diseño y desarrollo deberá basarse en las siguientes fuentes, en este orden de prioridad:

1. Mockup o diseño aprobado más reciente.
2. Manual de Marca R. Baidón 2025.
3. Manual de Identidad Visual R. Baidón 2025.
4. Contenidos, imágenes y correcciones aprobadas por Comunicación.
5. Sitio actual, únicamente como referencia de contenido o funcionalidad, nunca como referencia visual final.

Cuando exista una contradicción entre fuentes, se debe registrar la discrepancia en `docs/DECISIONES.md` y solicitar validación antes de implementar.

---

## 3. Lineamientos de marca identificados

### 3.1 Colores base

Definir los siguientes colores como variables CSS desde el inicio:

```css
:root {
  --rb-blue-900: #0c3259;
  --rb-blue-500: #228bd1;
  --rb-blue-100: #daf2ff;
  --rb-neutral-050: #fafafa;
  --rb-white: #ffffff;
}
```

También se deberá crear una variable para el degradado corporativo, ajustada visualmente al manual y a cada mockup aprobado.

### 3.2 Tipografía

- Tipografía de interfaz, títulos y textos: **Montserrat**, utilizando sus variantes según la jerarquía visual.
- Linux Libertine se reserva para el logotipo oficial y no deberá reconstruirse con texto HTML.
- El logotipo deberá utilizarse como recurso gráfico oficial, sin deformarlo, recolorearlo, rotarlo ni alterar sus proporciones.

### 3.3 Estilo visual

- Personalidad: profesional, confiable y servicial.
- Uso predominante de fondos claros, azules corporativos, tarjetas blancas o gris muy claro.
- Esquinas redondeadas.
- Sombras suaves.
- Degradados corporativos.
- Recursos visuales 3D como apoyo, sin competir con el contenido principal.
- Fotografías luminosas, naturales, cercanas y profesionales.
- Posibilidad de usar glassmorphism solamente cuando esté respaldado por el diseño y no afecte legibilidad.

### 3.4 Tono de comunicación

- Formal, claro, cercano, humano, empático y respetuoso.
- Evitar lenguaje agresivo, excesivamente comercial, ambiguo o alarmista.
- Priorizar mensajes que transmitan acompañamiento, tranquilidad y experiencia.

---

## 4. Principios técnicos

### 4.1 Arquitectura inicial

Se propone una arquitectura PHP modular, sin framework de servidor en esta primera etapa:

```text
/
├── index.php
├── pages/
│   ├── empresas.php
│   ├── personas.php
│   ├── gestion-integral.php
│   ├── nosotros.php
│   ├── contacto.php
│   └── ...
├── includes/
│   ├── head.php
│   ├── header.php
│   ├── footer.php
│   ├── scripts.php
│   └── components/
├── assets/
│   ├── css/
│   │   ├── main.css
│   │   ├── variables.css
│   │   ├── utilities.css
│   │   ├── components.css
│   │   └── responsive.css
│   ├── js/
│   │   └── main.js
│   ├── img/
│   │   ├── brand/
│   │   ├── home/
│   │   ├── icons/
│   │   └── temporary/
│   └── fonts/
├── docs/
│   ├── PLAN_TRABAJO.md
│   ├── DOCUMENTACION_TECNICA.md
│   ├── BITACORA_CAMBIOS.md
│   ├── DECISIONES.md
│   ├── QA_VISUAL.md
│   ├── INVENTARIO_CONTENIDO.md
│   └── PREPARACION_CMS.md
├── .gitignore
├── README.md
└── composer.json (solo si posteriormente se requiere)
```

### 4.2 Reglas de implementación

- Usar HTML5 semántico.
- Usar Bootstrap 5.3.3 como base de grilla y utilidades.
- No depender exclusivamente de Bootstrap para reproducir el diseño.
- Crear CSS propio para componentes, estados, ajustes visuales y responsive.
- Evitar estilos inline, salvo casos excepcionales documentados.
- Evitar JavaScript innecesario.
- No introducir librerías externas sin justificación documentada.
- Reutilizar componentes PHP para encabezado, pie de página, botones, tarjetas y secciones repetitivas.
- Mantener nombres de clases consistentes, preferentemente con metodología BEM o una convención equivalente.
- Separar contenido, presentación y comportamiento tanto como sea posible.
- Preparar secciones repetibles para que posteriormente puedan alimentarse desde un CMS.

---

## 5. Criterios de fidelidad visual

La frase “parecerse al 100%” se convertirá en criterios verificables:

- Mismos bloques, orden y jerarquía del mockup.
- Proporciones equivalentes en escritorio, tableta y móvil.
- Tipografía, pesos, tamaños, interlineado y espaciado ajustados al diseño.
- Colores y degradados compatibles con la marca.
- Radios, bordes, sombras y fondos equivalentes.
- Imágenes con recorte, posición y escala correctos.
- Alineaciones horizontales y verticales precisas.
- Sin desbordamientos horizontales.
- Sin elementos cortados o encimados.
- Sin saltos visuales al cargar recursos.
- Interacciones, hover, foco y navegación coherentes.

### 5.1 Método de validación visual

Para cada sección:

1. Abrir el mockup y la implementación en el mismo tamaño de viewport.
2. Comparar por bloques: posición, ancho, alto, espaciado, tipografía e imágenes.
3. Registrar diferencias en `docs/QA_VISUAL.md`.
4. Corregir hasta cerrar las diferencias prioritarias.
5. Adjuntar capturas de evidencia cuando el flujo del repositorio lo permita.
6. No marcar una sección como finalizada sin validación de Comunicación.

Viewports mínimos de prueba:

- 375 x 812 px
- 430 x 932 px
- 768 x 1024 px
- 1024 x 768 px
- 1366 x 768 px
- 1440 x 900 px
- 1920 x 1080 px

---

## 6. Flujo de trabajo obligatorio

Cada tarea deberá seguir exactamente este ciclo:

1. **Recepción del diseño o requerimiento**
   - Identificar sección, contenido, recursos y comportamiento esperado.
   - Confirmar si el diseño está aprobado o es provisional.

2. **Análisis antes de codificar**
   - Revisar archivos existentes.
   - Detectar componentes reutilizables.
   - Identificar dependencias y riesgos.
   - Definir criterios de aceptación.

3. **Actualización del plan**
   - Registrar la tarea en `docs/PLAN_TRABAJO.md`.
   - Indicar estado, responsable, fecha, dependencias y entregable.

4. **Implementación**
   - Trabajar únicamente sobre el alcance solicitado.
   - No modificar secciones ajenas sin necesidad.
   - Mantener consistencia con la arquitectura y las variables de diseño.

5. **Pruebas**
   - Sintaxis PHP.
   - Validación visual.
   - Responsive.
   - Navegación.
   - Accesibilidad básica.
   - Consola del navegador sin errores.

6. **Documentación**
   - Actualizar `docs/BITACORA_CAMBIOS.md`.
   - Actualizar `docs/DOCUMENTACION_TECNICA.md` si cambió la arquitectura.
   - Actualizar `docs/DECISIONES.md` si hubo decisiones relevantes.
   - Actualizar `docs/PREPARACION_CMS.md` cuando se agreguen contenidos editables.
   - Actualizar el estado de la actividad en `docs/PLAN_TRABAJO.md`.

7. **Control de versiones**
   - Revisar `git status` y `git diff`.
   - Ejecutar pruebas disponibles.
   - Crear un commit específico y descriptivo.
   - Subir la rama al repositorio remoto.
   - No mezclar cambios sin relación en el mismo commit.

8. **Reporte de salida**
   - Resumir archivos modificados.
   - Informar pruebas realizadas.
   - Informar commit y rama.
   - Informar pendientes, limitaciones o diferencias visuales restantes.

---

## 7. Convención de ramas y commits

### 7.1 Ramas sugeridas

```text
main
└── develop
    ├── feature/base-project
    ├── feature/header-hero
    ├── feature/metrics
    ├── feature/presence-map
    ├── feature/esr
    ├── feature/solutions
    ├── feature/testimonials
    └── fix/responsive-header
```

Si el repositorio trabaja con una estrategia distinta, se deberá respetar la existente y documentarla.

### 7.2 Formato de commits

Usar Conventional Commits:

```text
feat: crea estructura inicial del sitio
feat: implementa hero principal responsive
fix: corrige alineación del indicador en mapa
style: ajusta tipografía y espaciado de testimonios
docs: actualiza plan de trabajo y bitácora
refactor: reutiliza componente de tarjetas de solución
chore: configura archivos base del proyecto
```

Cada prompt enviado a Codex debe exigir explícitamente:

- Actualizar documentación Markdown.
- Crear commit.
- Subir la rama al remoto configurado.
- Reportar hash o identificador corto del commit.
- No realizar `push --force`.
- No cambiar credenciales, configuración remota ni historial Git.

---

## 8. Documentación obligatoria

### 8.1 `README.md`

Debe incluir:

- Descripción del proyecto.
- Requisitos.
- Instalación local.
- Forma de ejecutar el proyecto.
- Estructura de carpetas.
- Convenciones.
- Flujo de ramas.
- Fuentes oficiales de diseño.

### 8.2 `docs/PLAN_TRABAJO.md`

Debe contener una tabla de seguimiento:

| ID | Fase | Tarea | Estado | Dependencias | Evidencia | Commit |
|---|---|---|---|---|---|---|
| WEB-001 | Base | Crear estructura inicial | Pendiente | Repositorio | - | - |

Estados permitidos:

- Pendiente
- En análisis
- En desarrollo
- En validación interna
- En revisión de Comunicación
- Aprobado
- Bloqueado

### 8.3 `docs/BITACORA_CAMBIOS.md`

Formato sugerido:

```markdown
## AAAA-MM-DD - WEB-XXX - Nombre de la tarea

### Cambios
- ...

### Archivos
- ...

### Pruebas
- ...

### Pendientes o riesgos
- ...

### Git
- Rama: ...
- Commit: ...
```

### 8.4 `docs/DECISIONES.md`

Registrar decisiones como:

- Motivo de una solución técnica.
- Diferencia entre mockup y comportamiento responsive.
- Sustitución temporal de un recurso.
- Dependencia externa aprobada.
- Cambio solicitado por Comunicación.

### 8.5 `docs/QA_VISUAL.md`

Por cada sección:

- Mockup de referencia.
- Viewports probados.
- Diferencias detectadas.
- Correcciones realizadas.
- Estado de aprobación.

### 8.6 `docs/PREPARACION_CMS.md`

Para cada sección, registrar:

- Campos editables.
- Tipo de contenido.
- Validaciones.
- Orden de elementos.
- Límites de caracteres.
- Imágenes requeridas y proporciones.
- Elementos fijos y no editables.
- Reglas de publicación.

---

## 9. Fases del proyecto

## Fase 0 - Preparación y gobierno del proyecto

**Objetivo:** Crear una base de trabajo controlada antes de comenzar la maquetación.

### Tareas

- WEB-001 Crear o validar repositorio.
- WEB-002 Definir estrategia de ramas.
- WEB-003 Crear estructura documental.
- WEB-004 Inventariar mockups, manuales, logos, fotografías, iconos y contenidos.
- WEB-005 Registrar recursos faltantes o provisionales.
- WEB-006 Definir proceso de aprobación con Comunicación.

### Entregables

- Repositorio funcional.
- Documentación base.
- Inventario de recursos.
- Lista de faltantes.

### Criterio de cierre

No iniciar el desarrollo visual sin tener repositorio, documentación, manuales y mockups organizados.

---

## Fase 1 - Base técnica y sistema visual

**Objetivo:** Crear el proyecto PHP y los fundamentos reutilizables.

### Tareas

- WEB-010 Crear estructura de carpetas.
- WEB-011 Configurar Bootstrap 5.3.3.
- WEB-012 Crear includes PHP base.
- WEB-013 Crear variables CSS de marca.
- WEB-014 Configurar tipografía Montserrat.
- WEB-015 Crear utilidades de espaciado, contenedores, botones y tarjetas.
- WEB-016 Crear navegación base y footer reutilizable.
- WEB-017 Documentar ejecución local.

### Entregables

- Proyecto ejecutable.
- Layout base.
- Sistema visual inicial.
- Documentación técnica.

### Criterio de cierre

El sitio debe cargar sin errores PHP ni errores de consola y mostrar un layout base responsive.

---

## Fase 2 - Página de inicio por secciones

Cada sección se deberá implementar y aprobar por separado.

### Orden sugerido

- WEB-020 Header y navegación.
- WEB-021 Hero principal.
- WEB-022 Indicadores: empresas, años y colaboradores.
- WEB-023 Presencia nacional y mapa.
- WEB-024 Empresa Socialmente Responsable.
- WEB-025 Compromiso de servicio.
- WEB-026 Soluciones y selector de categoría.
- WEB-027 Por qué nosotros.
- WEB-028 Aseguradoras asociadas.
- WEB-029 Testimonios.
- WEB-030 Selector de solución o formulario guiado.
- WEB-031 Footer y llamada a la acción fija o contextual.

### Criterio de cierre por sección

- Fidelidad visual aprobada.
- Responsive validado.
- Accesibilidad básica validada.
- Documentación actualizada.
- Commit y push realizados.

---

## Fase 3 - Páginas internas y navegación

### Tareas

- WEB-040 Empresas.
- WEB-041 Personas.
- WEB-042 Gestión Integral.
- WEB-043 Nosotros.
- WEB-044 Contacto.
- WEB-045 Preguntas frecuentes.
- WEB-046 Aviso de privacidad.
- WEB-047 Acceso a usuarios o enlace al portal correspondiente.
- WEB-048 Páginas de detalle de coberturas.
- WEB-049 Estados 404 y errores básicos.

### Criterio de cierre

Todos los enlaces deben funcionar y no deben existir páginas huérfanas o rutas rotas.

---

## Fase 4 - Responsive, accesibilidad y rendimiento

### Tareas

- WEB-050 Auditoría responsive completa.
- WEB-051 Navegación con teclado.
- WEB-052 Estados de foco visibles.
- WEB-053 Contraste de color.
- WEB-054 Textos alternativos.
- WEB-055 Jerarquía de encabezados.
- WEB-056 Optimización de imágenes.
- WEB-057 Lazy loading donde corresponda.
- WEB-058 Reducción de CSS y JS innecesario.
- WEB-059 Revisión de Core Web Vitals como referencia.

### Criterio de cierre

- Sin errores críticos de accesibilidad.
- Sin desbordamiento horizontal.
- Sin recursos excesivamente pesados sin justificar.
- Sin errores de consola.

---

## Fase 5 - SEO técnico y analítica

### Tareas

- WEB-060 Títulos y descripciones por página.
- WEB-061 Etiquetas Open Graph.
- WEB-062 URLs canónicas cuando aplique.
- WEB-063 `robots.txt`.
- WEB-064 `sitemap.xml`.
- WEB-065 Datos estructurados básicos.
- WEB-066 Favicon e iconos.
- WEB-067 Integración de analítica aprobada.
- WEB-068 Política de cookies si aplica.

---

## Fase 6 - Control de calidad y aprobación

### Tareas

- WEB-070 Revisión visual final contra mockups.
- WEB-071 Prueba de navegadores.
- WEB-072 Prueba de dispositivos.
- WEB-073 Revisión de textos y ortografía por Comunicación.
- WEB-074 Revisión de enlaces y formularios.
- WEB-075 Corrección de incidencias.
- WEB-076 Aprobación formal.

### Navegadores mínimos

- Google Chrome.
- Microsoft Edge.
- Firefox.
- Safari móvil, cuando haya dispositivo disponible.

---

## Fase 7 - Publicación

### Tareas

- WEB-080 Preparar ambiente de staging.
- WEB-081 Publicar versión de revisión.
- WEB-082 Ejecutar checklist preproducción.
- WEB-083 Crear respaldo del sitio anterior.
- WEB-084 Publicar en producción.
- WEB-085 Ejecutar pruebas posteriores a publicación.
- WEB-086 Registrar versión liberada.

### Checklist de publicación

- Dominio y SSL correctos.
- Rutas y recursos correctos.
- Formularios probados.
- Enlaces externos probados.
- Analítica probada.
- `robots.txt` y sitemap revisados.
- Sin contenido provisional.
- Sin imágenes temporales.
- Sin datos sensibles en el repositorio.

---

## Fase 8 - Preparación para gestor de contenidos

**Objetivo:** Evitar que la versión final del front-end quede acoplada a contenido fijo imposible de administrar.

### Desde el inicio se debe:

- Separar componentes de su contenido.
- Evitar repetir bloques HTML innecesariamente.
- Identificar contenidos editables.
- Mantener nombres de campos consistentes.
- Definir límites de texto e imagen.
- Usar estructuras de datos PHP cuando una sección sea repetitiva.
- Documentar elementos que podrán ordenarse, ocultarse o publicarse.

### Módulos potenciales del CMS

- Hero principal.
- Indicadores.
- Presencia nacional.
- Soluciones y coberturas.
- Beneficios o “Por qué nosotros”.
- Aseguradoras.
- Testimonios.
- Preguntas frecuentes.
- Información de contacto.
- Menús y footer.
- Páginas informativas.
- Metadatos SEO.

### Requisitos funcionales futuros

- Autenticación y roles.
- Panel administrativo.
- Carga y optimización de imágenes.
- Borradores y publicación.
- Historial de cambios.
- Validación de campos.
- Vista previa.
- Respaldo de información.
- Registro de auditoría.

La tecnología del CMS no se decidirá hasta concluir el inventario de contenido, permisos, infraestructura y mantenimiento.

---

## 10. Matriz de responsabilidades

| Actividad | TI / Desarrollo | Comunicación | Dirección / Aprobador |
|---|---:|---:|---:|
| Arquitectura técnica | Responsable | Consultado | Informado |
| Diseño visual | Consultado | Responsable | Aprobador |
| Contenidos y ortografía | Consultado | Responsable | Aprobador cuando aplique |
| Implementación | Responsable | Consultado | Informado |
| QA visual | Responsable | Responsable | Informado |
| Aprobación de sección | Consultado | Responsable | Aprobador cuando aplique |
| Publicación | Responsable | Validación | Autorización |
| Definición de CMS | Responsable técnico | Responsable funcional | Aprobador |

---

## 11. Riesgos y controles

| Riesgo | Impacto | Control |
|---|---|---|
| Mockups cambian durante desarrollo | Retrabajo | Versionar diseños y aprobar por sección |
| Imágenes o logos no definitivos | Baja fidelidad | Usar carpeta `temporary` y registrar faltantes |
| Contenido más largo que el mockup | Ruptura de layout | Definir límites y probar contenido real |
| Codex modifica archivos no solicitados | Regresión | Exigir alcance limitado y revisar diff |
| Commits mezclan múltiples tareas | Baja trazabilidad | Un commit por unidad lógica |
| Falta de push al repositorio | Pérdida de avance | Incluir push en todos los prompts |
| Dependencia excesiva de valores fijos | Mala respuesta responsive | Usar sistema fluido y breakpoints razonados |
| Sitio difícil de convertir a CMS | Retrabajo futuro | Documentar campos y separar contenido desde el inicio |
| Diferencias entre diseño y navegador | Retrabajo visual | QA por viewport y comparación sistemática |
| Credenciales en código | Riesgo de seguridad | `.gitignore`, variables de entorno y revisión antes del commit |

---

## 12. Formato estándar para solicitudes a Codex

Todo prompt futuro deberá contener:

1. Contexto del proyecto.
2. ID y nombre de tarea.
3. Archivos o secciones afectadas.
4. Referencia visual.
5. Requisitos funcionales.
6. Requisitos responsive.
7. Restricciones técnicas.
8. Criterios de aceptación.
9. Pruebas requeridas.
10. Documentación que debe actualizarse.
11. Instrucciones Git: rama, commit y push.
12. Formato exacto de la respuesta.

---

# 13. Prompt inicial para Codex

Copiar el siguiente bloque en Codex. Reemplazar únicamente los datos marcados entre corchetes cuando sea necesario.

```text
Actúa como desarrollador front-end senior responsable de iniciar desde cero el nuevo sitio web institucional de R. Baidón.

CONTEXTO DEL PROYECTO
- Sitio actual de referencia: https://www.rbaidon.com.mx/
- El proyecto será una renovación completa y el diseño visual será proporcionado por el Departamento de Comunicación.
- El desarrollo inicial es exclusivamente front-end.
- Tecnologías obligatorias: PHP, HTML5 semántico, Bootstrap 5.3.3, CSS3 y JavaScript vanilla.
- En una segunda etapa el sitio deberá integrarse con un gestor de contenidos para que Comunicación pueda actualizar contenidos sin editar código.
- El resultado visual debe reproducir con máxima fidelidad los mockups aprobados. No improvises estilos que contradigan los diseños, el manual de marca o el manual de identidad visual.

FUENTES OFICIALES
Usa como prioridad:
1. Mockups e imágenes de referencia disponibles en el proyecto.
2. Manual de Marca R. Baidón 2025.
3. Manual de Identidad Visual R. Baidón 2025.
4. Recursos y contenidos aprobados por Comunicación.

LINEAMIENTOS VISUALES BASE
- Color principal: #0c3259.
- Azul secundario: #228bd1.
- Azul claro: #daf2ff.
- Fondo claro: #fafafa.
- Blanco: #ffffff.
- Tipografía de interfaz: Montserrat en las variantes necesarias.
- El logotipo debe utilizarse como archivo oficial; no debe reconstruirse con texto, deformarse, recolorearse o alterarse.
- La identidad debe sentirse profesional, confiable, servicial, moderna y humana.
- Prioriza esquinas redondeadas, sombras suaves, fondos limpios y degradados corporativos solo cuando correspondan al diseño.

TAREA WEB-001 - CREAR BASE DEL PROYECTO

Antes de modificar archivos:
1. Inspecciona el repositorio completo.
2. Verifica si existe una arquitectura previa, documentación, configuración Git o archivos que deban conservarse.
3. Ejecuta `git status` y registra la rama actual.
4. No borres ni sobrescribas trabajo existente sin justificación.
5. Si el repositorio no tiene remoto configurado o no permite hacer push, no inventes credenciales ni cambies el remoto; documenta el bloqueo al final.

OBJETIVO
Crear la estructura inicial y mantenible del proyecto, lista para comenzar la implementación visual por secciones.

REQUISITOS TÉCNICOS
1. Crear una base PHP modular con archivos reutilizables para `head`, `header`, `footer` y scripts.
2. Configurar Bootstrap 5.3.3.
3. Crear `index.php` funcional.
4. Crear la estructura base:
   - `pages/`
   - `includes/`
   - `includes/components/`
   - `assets/css/`
   - `assets/js/`
   - `assets/img/brand/`
   - `assets/img/home/`
   - `assets/img/icons/`
   - `assets/img/temporary/`
   - `assets/fonts/`
   - `docs/`
5. Crear como mínimo:
   - `assets/css/variables.css`
   - `assets/css/main.css`
   - `assets/css/components.css`
   - `assets/css/responsive.css`
   - `assets/js/main.js`
   - `includes/head.php`
   - `includes/header.php`
   - `includes/footer.php`
   - `includes/scripts.php`
   - `.gitignore`
   - `README.md`
6. Definir en `variables.css` los colores oficiales indicados y variables para tipografía, espaciados, radios, sombras, contenedores y breakpoints de referencia.
7. Preparar la carga de Montserrat de forma adecuada. Si los archivos oficiales no están disponibles, usa una alternativa temporal claramente documentada y no agregues archivos de fuente sin licencia.
8. Crear un layout mínimo visible que permita comprobar que PHP, Bootstrap, CSS y JS cargan correctamente. Este layout no debe intentar completar todavía todas las secciones del home.
9. Usar HTML5 semántico y buenas prácticas básicas de accesibilidad.
10. No agregar frameworks, sliders, icon packs o dependencias no solicitadas.
11. No colocar credenciales, tokens, rutas locales personales ni secretos en el repositorio.

DOCUMENTACIÓN OBLIGATORIA
Crea y completa:
- `docs/PLAN_TRABAJO.md`
- `docs/DOCUMENTACION_TECNICA.md`
- `docs/BITACORA_CAMBIOS.md`
- `docs/DECISIONES.md`
- `docs/QA_VISUAL.md`
- `docs/INVENTARIO_CONTENIDO.md`
- `docs/PREPARACION_CMS.md`

En `docs/PLAN_TRABAJO.md`:
- Registra la tarea WEB-001.
- Marca su estado real.
- Incluye dependencias, evidencia y commit.
- Agrega las fases generales del proyecto: base, home por secciones, páginas internas, responsive/accesibilidad, SEO, QA, publicación y preparación para CMS.

En `docs/PREPARACION_CMS.md`:
- Explica que cada sección futura debe documentar campos editables, límites, imágenes, orden, visibilidad y reglas de publicación.

En `README.md` documenta:
- Objetivo.
- Tecnologías.
- Requisitos locales.
- Cómo ejecutar el proyecto con el servidor integrado de PHP.
- Estructura de carpetas.
- Convención de ramas y commits.
- Ubicación de los manuales y mockups.

CRITERIOS DE ACEPTACIÓN
- `index.php` carga correctamente desde un servidor PHP local.
- Bootstrap 5.3.3, CSS y JS se cargan sin errores.
- No hay errores PHP visibles.
- No hay errores de consola causados por la base creada.
- El layout inicial es responsive y no genera desplazamiento horizontal.
- La estructura está preparada para componentes reutilizables.
- Todos los archivos Markdown solicitados existen y contienen información útil, no plantillas vacías.
- La documentación refleja exactamente los cambios ejecutados.

PRUEBAS
- Ejecuta validación de sintaxis PHP en todos los archivos PHP creados o modificados.
- Revisa enlaces locales a CSS, JS e imágenes.
- Comprueba el estado responsive básico.
- Revisa que no existan archivos temporales, credenciales o recursos innecesarios en el commit.

GIT OBLIGATORIO
1. Trabaja en una rama llamada `feature/base-project`, salvo que la estrategia existente del repositorio indique otra cosa; en ese caso respeta la convención existente y explica la decisión.
2. Revisa el diff antes de confirmar.
3. Crea un commit con un mensaje equivalente a:
   `feat: crea estructura inicial del sitio web`
4. Incluye en el mismo commit la documentación relacionada con esta tarea.
5. Sube la rama al repositorio remoto configurado mediante push normal.
6. No uses `push --force`.
7. No reescribas el historial.
8. Si no puedes crear la rama, confirmar o subir los cambios, conserva el trabajo local y reporta exactamente el motivo.

FORMATO DE RESPUESTA FINAL
Entrega un reporte con estas secciones:
1. Análisis inicial del repositorio.
2. Estructura creada.
3. Archivos creados o modificados.
4. Decisiones técnicas.
5. Pruebas ejecutadas y resultado.
6. Documentación actualizada.
7. Estado Git:
   - rama
   - commit
   - hash corto
   - resultado del push
8. Pendientes, bloqueos o recursos faltantes.

No afirmes que una prueba, commit o push fue realizado si no se ejecutó realmente.
```

---

## 14. Plantilla de prompt para cada sección posterior

```text
Actúa como desarrollador front-end senior del nuevo sitio de R. Baidón.

TAREA: [ID] - [NOMBRE]

CONTEXTO
[Explicar la sección y su relación con el sitio.]

REFERENCIAS
- Mockup: [archivo o captura]
- Manual de marca: [secciones aplicables]
- Recursos: [imágenes, logos, iconos]

OBJETIVO
[Resultado visual y funcional esperado.]

ALCANCE
- Archivos permitidos: [...]
- Componentes afectados: [...]
- No modificar: [...]

REQUISITOS VISUALES
- Reproducir fielmente composición, proporciones, tipografía, colores, radios, sombras, imágenes y espaciado.
- No reinterpretar el diseño sin documentar la razón.
- Usar las variables y componentes existentes.

REQUISITOS RESPONSIVE
- Definir comportamiento para móvil, tableta y escritorio.
- Evitar valores rígidos que provoquen desbordamientos.
- Probar al menos en 375, 768, 1366 y 1920 px de ancho.

REQUISITOS TÉCNICOS
[Interacciones, semántica, accesibilidad, PHP, Bootstrap, CSS y JS.]

PREPARACIÓN PARA CMS
Documenta en `docs/PREPARACION_CMS.md`:
- campos editables;
- tipo de campo;
- límites de caracteres;
- proporción y tamaño de imágenes;
- orden y visibilidad;
- elementos fijos.

CRITERIOS DE ACEPTACIÓN
- [...]

PRUEBAS
- Validación PHP.
- Consola sin errores.
- Responsive.
- Navegación por teclado si aplica.
- Comparación visual contra el mockup.

DOCUMENTACIÓN OBLIGATORIA
Actualiza:
- `docs/PLAN_TRABAJO.md`
- `docs/BITACORA_CAMBIOS.md`
- `docs/QA_VISUAL.md`
- `docs/DECISIONES.md`, si aplica
- `docs/DOCUMENTACION_TECNICA.md`, si aplica
- `docs/PREPARACION_CMS.md`

GIT OBLIGATORIO
- Crea o usa la rama: `[rama]`.
- Revisa `git status` y `git diff`.
- Crea un commit específico: `[tipo]: [descripción]`.
- Sube la rama al remoto configurado.
- No uses `push --force`.
- Reporta rama, hash corto y resultado del push.
- No afirmes que el commit o push se realizó si no fue ejecutado realmente.

FORMATO DE RESPUESTA
1. Resumen.
2. Archivos modificados.
3. Implementación realizada.
4. Ajustes responsive.
5. Pruebas.
6. Documentación.
7. Rama, commit, hash y push.
8. Diferencias restantes respecto al mockup.
9. Pendientes o bloqueos.
```

---

## 15. Formato para dar seguimiento con la salida de Codex

Después de ejecutar cada prompt, compartir la salida completa de Codex para revisar:

- Si cumplió el alcance.
- Si modificó archivos no solicitados.
- Si las pruebas fueron reales.
- Si actualizó todos los Markdown requeridos.
- Si el commit representa una sola unidad lógica.
- Si el push fue exitoso.
- Si existen diferencias visuales o técnicas pendientes.

La revisión deberá producir una de estas decisiones:

- **Aprobado para revisión visual.**
- **Requiere corrección técnica.**
- **Requiere corrección visual.**
- **Requiere información o recursos.**
- **Bloqueado por dependencia externa.**

---

## 16. Definición de terminado

Una tarea se considera terminada únicamente cuando:

- Cumple sus criterios de aceptación.
- No presenta errores conocidos dentro de su alcance.
- Fue probada en los viewports definidos.
- Fue comparada contra el diseño.
- La documentación fue actualizada.
- Tiene commit específico.
- La rama fue subida al repositorio.
- Comunicación validó el resultado visual cuando corresponda.
- Los pendientes o diferencias fueron cerrados o formalmente aceptados.

---

## 17. Próximo paso recomendado

1. Guardar este documento como `docs/PLAN_TRABAJO.md` en el repositorio.
2. Organizar los manuales, mockups, logotipos e imágenes en una ubicación de referencia del proyecto.
3. Ejecutar el **Prompt inicial para Codex**.
4. Compartir la salida completa de Codex para revisión.
5. Continuar con WEB-020: Header y navegación, o con la primera sección que Comunicación declare aprobada.
