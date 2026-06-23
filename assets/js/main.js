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
  const shrinkOn = 20;
  const fadeOutOn = 260;
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  let animationFrame = null;
  let currentScrollY = window.scrollY;
  let targetScrollY = window.scrollY;
  let revealObserver;
  let countObserver;

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
    if (nav) {
      nav.classList.toggle('shadow-sm', scrollY > shrinkOn);
    }

    if (header) {
      const progress = Math.min(scrollY / fadeOutOn, 1);
      header.style.opacity = String(1 - progress);
      header.style.transform = `translateY(${progress * -18}px) scale(${1 - (progress * 0.02)})`;
      header.style.pointerEvents = progress > 0.98 ? 'none' : 'auto';
    }

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
});
