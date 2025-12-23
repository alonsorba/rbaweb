document.addEventListener('DOMContentLoaded', () => {
  const nav = document.getElementById('topNav');
  const shrinkOn = 20;
  const onScroll = () => {
    if (window.scrollY > shrinkOn) {
      nav.classList.add('shadow-sm');
    } else {
      nav.classList.remove('shadow-sm');
    }
  };
  window.addEventListener('scroll', onScroll);
  onScroll();

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
    statToggle.addEventListener('click', () => {
      statCard.classList.toggle('collapsed');
    });
  }

  const heroCarouselEl = document.getElementById('heroCarousel');
  if (heroCarouselEl) {
    if (window.bootstrap && bootstrap.Carousel) {
      new bootstrap.Carousel(heroCarouselEl, { interval: 5000, ride: 'carousel', pause: false });
    } else {
      heroCarouselEl.classList.add('fallback-carousel');
      // Fallback simple slider if Bootstrap JS no carga
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
});
