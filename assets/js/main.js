document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.rb-navbar');
    const toggleButton = document.querySelector('[data-rb-navbar-toggle]');
    const collapseElement = document.getElementById('rbNavbarMenu');
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

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

    const initSolutions = () => {
        const sections = document.querySelectorAll('[data-rb-solutions]');

        sections.forEach((section) => {
            const tabs = Array.from(section.querySelectorAll('[data-rb-solutions-tab]'));
            const panels = Array.from(section.querySelectorAll('[data-rb-solutions-panel]'));

            if (!tabs.length || !panels.length) {
                return;
            }

            const panelMap = new Map();
            const tabMap = new Map();
            const controlsMap = new Map();

            const updateControls = (panel) => {
                if (!panel) {
                    return;
                }

                const viewport = panel.querySelector('[data-rb-solutions-viewport]');
                const prevButton = panel.querySelector('[data-rb-solutions-prev]');
                const nextButton = panel.querySelector('[data-rb-solutions-next]');

                if (!viewport || !prevButton || !nextButton) {
                    return;
                }

                const maxScrollLeft = Math.max(0, viewport.scrollWidth - viewport.clientWidth);
                const currentScrollLeft = Math.max(0, viewport.scrollLeft);
                const canScroll = maxScrollLeft > 1;
                const atStart = currentScrollLeft <= 1;
                const atEnd = currentScrollLeft >= maxScrollLeft - 1;

                prevButton.disabled = !canScroll || atStart;
                nextButton.disabled = !canScroll || atEnd;
            };

            const scrollPanel = (panel, direction) => {
                const viewport = panel?.querySelector('[data-rb-solutions-viewport]');

                if (!viewport) {
                    return;
                }

                const distance = Math.max(280, Math.round(viewport.clientWidth * 0.78));
                viewport.scrollBy({
                    left: distance * direction,
                    behavior: prefersReducedMotion ? 'auto' : 'smooth',
                });
            };

            const setActiveTab = (categoryId, focusTab = false) => {
                tabs.forEach((tab) => {
                    const isSelected = tab.dataset.rbSolutionsTarget === categoryId;
                    tab.setAttribute('aria-selected', isSelected ? 'true' : 'false');
                    tab.tabIndex = isSelected ? 0 : -1;
                    tab.classList.toggle('rb-solutions__tab--active', isSelected);
                    if (isSelected && focusTab) {
                        tab.focus({ preventScroll: true });
                    }
                });

                panels.forEach((panel) => {
                    const isActive = panel.dataset.rbSolutionsCategory === categoryId;
                    panel.hidden = !isActive;

                    if (isActive) {
                        const viewport = panel.querySelector('[data-rb-solutions-viewport]');
                        if (viewport) {
                            viewport.scrollLeft = 0;
                            viewport.classList.remove('is-dragging');
                        }
                        updateControls(panel);
                    }
                });
            };

            const getActivePanel = () => panels.find((panel) => !panel.hidden) ?? panels[0];

            tabs.forEach((tab) => {
                tabMap.set(tab.dataset.rbSolutionsTarget, tab);
                tab.addEventListener('click', () => {
                    setActiveTab(tab.dataset.rbSolutionsTarget, true);
                });

                tab.addEventListener('keydown', (event) => {
                    const currentIndex = tabs.indexOf(tab);

                    if (event.key === 'ArrowRight' || event.key === 'ArrowDown') {
                        event.preventDefault();
                        const nextTab = tabs[(currentIndex + 1) % tabs.length];
                        setActiveTab(nextTab.dataset.rbSolutionsTarget, true);
                    } else if (event.key === 'ArrowLeft' || event.key === 'ArrowUp') {
                        event.preventDefault();
                        const previousTab = tabs[(currentIndex - 1 + tabs.length) % tabs.length];
                        setActiveTab(previousTab.dataset.rbSolutionsTarget, true);
                    } else if (event.key === 'Home') {
                        event.preventDefault();
                        setActiveTab(tabs[0].dataset.rbSolutionsTarget, true);
                    } else if (event.key === 'End') {
                        event.preventDefault();
                        setActiveTab(tabs[tabs.length - 1].dataset.rbSolutionsTarget, true);
                    }
                });
            });

            panels.forEach((panel) => {
                panelMap.set(panel.dataset.rbSolutionsCategory, panel);
                const viewport = panel.querySelector('[data-rb-solutions-viewport]');
                const prevButton = panel.querySelector('[data-rb-solutions-prev]');
                const nextButton = panel.querySelector('[data-rb-solutions-next]');

                if (!viewport || !prevButton || !nextButton) {
                    return;
                }

                controlsMap.set(panel.dataset.rbSolutionsCategory, { viewport, prevButton, nextButton });

                prevButton.addEventListener('click', () => {
                    scrollPanel(panel, -1);
                });

                nextButton.addEventListener('click', () => {
                    scrollPanel(panel, 1);
                });

                viewport.addEventListener('scroll', () => updateControls(panel), { passive: true });

                let pointerId = null;
                let startX = 0;
                let startScrollLeft = 0;
                let isPointerDown = false;
                let isDragging = false;
                let suppressClick = false;

                const stopDrag = () => {
                    if (!isPointerDown) {
                        return;
                    }

                    isPointerDown = false;
                    isDragging = false;
                    viewport.classList.remove('is-dragging');

                    if (suppressClick) {
                        window.setTimeout(() => {
                            suppressClick = false;
                        }, 150);
                    }

                    updateControls(panel);
                };

                viewport.addEventListener('pointerdown', (event) => {
                    if (panel.hidden) {
                        return;
                    }

                    if (event.pointerType === 'mouse' && event.button !== 0) {
                        return;
                    }

                    isPointerDown = true;
                    isDragging = false;
                    suppressClick = false;
                    pointerId = event.pointerId;
                    startX = event.clientX;
                    startScrollLeft = viewport.scrollLeft;

                    if (viewport.setPointerCapture) {
                        viewport.setPointerCapture(pointerId);
                    }
                });

                viewport.addEventListener('pointermove', (event) => {
                    if (!isPointerDown || event.pointerId !== pointerId) {
                        return;
                    }

                    const deltaX = event.clientX - startX;

                    if (!isDragging && Math.abs(deltaX) > 6) {
                        isDragging = true;
                        viewport.classList.add('is-dragging');
                    }

                    if (isDragging) {
                        viewport.scrollLeft = startScrollLeft - deltaX;
                        event.preventDefault();
                    }
                });

                const finishPointer = (event) => {
                    if (!isPointerDown || event.pointerId !== pointerId) {
                        return;
                    }

                    if (viewport.releasePointerCapture) {
                        try {
                            viewport.releasePointerCapture(pointerId);
                        } catch (error) {
                            // Ignore capture release failures.
                        }
                    }

                    if (isDragging) {
                        suppressClick = true;
                    }

                    pointerId = null;
                    stopDrag();
                };

                viewport.addEventListener('pointerup', finishPointer);
                viewport.addEventListener('pointercancel', finishPointer);

                viewport.addEventListener(
                    'click',
                    (event) => {
                        if (!suppressClick) {
                            return;
                        }

                        event.preventDefault();
                        event.stopPropagation();
                    },
                    true
                );
            });

            const activeCategory = tabs.find((tab) => tab.getAttribute('aria-selected') === 'true') ?? tabs[0];
            setActiveTab(activeCategory.dataset.rbSolutionsTarget, false);

            window.addEventListener('resize', () => {
                const activePanel = getActivePanel();
                updateControls(activePanel);
            });

            controlsMap.forEach((_value, categoryId) => {
                const panel = panelMap.get(categoryId);
                if (panel && !panel.hidden) {
                    updateControls(panel);
                }
            });
        });
    };

    initSolutions();

    document.documentElement.classList.add('js-ready');
});
