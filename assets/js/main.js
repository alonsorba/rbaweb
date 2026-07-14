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
  const homeLandingHero = document.querySelector('body.home-index .home-landing-hero');
  const trustBar = document.querySelector('body.home-index #trust-bar');
  const heroContent = document.querySelector('body.home-index .hero-v2-content');
  const pageHero = document.querySelector('body:not(.home-index) .page-hero, body:not(.home-index) .qs-hero');
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  let animationFrame = null;
  let currentScrollY = window.scrollY;
  let targetScrollY = window.scrollY;
  let revealObserver;
  let countObserver;

  const clamp01 = value => Math.min(1, Math.max(0, value));
  const lerp = (start, end, factor) => start + ((end - start) * factor);
  const smoothstep = value => value * value * (3 - (2 * value));
  const mixChannel = (start, end, factor) => Math.round(lerp(start, end, factor));
  const mixColor = (from, to, factor, alpha = 1) => `rgba(${mixChannel(from[0], to[0], factor)}, ${mixChannel(from[1], to[1], factor)}, ${mixChannel(from[2], to[2], factor)}, ${alpha})`;

  const updateNavbar = scrollY => {
    if (!nav || !header) return;

    const heroHeight = homeLandingHero?.offsetHeight || heroCarousel?.offsetHeight || window.innerHeight || 1;
    const heroTop = homeLandingHero?.offsetTop || heroCarousel?.offsetTop || 0;
    const heroBottom = heroTop + heroHeight;
    const heroProgress = clamp01((scrollY - heroTop) / heroHeight);
    const backgroundProgress = smoothstep(heroProgress);
    const textProgress = smoothstep(clamp01((heroProgress - 0.18) / 0.62));
    const logoProgress = smoothstep(clamp01((heroProgress - 0.28) / 0.5));
    const accessProgress = smoothstep(clamp01((heroProgress - 0.16) / 0.68));
    const trustTop = trustBar?.offsetTop || heroBottom;
    const trustHeight = trustBar?.offsetHeight || heroHeight;
    const exitStart = trustTop + (trustHeight * 0.25);
    const exitEnd = trustTop + (trustHeight * 0.65);
    const exitProgress = clamp01((scrollY - exitStart) / Math.max(exitEnd - exitStart, 1));
    const exitEase = smoothstep(exitProgress);
    const visible = 1 - exitEase;

    const textColor = mixColor([255, 255, 255], [19, 92, 138], textProgress);
    const hoverColor = mixColor([255, 255, 255], [14, 59, 112], clamp01(textProgress + 0.12));
    const accessBg = `rgba(19,92,138,${accessProgress.toFixed(3)})`;
    const accessBorder = mixColor([255, 255, 255], [19, 92, 138], accessProgress, 0.75 + (accessProgress * 0.25));
    const collapseBg = `rgba(255,255,255,${(0.96 - (0.04 * (1 - backgroundProgress))).toFixed(3)})`;
    const collapseBorder = `rgba(19,92,138,${(0.10 + (0.08 * backgroundProgress)).toFixed(3)})`;
    const shadowAlpha = 0.14 * backgroundProgress;
    const borderAlpha = 0.12 * backgroundProgress;
    const linkShadow = textProgress < 0.4 ? '0 1px 12px rgba(0,0,0,0.22)' : 'none';

    header.style.setProperty('--home-nav-bg-alpha', backgroundProgress.toFixed(3));
    header.style.setProperty('--home-nav-border-alpha', borderAlpha.toFixed(3));
    header.style.setProperty('--home-nav-link-color', textColor);
    header.style.setProperty('--home-nav-link-hover', hoverColor);
    header.style.setProperty('--home-nav-link-shadow', linkShadow);
    header.style.setProperty('--home-nav-toggler-border', `rgba(255,255,255,${(1 - textProgress * 0.45).toFixed(3)})`);
    header.style.setProperty('--home-nav-toggler-color', textColor);
    header.style.setProperty('--home-nav-collapse-bg', collapseBg);
    header.style.setProperty('--home-nav-collapse-border', collapseBorder);
    header.style.setProperty('--home-nav-collapse-shadow', `0 18px 42px rgba(12,46,84,${(0.12 * backgroundProgress).toFixed(3)})`);
    header.style.setProperty('--home-nav-access-bg', accessBg);
    header.style.setProperty('--home-nav-access-border', accessBorder);
    header.style.setProperty('--home-nav-access-color', '#fff');
    header.style.setProperty('--home-nav-shadow', `0 18px 42px rgba(12,46,84,${shadowAlpha.toFixed(3)})`);
    header.style.setProperty('--home-nav-opacity', visible.toFixed(3));
    header.style.setProperty('--home-nav-translate', `${(-12 * exitEase).toFixed(2)}px`);
    header.style.setProperty('--home-nav-visibility', visible > 0.02 ? 'visible' : 'hidden');
    header.style.setProperty('--home-nav-pointer-events', visible > 0.02 ? 'auto' : 'none');
    header.style.setProperty('--home-nav-logo-white-opacity', (1 - logoProgress) * visible);
    header.style.setProperty('--home-nav-logo-color-opacity', logoProgress * visible);
  };

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
    updateNavbar(scrollY);
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

