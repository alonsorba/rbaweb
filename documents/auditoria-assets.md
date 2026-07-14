# Auditoria de assets nuevos

## Resumen
- Assets nuevos sin rastrear auditados: 29 PNG.
- Assets fuente observados en la carpeta pero fuera del inventario de Git: 4 PSD.
- Hallazgo principal: hay mezcla de assets listos para versionar, reemplazos probables, variantes innecesarias y archivos sin contexto claro.

## A. Listos para incorporar ahora

| Archivo | Tamano | Dimensiones | Referencias actuales | Clasificacion | Accion recomendada | Nombre normalizado propuesto |
|---|---:|---:|---|---|---|---|
| `assets/img/Bienestar social.png` | 4 KB | 128x128 | Ninguna directa | A | Versionar junto con el bloque ESR cuando se integren iconos | `bienestar-social.png` |
| `assets/img/Cuidado del medio ambiente.png` | 2 KB | 128x128 | Ninguna directa | A | Versionar junto con el bloque ESR cuando se integren iconos | `cuidado-medio-ambiente.png` |
| `assets/img/Ética empresarial.png` | 14 KB | 512x512 | Ninguna directa | A | Versionar junto con el bloque ESR cuando se integren iconos | `etica-empresarial.png` |
| `assets/img/logos blanco/aig.png` | 53 KB | 2560x1315 | Ninguna directa | A | Listo para un bloque de logos o trust bar | `logos-blanco/aig.png` |
| `assets/img/logos blanco/axa.png` | 70 KB | 2363x2363 | Ninguna directa | A | Listo para un bloque de logos o trust bar | `logos-blanco/axa.png` |
| `assets/img/logos blanco/Chubb.png` | 19 KB | 3654x390 | Ninguna directa | A | Listo para un bloque de logos o trust bar | `logos-blanco/chubb.png` |
| `assets/img/logos blanco/general de salud.png` | 74 KB | 2774x1568 | Ninguna directa | A | Listo para un bloque de logos o trust bar | `logos-blanco/general-salud.png` |
| `assets/img/logos blanco/general de seguros.png` | 22 KB | 400x153 | Ninguna directa | A | Listo para un bloque de logos o trust bar | `logos-blanco/general-seguros.png` |
| `assets/img/logos blanco/GNP.png` | 77 KB | 2560x973 | Ninguna directa | A | Listo para un bloque de logos o trust bar | `logos-blanco/gnp.png` |
| `assets/img/logos blanco/hdi.png` | 16 KB | 656x412 | Ninguna directa | A | Listo para un bloque de logos o trust bar | `logos-blanco/hdi.png` |
| `assets/img/logos blanco/Mapfre.png` | 40 KB | 1280x576 | Ninguna directa | A | Listo para un bloque de logos o trust bar | `logos-blanco/mapfre.png` |
| `assets/img/logos blanco/QSalud.png` | 33 KB | 844x296 | Ninguna directa | A | Listo para un bloque de logos o trust bar | `logos-blanco/qsalud.png` |
| `assets/img/logos blanco/QUALITAS.png` | 131 KB | 3942x1204 | Ninguna directa | A | Listo para un bloque de logos o trust bar | `logos-blanco/qualitas.png` |
| `assets/img/logos blanco/seguros-atlas.png` | 23 KB | 1067x359 | Ninguna directa | A | Listo para un bloque de logos o trust bar | `logos-blanco/seguros-atlas.png` |
| `assets/img/logos blanco/Zurich.png` | 49 KB | 2560x605 | Ninguna directa | A | Listo para un bloque de logos o trust bar | `logos-blanco/zurich.png` |

## B. Reemplazo probable de un asset existente

| Archivo | Tamano | Dimensiones | Referencias actuales | Clasificacion | Accion recomendada | Nombre normalizado propuesto |
|---|---:|---:|---|---|---|---|
| `assets/img/esr con sombra.png` | 617 KB | 1118x1402 | Se parece a `assets/img/esr con sombre.png` usado en `index.php` | B | Confirmar que sustituye al asset actual y versionarlo como reemplazo | `esr-trofeo-sombra.png` |
| `assets/img/mapa al ras.png` | 12.14 MB | 4114x2712 | Se parece a `assets/img/mapaa.png` usado en `index.php` | B | Confirmar si reemplaza el mapa visible del home | `mapa-presencia-nacional.png` |

## C. Asset para pagina interna futura

| Archivo | Tamano | Dimensiones | Referencias actuales | Clasificacion | Accion recomendada | Nombre normalizado propuesto |
|---|---:|---:|---|---|---|---|
| `assets/img/avion.png` | 535 KB | 818x526 | Ninguna directa | C | Reservar para bloque o pagina de viaje / cobertura relacionada | `avion-seguro-viajero.png` |
| `assets/img/fianzas.png` | 1.57 MB | 1536x1024 | Ninguna directa | C | Reservar para pagina o bloque de fianzas | `fianzas-hero.png` |
| `assets/img/prevención de riesgos.png` | 646 KB | 723x613 | Ninguna directa | C | Reservar para bloque de prevencion o gestion de riesgos | `prevencion-riesgos.png` |
| `assets/img/rc usa.png` | 874 KB | 1536x1024 | Ninguna directa | C | Reservar para pagina o bloque de responsabilidad civil USA | `rc-usa.png` |
| `assets/img/reclamaciones.png` | 1.35 MB | 1536x1024 | Ninguna directa | C | Reservar para servicio al cliente / reclamaciones | `reclamaciones.png` |
| `assets/img/seguro viajero.png` | 431 KB | 587x436 | Ninguna directa | C | Reservar para pagina o bloque de seguro viajero | `seguro-viajero.png` |
| `assets/img/servicios actuariales.png` | 338 KB | 441x476 | Ninguna directa | C | Reservar para pagina o bloque de servicios actuariales | `servicios-actuariales.png` |
| `assets/img/siniestro.png` | 1.44 MB | 1536x1024 | Ninguna directa | C | Reservar para pagina o bloque de siniestros | `siniestro.png` |
| `assets/img/vida.png` | 1.34 MB | 1536x1024 | Ninguna directa | C | Reservar para pagina o bloque de vida | `vida.png` |

## D. Asset duplicado o variante innecesaria

| Archivo | Tamano | Dimensiones | Referencias actuales | Clasificacion | Accion recomendada | Nombre normalizado propuesto |
|---|---:|---:|---|---|---|---|
| `assets/img/esr de frente al ras.png` | 1.27 MB | 708x1170 | Ninguna directa | D | Guardar solo si se va a armar una galeria ESR; si no, no versionar | `esr-trofeo-frontal.png` |
| `assets/img/esr de lado al ras.png` | 607 KB | 523x916 | Ninguna directa | D | Guardar solo si se va a armar una galeria ESR; si no, no versionar | `esr-trofeo-lateral.png` |

## F. Requiere confirmacion del area de Comunicacion

| Archivo | Tamano | Dimensiones | Referencias actuales | Clasificacion | Accion recomendada | Nombre normalizado propuesto |
|---|---:|---:|---|---|---|---|
| `assets/img/hofar.png` | 509 KB | 618x589 | Ninguna directa | F | Confirmar uso real, contexto y bloque destino antes de versionar | `icono-hofar.png` |

## E. Asset de diseno o prueba que no debe versionarse

| Archivo | Tamano | Clasificacion | Accion recomendada |
|---|---:|---|---|
| `assets/img/cuadros soluciones.psd` | 5.95 MB | E | Mantener fuera de Git; parece archivo fuente de diseno. |
| `assets/img/esr con sombra.psd` | 3.45 MB | E | Mantener fuera de Git; parece archivo fuente de diseno. |
| `assets/img/oficina intro.psd` | 68.73 MB | E | Mantener fuera de Git; es demasiado pesado para versionarse. |
| `assets/img/werg.psd` | 104.69 MB | E | Mantener fuera de Git; es demasiado pesado para versionarse. |

## Orden sugerido de trabajo
1. Confirmar `mapa al ras.png` y `esr con sombra.png` como reemplazos.
2. Integrar primero los assets de ESR que ya estan listos.
3. Versionar el bloque de logos blanco cuando se defina el modulo de marcas.
4. Revisar con Comunicacion los assets ambiguos.
5. Posponer los PSD como fuentes de diseno, fuera del flujo de Git.

## Observaciones
- Los assets nuevos usan nombres con espacios y acentos; conviene normalizarlos antes de incorporarlos.
- Hay archivos con variantes muy parecidas que pueden generar confusion en futuras tareas.
- Los PSD grandes deben quedar fuera de la entrega web y solo como fuente local de trabajo.
