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
});
