document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.rb-navbar');
    const toggleButton = document.querySelector('[data-rb-navbar-toggle]');
    const collapseElement = document.getElementById('rbNavbarMenu');

    const syncNavbarState = () => {
        if (!navbar) {
            return;
        }

        navbar.classList.toggle('rb-navbar--scrolled', window.scrollY > 12);
    };

    const setMenuState = (isOpen) => {
        if (!toggleButton || !collapseElement) {
            return;
        }

        toggleButton.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        collapseElement.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
        collapseElement.classList.toggle('rb-navbar__collapse--open', isOpen);
    };

    syncNavbarState();
    window.addEventListener('scroll', syncNavbarState, { passive: true });

    if (toggleButton && collapseElement) {
        toggleButton.addEventListener('click', () => {
            const isOpen = collapseElement.classList.contains('rb-navbar__collapse--open');
            setMenuState(!isOpen);
        });

        collapseElement.addEventListener('click', (event) => {
            const navLink = event.target.closest('.rb-navbar__link, .rb-button--nav, .rb-button--nav-accent');

            if (navLink && window.innerWidth < 992) {
                setMenuState(false);
            }
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth >= 992) {
                setMenuState(false);
            }
        });
    }

    if (document.activeElement && document.activeElement.classList?.contains('rb-skip-link')) {
        document.activeElement.blur();
    }

    document.documentElement.classList.add('js-ready');
});
