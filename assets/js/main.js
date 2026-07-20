document.addEventListener('DOMContentLoaded', () => {
    const badge = document.getElementById('js-status-badge');

    if (badge) {
        badge.textContent = 'JS activo';
        badge.classList.remove('text-bg-success');
        badge.classList.add('text-bg-primary');
    }

    document.documentElement.classList.add('js-ready');
});

