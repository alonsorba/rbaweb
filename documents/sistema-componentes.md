# Sistema de componentes RBA Web

## Proposito
Este inventario documenta los componentes visuales y funcionales que hoy existen en el sitio para facilitar estandarizacion, reutilizacion y futura preparacion para CMS.

## 1. Botones
### Donde se usan
- Home hero
- Navegacion principal
- Soluciones
- Proceso
- Contacto
- Hero de paginas internas

### Clases CSS
- `.btn`
- `.btn-primary`
- `.btn-outline-primary`
- `.btn-gradient`
- `.nav-access-btn`
- `.home-primary-btn`
- `.home-secondary-btn`
- `.services-solutions__control`
- `.services-solutions__pill`
- `.pill-highlight`

### Variantes
- CTA principal
- CTA secundario
- Boton de acceso
- Botones de categoria
- Botones de carrusel

### Reutilizacion
- Se pueden usar como base para nuevas landing pages, banners y acciones de contacto.
- Las variantes actuales ya cubren CTA comercial, navegacion y filtros.

### Preparacion para CMS
- Texto
- URL destino
- estado activo/inactivo
- orden de prioridad

## 2. Cards
### Donde se usan
- Home: hero, estadisticas, compromiso, soluciones, proceso, testimonios, contacto
- Paginas internas: servicios, quienes, ubicacion, aviso de privacidad, servicio al cliente

### Clases CSS
- `.tile`
- `.glass-card`
- `.solution-card`
- `.timeline-v2-step`
- `.testimonials-card`
- `.location-card`
- `.privacy-card`
- `.commitment-image-card`
- `.infographic-esr__placeholder`
- `.infographic-map__hover-card`

### Variantes
- Card simple
- Card premium / glass
- Card de servicio
- Card de proceso
- Card testimonial
- Card de ubicacion

### Reutilizacion
- Base clara para listas, bloques de info y secciones de conversion.
- Puede convertirse en un sistema reusable de tarjetas con menos duplicacion.

### Preparacion para CMS
- titulo
- subtitulo
- texto largo
- imagen
- icono
- orden
- estado visible

## 3. Badges
### Dondo se usan
- Proceso
- Hero interno
- Contacto
- Secciones de contexto

### Clases CSS
- `.timeline-v2-step__badge`
- `.location-pill`
- `.eyebrow`

### Variantes
- Numero de paso
- Etiqueta de seccion
- etiqueta institucional

### Reutilizacion
- Buen candidato para estados, etapas, etiquetas y jerarquia breve.

### Preparacion para CMS
- texto corto
- color o variante
- orden

## 4. Pills
### Dondo se usan
- Hero interno
- Soluciones

### Clases CSS
- `.pill-highlight`
- `.services-solutions__pill`

### Variantes
- Info contextual
- Filtro de categoria
- Estado activo/inactivo

### Reutilizacion
- Sirven para filtros, tags y labels compactos.

### Preparacion para CMS
- texto
- estado activo
- secuencia

## 5. Timeline
### Dondo se usa
- Seccion de proceso del home

### Clases CSS
- `.timeline-v2`
- `.timeline-v2-step`
- `.timeline-v2-step__badge`
- `.timeline-v2-step__icon`

### Variantes
- Desktop con 4 columnas
- Tablet en 2 columnas
- Movil apilado

### Reutilizacion
- Se puede reutilizar para procesos, flujos, pasos de servicio o onboarding.

### Preparacion para CMS
- titulo del paso
- descripcion
- icono
- numero
- orden

## 6. Formularios
### Dondo se usan
- Contacto del home
- Aviso de privacidad

### Clases CSS
- `.form-control`
- `.form-select`
- `.form-check`
- `.form-label`
- `.cta-contact-v2`

### Variantes
- Campo de texto
- Campo email
- Campo telefono
- Select
- Textarea
- Checkbox legal

### Reutilizacion
- Base util para futuros formularios de contacto, reclamo o solicitud.

### Preparacion para CMS
- etiquetas
- placeholders
- destinatario
- texto de confirmacion
- validacion

## 7. Navbar
### Dondo se usa
- Todas las paginas

### Clases CSS
- `#topNav`
- `.home-nav`
- `.home-nav-shell`
- `.home-nav-content`
- `.home-nav-menu`
- `.home-nav-actions`
- `.nav-access-btn`
- `.home-contact-link`

### Variantes
- Home con estado transparente y scroll
- Internas con navbar solida
- Movil con menu colapsable

### Reutilizacion
- Conviene centralizarla como include si mas adelante se quiere reducir duplicacion.

### Preparacion para CMS
- enlaces
- orden de items
- CTA principal
- logo activo

## 8. Footer
### Dondo se usa
- Todas las paginas

### Clases CSS
- `.footer-main`
- `.footer-heading`
- `.footer-links`
- `.footer-bottom`
- `.footer-logo`

### Variantes
- Columnas de enlaces
- bloque legal
- bloque de marca

### Reutilizacion
- Base comun para todo el sitio.

### Preparacion para CMS
- logo
- columnas
- enlaces
- copyright
- aviso legal

## 9. Hero
### Dondo se usa
- Home
- Servicios
- Servicio al cliente
- Quienes somos
- Ubicacion
- Aviso de privacidad

### Clases CSS
- `.hero-carousel`
- `.hero-v2-content`
- `.hero-v2-title`
- `.hero-v2-copy`
- `.home-landing-hero`
- `.page-hero`
- `.qs-hero`

### Variantes
- Hero de home con imagen de fondo y card flotante
- Hero interno con overlay
- Hero institucional

### Reutilizacion
- Muy apto para paginas de aterrizaje y paginas internas con CTA.

### Preparacion para CMS
- titulo
- copy
- imagen
- CTA principal
- CTA secundario

## 10. Grids
### Dondo se usan
- Home hero, trust bar, presencia, ESR, compromiso, soluciones, proceso, testimonios, contacto
- Servicios, servicio al cliente, quienes, ubicacion, aviso

### Clases CSS
- `container`
- `row`
- `col-*`
- `.timeline-v2`
- `.services-solutions__track`
- `.values-list`

### Variantes
- Grid de 2 columnas
- Grid de 3 tarjetas
- Grid de 4 pasos
- Grid horizontal desplazable

### Reutilizacion
- La base Bootstrap ya resuelve gran parte de la composicion.

### Preparacion para CMS
- orden de bloques
- numero de columnas
- prioridad visual

## 11. Iconografia
### Dondo se usa
- Home
- Servicios
- Servicio al cliente
- Quienes
- Ubicacion
- Aviso

### Clases CSS / libreria
- Bootstrap Icons (`bi`)
- `.icon-circle`
- `.timeline-v2-step__icon`
- `.avatar`

### Variantes
- Icono circular de soporte
- icono de accion
- icono de estados
- avatar con iniciales

### Reutilizacion
- Puede ser el lenguaje visual comun para ayudas, pasos y acciones.

### Preparacion para CMS
- nombre del icono
- estilo
- estado decorativo o funcional

## 12. Resumen de estandarizacion
- El sitio ya tiene componentes base reutilizables, pero todavia estan distribuidos entre CSS global y reglas especificas por seccion.
- La siguiente fase deberia consolidar estos componentes en una estrategia mas modular.
- La base actual es suficiente para seguir con el rediseño de paginas internas sin rehacer el Home.
## 13. Estado actual del sistema
- El footer ya quedo centralizado en `partials/footer.php` y se reutiliza en las paginas principales.
- El home ya incluye una familia mas amplia de bloques: hero, indicadores, trust bar, ESR, compromiso, soluciones, por que nosotros, partners, testimonios, contacto y footer.
- Las tarjetas de testimonios y las cards de soluciones siguen siendo los componentes visuales mas sensibles por su dependencia de escala, texto y comportamiento horizontal.
- El sistema de componentes debe seguir actualizandose cada vez que cambie el nombre de una card, un bloque o una clase global, para evitar desalineaciones entre paginas.
