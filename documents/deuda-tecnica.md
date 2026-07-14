# Deuda tecnica RBA Web

## Alta

### 1. CSS global demasiado grande
- Problema: `assets/css/style.css` concentra estilos globales, estilos de secciones, responsive y variaciones de componentes.
- Impacto: un cambio pequeno puede romper varias paginas a la vez.
- Prioridad: alta.
- Recomendacion: dividir por capas o por grupos de componentes, manteniendo un archivo base comun.

### 2. Duplicacion de estructura entre paginas
- Problema: header, footer y parte de la composicion se repiten en cada archivo PHP.
- Impacto: mantenimiento alto y riesgo de inconsistencias entre paginas.
- Prioridad: alta.
- Recomendacion: preparar includes compartidos para header y footer cuando el alcance lo permita.

### 3. Worktree con cambios ajenos persistentes
- Problema: existen archivos modificados o eliminados que no forman parte del bloque actual.
- Impacto: dificulta revisar diffs y aumenta el riesgo de mezclar trabajo no relacionado.
- Prioridad: alta.
- Recomendacion: aislar o documentar esos cambios antes de seguir con nuevas fases.

## Media

### 4. Nombres de assets no estandarizados
- Problema: varios archivos de imagen tienen espacios, acentos o nombres poco uniformes.
- Impacto: complica rutas, mantenimiento y una futura migracion a CMS.
- Prioridad: media.
- Recomendacion: definir una convencion de nombres y migrar por etapas.

### 5. JS del home con responsabilidades mezcladas
- Problema: `assets/js/main.js` combina scroll, reveal, conteos y carousel de soluciones.
- Impacto: dificulta localizar fallos y extender comportamientos.
- Prioridad: media.
- Recomendacion: separar la logica por modulos o por bloques funcionales.

### 6. Componentes visuales aun no formalizados
- Problema: `tile`, `glass-card`, `solution-card`, `testimonials-card`, `location-card` y otros comparten patrones, pero sin un inventario tecnico previo.
- Impacto: aumenta la posibilidad de duplicar estilos en futuras paginas.
- Prioridad: media.
- Recomendacion: usar el inventario de componentes como base de estandarizacion.

### 7. Preview local inestable
- Problema: el router local de preview ha mostrado problemas de disponibilidad y desaparicion del archivo en el worktree.
- Impacto: dificulta validaciones visuales confiables.
- Prioridad: media.
- Recomendacion: formalizar el entorno de preview o documentar claramente si es temporal.

## Baja

### 8. Documentacion con historia larga de normalizacion
- Problema: la documentacion arrastra muchas notas de fase y cambios acumulados.
- Impacto: ruido, pero no bloquea el sitio.
- Prioridad: baja.
- Recomendacion: cuando el proyecto lo permita, compactar o archivar estados intermedios.

### 9. Variaciones leves de espaciado entre secciones
- Problema: algunos bloques todavia dependen de ajustes finos de padding y margen.
- Impacto: visual, no funcional.
- Prioridad: baja.
- Recomendacion: estandarizar un sistema de espaciados por tipo de bloque.

### 10. Dependencia fuerte de Bootstrap en layout
- Problema: el layout depende bastante de utilidades Bootstrap junto con CSS personalizado.
- Impacto: aceptable hoy, pero puede generar sobreposicion de reglas.
- Prioridad: baja.
- Recomendacion: mantener Bootstrap como base y limitar overrides globales.

## Conclusiones
- La deuda mas importante no es funcional, sino estructural.
- El mayor riesgo de la siguiente fase es tocar paginas internas sin modularizar componentes comunes.
- Antes del rediseño profundo conviene consolidar inventario, includes y convenciones de assets.
