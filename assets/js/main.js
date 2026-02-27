(() => {
  // Detecta si la navegacion actual fue una recarga completa de pagina.
  const navEntry = performance.getEntriesByType('navigation')?.[0];
  const navType = navEntry?.type || performance.navigation?.type;
  const isReload = navType === 'reload' || navType === performance.navigation?.TYPE_RELOAD;

  // En recarga, evita restauracion de scroll del navegador y sube al header.
  if (isReload) {
    if ('scrollRestoration' in history) {
      history.scrollRestoration = 'manual';
    }
    // Punto unico para forzar scroll al top sin animacion.
    const scrollToHeader = () => {
      const header = document.querySelector('header');
      if (header) {
        window.scrollTo({ top: 0, left: 0, behavior: 'auto' });
        header.scrollIntoView({ behavior: 'auto', block: 'start' });
      }
    };
    // Se ejecuta en ambos eventos para ganarle al restore nativo del browser.
    document.addEventListener('DOMContentLoaded', scrollToHeader, { once: true });
    window.addEventListener('pageshow', scrollToHeader, { once: true });
  }
})();

document.addEventListener('DOMContentLoaded', () => {
  // Referencias globales de UI (navbar/header/hero).
  const nav = document.getElementById('topNav');
  const header = document.querySelector('header.sticky-top');
  const heroCarousel = document.querySelector('body.home-index .hero-carousel');
  const shrinkOn = 20;
  const fadeOutOn = 260;
  let ticking = false;

  // Actualiza la variable CSS que controla zoom/tono/opacidad del video hero.
  const updateHeroScrollEffect = () => {
    if (!heroCarousel) return;
    const viewportHeight = window.innerHeight || 1;
    const maxScroll = Math.max(viewportHeight * 0.85, 1);
    const progress = Math.min(window.scrollY / maxScroll, 1);
    heroCarousel.style.setProperty('--video-scroll-progress', progress.toFixed(3));
  };

  // Throttle por frame para que el scroll sea fluido y sin trabajo duplicado.
  const requestScrollFrame = () => {
    if (ticking) return;
    ticking = true;
    window.requestAnimationFrame(() => {
      onScroll();
      ticking = false;
    });
  };

  // Comportamiento de header al desplazarse y sincronizacion de efectos del hero.
  const onScroll = () => {
    if (window.scrollY > shrinkOn) {
      nav.classList.add('shadow-sm');
    } else {
      nav.classList.remove('shadow-sm');
    }

    if (header) {
      const progress = Math.min(window.scrollY / fadeOutOn, 1);
      header.style.opacity = String(1 - progress);
      header.style.transform = `translateY(${progress * -14}px)`;
      header.style.pointerEvents = progress > 0.98 ? 'none' : 'auto';
    }
    updateHeroScrollEffect();
  };
  window.addEventListener('scroll', requestScrollFrame, { passive: true });
  window.addEventListener('resize', requestScrollFrame);
  onScroll();

  // Smooth scroll para anclas internas del menu.
  document.querySelectorAll('a.nav-link[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
      const target = document.querySelector(link.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  const statCard = document.getElementById('statCard');
  const statToggle = document.querySelector('#statCard .stat-toggle');
  if (statCard && statToggle) {
    // Colapsa/expande la tarjeta estadistica cuando existe en la vista.
    statToggle.addEventListener('click', () => {
      statCard.classList.toggle('collapsed');
    });
  }

  const heroCarouselEl = document.getElementById('heroCarousel');
  if (heroCarouselEl) {
    // Camino principal: inicializa carrusel con Bootstrap cuando esta disponible.
    if (window.bootstrap && bootstrap.Carousel) {
      new bootstrap.Carousel(heroCarouselEl, { interval: 5000, ride: 'carousel', pause: false });
    } else {
      // Camino fallback: carrusel manual si Bootstrap JS no cargó.
      heroCarouselEl.classList.add('fallback-carousel');
      const items = Array.from(heroCarouselEl.querySelectorAll('.carousel-item'));
      const indicators = Array.from(heroCarouselEl.querySelectorAll('[data-bs-slide-to]'));
      let current = 0;
      const activate = idx => {
        items.forEach((item, i) => item.classList.toggle('active', i === idx));
        indicators.forEach((btn, i) => {
          btn.classList.toggle('active', i === idx);
          btn.setAttribute('aria-current', i === idx ? 'true' : 'false');
        });
        current = idx;
      };
      const next = () => activate((current + 1) % items.length);
      const prev = () => activate((current - 1 + items.length) % items.length);
      heroCarouselEl.querySelector('.carousel-control-next')?.addEventListener('click', e => { e.preventDefault(); next(); });
      heroCarouselEl.querySelector('.carousel-control-prev')?.addEventListener('click', e => { e.preventDefault(); prev(); });
      indicators.forEach(btn => btn.addEventListener('click', e => {
        e.preventDefault();
        const idx = Number(btn.getAttribute('data-bs-slide-to'));
        if (!Number.isNaN(idx)) activate(idx);
      }));
      activate(0);
      setInterval(next, 5000);
    }
  }

  // Fallback de acordeon/collapse cuando no existe bootstrap.Collapse.
  if (!window.bootstrap || !bootstrap.Collapse) {
    document.querySelectorAll('[data-bs-toggle="collapse"]').forEach(button => {
      button.addEventListener('click', () => {
        const targetSelector = button.getAttribute('data-bs-target');
        if (!targetSelector) return;
        const target = document.querySelector(targetSelector);
        if (!target) return;
        const parentSelector = target.getAttribute('data-bs-parent');
        if (parentSelector) {
          const parent = document.querySelector(parentSelector);
          parent?.querySelectorAll('.collapse.show').forEach(item => {
            if (item !== target) {
              item.classList.remove('show');
            }
          });
        }
        const willOpen = !target.classList.contains('show');
        target.classList.toggle('show');
        button.setAttribute('aria-expanded', String(willOpen));
      });
    });
  }

  // Reveal on scroll para cards e imagenes principales del contenido.
  if ('IntersectionObserver' in window) {
    const revealTargets = Array.from(document.querySelectorAll(
      'main .tile, main .glass-card, main .location-card, main .privacy-card, main .ratio, main img'
    )).filter(el => !el.classList.contains('brand-logo') && !el.classList.contains('footer-logo'));

    revealTargets.forEach((el, idx) => {
      // Clase base de animacion + delay escalonado para entrada visual limpia.
      el.classList.add('reveal-on-scroll');
      el.style.setProperty('--reveal-delay', `${(idx % 4) * 55}ms`);
    });

    // Alterna visibilidad al entrar/salir del viewport (subiendo y bajando).
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          return;
        }
        entry.target.classList.remove('is-visible');
      });
    }, {
      threshold: 0.12,
      rootMargin: '0px 0px -10% 0px'
    });

    revealTargets.forEach(el => revealObserver.observe(el));
  }

});



