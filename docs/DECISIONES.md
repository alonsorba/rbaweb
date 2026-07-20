# Decisiones técnicas

## 2026-07-20 - Base del proyecto

### 1. Rama de trabajo

Se utilizó `feature/base-project` para respetar la convención solicitada y aislar la base del sitio.

### 2. Bootstrap 5.3.3

Se integró Bootstrap 5.3.3 por CDN temporal en esta fase inicial para poder validar rápidamente la base visual sin introducir más dependencias.

### 3. Montserrat

La tipografía Montserrat se carga desde un recurso externo temporal porque el repositorio todavía no contiene archivos oficiales licenciados.

### 4. Logotipo

Se conserva el archivo oficial ya presente en el repositorio y no se reconstruye con texto ni se altera su identidad.

### 5. Carpeta de temporales

Se creó `assets/img/temporary/` para separar recursos provisionales de los definitivos y facilitar limpieza posterior.

### 6. Variante de logotipo para cabecera

Se eligió `assets/img/R BAIDON V3 RGB (WEB).png` para la cabecera porque su proporción horizontal encaja mejor en el espacio disponible sin reconstruir ni alterar el archivo oficial.
