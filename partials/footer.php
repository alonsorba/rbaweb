<?php
  $footerYear = $year ?? date('Y');
  $footerPhone = $phone ?? '+52 55 1234 5678';
  $footerEmail = $email ?? 'contacto@rbaseguros.mx';
?>
<footer class="site-footer" id="footer">
  <div class="site-footer__main">
    <div class="container site-footer__container">
      <div class="site-footer__grid">
        <div class="site-footer__column">
          <h3 class="site-footer__heading">Empresas</h3>
          <ul class="site-footer__links list-unstyled mb-0">
            <li><a href="servicios.php#portafolio">Da&ntilde;os</a></li>
            <li><a href="servicios.php#portafolio">Autos</a></li>
            <li><a href="servicios.php#portafolio">Gastos M&eacute;dicos</a></li>
            <li><a href="servicios.php#portafolio">Vida</a></li>
            <li><a href="servicios.php#portafolio">Viaje</a></li>
            <li><a href="servicios.php#portafolio">Fianzas</a></li>
            <li><a href="servicios.php#portafolio">Servicios Actuariales</a></li>
          </ul>
        </div>

        <div class="site-footer__column">
          <h3 class="site-footer__heading">Personas</h3>
          <ul class="site-footer__links list-unstyled mb-0">
            <li><a href="servicios.php#portafolio">Autos</a></li>
            <li><a href="servicios.php#portafolio">Gastos M&eacute;dicos</a></li>
            <li><a href="servicios.php#portafolio">Vida</a></li>
            <li><a href="servicios.php#portafolio">Viaje</a></li>
            <li><a href="servicios.php#portafolio">Hogar</a></li>
            <li><a href="servicios.php#portafolio">RC USA</a></li>
            <li><a href="servicios.php#portafolio">Servicios Actuariales</a></li>
          </ul>
        </div>

        <div class="site-footer__column">
          <h3 class="site-footer__heading">Gesti&oacute;n Integral</h3>
          <ul class="site-footer__links list-unstyled mb-0">
            <li><a href="servicio-cliente.php#siniestros">Siniestros</a></li>
            <li><a href="servicio-cliente.php#reclamaciones">Reclamaciones</a></li>
            <li><a href="servicios.php#prevencion">Prevenci&oacute;n e Ingenier&iacute;a de riesgo</a></li>
            <li><a href="servicio-cliente.php#portal">Portal Clientes 24/7</a></li>
          </ul>
        </div>

        <div class="site-footer__column">
          <h3 class="site-footer__heading">Nosotros</h3>
          <ul class="site-footer__links list-unstyled mb-0">
            <li><a href="quienes.php">&iquest;Qui&eacute;nes Somos?</a></li>
            <li><a href="quienes.php#esr">Empresa Socialmente Responsable</a></li>
          </ul>
        </div>

        <div class="site-footer__column">
          <h3 class="site-footer__heading">Contacto</h3>
          <ul class="site-footer__links site-footer__links--contact list-unstyled mb-0">
            <li><a class="site-footer__link-strong" href="servicio-cliente.php#faq">Preguntas frecuentes</a></li>
            <li><a class="site-footer__link-strong" href="aviso-privacidad.php">Aviso de privacidad</a></li>
          </ul>
          <a class="btn site-footer__access" href="https://neo.rbaidon.com/">Acceso a usuarios</a>
        </div>
      </div>

      <div class="site-footer__meta">
        <div class="site-footer__social">
          <a class="site-footer__social-link" href="https://www.facebook.com/" aria-label="Facebook" target="_blank" rel="noopener">
            <i class="bi bi-facebook" aria-hidden="true"></i>
          </a>
          <a class="site-footer__social-link" href="https://www.instagram.com/" aria-label="Instagram" target="_blank" rel="noopener">
            <i class="bi bi-instagram" aria-hidden="true"></i>
          </a>
          <a class="site-footer__social-link" href="https://www.linkedin.com/" aria-label="LinkedIn" target="_blank" rel="noopener">
            <i class="bi bi-linkedin" aria-hidden="true"></i>
          </a>
          <span class="site-footer__contact-line"><?php echo $footerPhone; ?> <span aria-hidden="true">|</span> <?php echo $footerEmail; ?></span>
        </div>

        <div class="site-footer__legal">
          Morelos No. 522 Ote. Col. Zona Norte. Cd. Obreg&oacute;n, Sonora. C.P. 85010<br>
          <?php echo $footerYear; ?> &copy; R.Baid&oacute;n Agente de Seguros y de Fianzas.<br>
          Todos los derechos reservados.
        </div>
      </div>
    </div>
  </div>

  <div class="site-footer__cta-strip">
    <div class="container site-footer__container">
      <a class="btn site-footer__cta" href="index.php#contacto">Habla con un asesor</a>
    </div>
  </div>
</footer>
