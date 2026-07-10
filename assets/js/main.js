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

    const scrollToHeader = () => {
      const header = document.querySelector('header');
      if (!header) return;
      window.scrollTo({ top: 0, left: 0, behavior: 'auto' });
      header.scrollIntoView({ behavior: 'auto', block: 'start' });
    };

    document.addEventListener('DOMContentLoaded', scrollToHeader, { once: true });
    window.addEventListener('pageshow', scrollToHeader, { once: true });
  }
})();

document.addEventListener('DOMContentLoaded', () => {
  const nav = document.getElementById('topNav');
  const header = document.querySelector('header.sticky-top');
  const heroCarousel = document.querySelector('body.home-index .hero-carousel');
  const heroContent = document.querySelector('body.home-index .hero-v2-content');
  const pageHero = document.querySelector('body:not(.home-index) .page-hero, body:not(.home-index) .qs-hero');
  const homeBrandLogos = Array.from(document.querySelectorAll('body.home-index .brand-logo[data-home-logo-light][data-home-logo-dark]'));
  const shrinkOn = 20;
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  let animationFrame = null;
  let currentScrollY = window.scrollY;
  let targetScrollY = window.scrollY;
  let revealObserver;
  let countObserver;

  const updateHomeBrandLogos = isScrolled => {
    homeBrandLogos.forEach(logo => {
      const nextSrc = isScrolled ? logo.dataset.homeLogoDark : logo.dataset.homeLogoLight;
      if (!nextSrc || logo.getAttribute('src') === nextSrc) return;
      logo.setAttribute('src', nextSrc);
    });
  };

  const lerp = (start, end, factor) => start + (end - start) * factor;

  const updateHeroScrollEffect = scrollY => {
    if (!heroCarousel) return;

    const viewportHeight = window.innerHeight || 1;
    const maxScroll = Math.max(viewportHeight * 1.05, 1);
    const progress = Math.min(scrollY / maxScroll, 1);
    const easedProgress = 1 - Math.pow(1 - progress, 1.8);

    heroCarousel.style.setProperty('--video-scroll-progress', progress.toFixed(3));
    heroCarousel.style.setProperty('--video-scroll-progress-eased', easedProgress.toFixed(3));

    if (heroContent) {
      heroContent.style.setProperty('--hero-content-shift', `${easedProgress * -42}px`);
      heroContent.style.setProperty('--hero-content-opacity', String(1 - (easedProgress * 0.34)));
    }
  };

  const updatePageHeroEffect = scrollY => {
    if (!pageHero) return;

    const maxScroll = Math.max((window.innerHeight || 1) * 0.75, 1);
    const progress = Math.min(scrollY / maxScroll, 1);
    const easedProgress = 1 - Math.pow(1 - progress, 1.6);
    pageHero.style.setProperty('--page-hero-progress', easedProgress.toFixed(3));
  };

  const onScroll = scrollY => {
    const isScrolled = scrollY > shrinkOn;

    if (nav) {
      nav.classList.toggle('shadow-sm', isScrolled);
      nav.classList.toggle('is-scrolled', isScrolled);
    }

    if (header) {
      header.classList.toggle('is-scrolled', isScrolled);
    }

    updateHomeBrandLogos(isScrolled);
    updateHeroScrollEffect(scrollY);
    updatePageHeroEffect(scrollY);
  };

  const renderScrollFrame = () => {
    const factor = prefersReducedMotion ? 1 : 0.12;
    currentScrollY = lerp(currentScrollY, targetScrollY, factor);

    if (Math.abs(targetScrollY - currentScrollY) < 0.1) {
      currentScrollY = targetScrollY;
    }

    onScroll(currentScrollY);

    if (Math.abs(targetScrollY - currentScrollY) >= 0.1) {
      animationFrame = window.requestAnimationFrame(renderScrollFrame);
      return;
    }

    animationFrame = null;
  };

  const requestScrollFrame = () => {
    targetScrollY = window.scrollY;
    if (animationFrame !== null) return;
    animationFrame = window.requestAnimationFrame(renderScrollFrame);
  };

  window.addEventListener('scroll', requestScrollFrame, { passive: true });
  window.addEventListener('resize', requestScrollFrame);
  requestScrollFrame();

  document.querySelectorAll('a.nav-link[href^="#"]').forEach(link => {
    link.addEventListener('click', event => {
      const target = document.querySelector(link.getAttribute('href'));
      if (!target) return;
      event.preventDefault();
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  });

  if ('IntersectionObserver' in window) {
    const revealTargets = Array.from(document.querySelectorAll(
      'main .tile, main .glass-card, main .location-card, main .privacy-card, main .ratio, main img, main .trust-pill, main .timeline-v2-step, main .accordion-item, main .pill-highlight, main .values-list li, main .section-title-line, main .reveal-on-scroll'
    )).filter(el => !el.classList.contains('brand-logo') && !el.classList.contains('footer-logo') && !el.classList.contains('home-landing-hero__image'));

    revealTargets.forEach((el, idx) => {
      el.classList.add('reveal-on-scroll');
      el.style.setProperty('--reveal-delay', `${(idx % 4) * 80}ms`);
    });

    revealObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-visible');
        revealObserver.unobserve(entry.target);
      });
    }, {
      threshold: 0.16,
      rootMargin: '0px 0px -12% 0px'
    });

    revealTargets.forEach(el => revealObserver.observe(el));

    const countTargets = Array.from(document.querySelectorAll(
      '.infographic-stats__number[data-count-target], .infographic-presence__number[data-count-target]'
    ));

    const animateCount = (element, targetValue, prefix = '') => {
      const durationMs = 1500;
      const startTime = performance.now();
      const startValue = 0;
      const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

      if (prefersReduced) {
        element.textContent = `${prefix}${targetValue}`;
        return;
      }

      const tick = now => {
        const elapsed = Math.min((now - startTime) / durationMs, 1);
        const eased = 1 - Math.pow(1 - elapsed, 3);
        const currentValue = Math.round(startValue + ((targetValue - startValue) * eased));
        element.textContent = `${prefix}${currentValue}`;

        if (elapsed < 1) {
          window.requestAnimationFrame(tick);
          return;
        }

        element.textContent = `${prefix}${targetValue}`;
      };

      window.requestAnimationFrame(tick);
    };

    if (countTargets.length) {
      countObserver = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (!entry.isIntersecting) return;

          const element = entry.target;
          const targetValue = Number.parseInt(element.dataset.countTarget, 10);
          const prefix = element.dataset.countPrefix || '';

          if (Number.isNaN(targetValue)) {
            countObserver.unobserve(element);
            return;
          }

          if (!element.dataset.countAnimated) {
            element.dataset.countAnimated = 'true';
            animateCount(element, targetValue, prefix);
          }

          countObserver.unobserve(element);
        });
      }, {
        threshold: 0.35,
        rootMargin: '0px 0px -10% 0px'
      });

      countTargets.forEach(el => countObserver.observe(el));
    }
  }

  const solutionSection = document.querySelector('.services-solutions');
  if (!solutionSection) return;

  const solutionTrack = solutionSection.querySelector('#solutionsTrack') || solutionSection.querySelector('[data-solution-track]');
  const solutionCarousel = solutionSection.querySelector('#solutionsCarousel') || solutionSection.querySelector('[data-solution-carousel]');
  const solutionButtons = Array.from(solutionSection.querySelectorAll('[data-solution-key]'));
  const solutionPrevButton = solutionSection.querySelector('[data-solution-prev]');
  const solutionNextButton = solutionSection.querySelector('[data-solution-next]');

  const solutionData = {
    empresas: [
      {
        title: 'Daños',
        description: 'Protección para patrimonio, incendio, fenómenos naturales y pérdidas materiales.',
        image: 'assets/img/escudo.png',
        alt: 'Protección de daños'
      },
      {
        title: 'Autos',
        description: 'Coberturas para unidades particulares o flotillas con asistencia y respaldo vial.',
        image: 'assets/img/carro.png',
        alt: 'Cobertura de autos'
      },
      {
        title: 'Gastos Médicos',
        description: 'Atención médica privada con protección amplia, respaldo hospitalario y emergencias.',
        image: 'assets/img/corazon.png',
        alt: 'Cobertura de gastos médicos'
      },
      {
        title: 'Vida',
        description: 'Protección financiera para tu familia y planeación de largo plazo.',
        image: 'assets/img/asesoria.png',
        alt: 'Cobertura de vida'
      }
    ],
    personas: [
      {
        title: 'Hogar',
        description: 'Cobertura para tu casa y contenidos con protección práctica y fácil de entender.',
        image: 'assets/img/persona.png',
        alt: 'Cobertura de hogar'
      },
      {
        title: 'Auto Personal',
        description: 'Protección para tu vehículo con asistencia, daños materiales y responsabilidad civil.',
        image: 'assets/img/carro.png',
        alt: 'Cobertura de auto personal'
      },
      {
        title: 'Salud',
        description: 'Soluciones de salud y bienestar con respaldo para atención médica oportuna.',
        image: 'assets/img/corazon.png',
        alt: 'Cobertura de salud'
      },
      {
        title: 'Vida Familiar',
        description: 'Planeación y respaldo económico para el futuro de quienes dependen de ti.',
        image: 'assets/img/asesoria.png',
        alt: 'Cobertura de vida familiar'
      }
    ],
    gestion: [
      {
        title: 'Administración de Riesgos',
        description: 'Acompañamiento para identificar, medir y priorizar riesgos de manera integral.',
        image: 'assets/img/cuadro escudo.png',
        alt: 'Administración de riesgos'
      },
      {
        title: 'Gestión de Siniestros',
        description: 'Seguimiento ordenado de incidencias para acelerar respuesta y resolución.',
        image: 'assets/img/cuadro gastos.png',
        alt: 'Gestión de siniestros'
      },
      {
        title: 'Fianzas',
        description: 'Esquemas de cumplimiento y respaldo para contratos, licitaciones y obligaciones.',
        image: 'assets/img/cuadro carro.png',
        alt: 'Fianzas'
      },
      {
        title: 'Programas Corporativos',
        description: 'Diseño y administración de programas hechos a la medida de tu operación.',
        image: 'assets/img/persona.png',
        alt: 'Programas corporativos'
      }
    ]
  };

  solutionData.fianzas = solutionData.gestion;

  const renderSolutions = key => {
    if (!solutionTrack) return;
    const items = solutionData[key] || solutionData.empresas;

    solutionTrack.innerHTML = items.map(item => `
      <article class="solution-card">
        <img src="${item.image}" alt="${item.alt}" class="solution-card__image" loading="lazy">
        <div class="solution-card__content">
          <h3>${item.title}</h3>
          <p>${item.description}</p>
          <a href="#contacto" class="solution-card__btn">VER COBERTURA</a>
        </div>
      </article>
    `).join('');

    if (solutionCarousel) {
      solutionCarousel.scrollTo({ left: 0, behavior: 'auto' });
    }

    window.requestAnimationFrame(updateSolutionCarouselState);
  };

  const updateSolutionCarouselState = () => {
    if (!solutionCarousel || !solutionTrack) return;

    const overflowWidth = solutionTrack.scrollWidth - solutionCarousel.clientWidth;
    const isScrollable = overflowWidth > 8;
    const isCentered = !isScrollable;

    solutionTrack.classList.toggle('is-centered', isCentered);
    solutionCarousel.classList.toggle('is-scrollable', isScrollable);

    if (solutionPrevButton) {
      solutionPrevButton.disabled = !isScrollable;
      solutionPrevButton.setAttribute('aria-disabled', String(!isScrollable));
    }

    if (solutionNextButton) {
      solutionNextButton.disabled = !isScrollable;
      solutionNextButton.setAttribute('aria-disabled', String(!isScrollable));
    }
  };

  const setActiveSolution = key => {
    solutionButtons.forEach(button => {
      const isActive = button.dataset.solutionKey === key;
      button.classList.toggle('active', isActive);
      button.setAttribute('aria-pressed', String(isActive));
    });

    renderSolutions(key);
  };

  solutionButtons.forEach(button => {
    button.addEventListener('click', () => setActiveSolution(button.dataset.solutionKey));
  });

  if (solutionPrevButton && solutionCarousel) {
    solutionPrevButton.addEventListener('click', () => {
      const amount = Math.max(solutionCarousel.clientWidth * 0.78, 280);
      solutionCarousel.scrollBy({ left: -amount, behavior: 'smooth' });
    });
  }

  if (solutionNextButton && solutionCarousel) {
    solutionNextButton.addEventListener('click', () => {
      const amount = Math.max(solutionCarousel.clientWidth * 0.78, 280);
      solutionCarousel.scrollBy({ left: amount, behavior: 'smooth' });
    });
  }

  if (solutionCarousel) {
    let isDown = false;
    let startX = 0;
    let scrollLeft = 0;
    let moved = false;

    solutionCarousel.addEventListener('mousedown', function (event) {
      isDown = true;
      moved = false;
      solutionCarousel.classList.add('is-dragging');
      startX = event.pageX - solutionCarousel.offsetLeft;
      scrollLeft = solutionCarousel.scrollLeft;
    });

    solutionCarousel.addEventListener('mouseleave', function () {
      isDown = false;
      solutionCarousel.classList.remove('is-dragging');
    });

    solutionCarousel.addEventListener('mouseup', function () {
      isDown = false;
      solutionCarousel.classList.remove('is-dragging');
    });

    solutionCarousel.addEventListener('mousemove', function (event) {
      if (!isDown) return;
      event.preventDefault();
      const x = event.pageX - solutionCarousel.offsetLeft;
      const walk = (x - startX) * 1.4;
      if (Math.abs(walk) > 5) moved = true;
      solutionCarousel.scrollLeft = scrollLeft - walk;
    });

    solutionCarousel.addEventListener('click', function (event) {
      if (!moved) return;
      const link = event.target.closest('a');
      if (link) event.preventDefault();
    }, true);
  }

  setActiveSolution('empresas');
  updateSolutionCarouselState();
  window.addEventListener('resize', updateSolutionCarouselState, { passive: true });
});

