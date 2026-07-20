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
