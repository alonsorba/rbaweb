document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.rb-navbar');
    const toggleButton = document.querySelector('[data-rb-navbar-toggle]');
    const collapseElement = document.getElementById('rbNavbarMenu');
    const navbarContext = navbar?.dataset.rbNavbarContext || 'home';
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

    if (navbarContext !== 'internal') {
        syncNavbarState();
        window.addEventListener('scroll', syncNavbarState, { passive: true });
    } else if (navbar) {
        navbar.classList.add('rb-navbar--internal');
    }

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

                const firstCard = viewport.querySelector('.rb-solutions__card');
                const cardWidth = firstCard ? firstCard.getBoundingClientRect().width : viewport.clientWidth * 0.8;
                const trackStyles = window.getComputedStyle(viewport.querySelector('.rb-solutions__track') ?? viewport);
                const gapValue = parseFloat(trackStyles.columnGap || trackStyles.gap || '0') || 0;
                const distance = Math.max(280, Math.round(cardWidth + gapValue));
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

    const initContact = () => {
        const form = document.querySelector('[data-rb-contact-form]');

        if (!form) {
            return;
        }

        const status = form.querySelector('[data-rb-contact-status]');
        const controls = Array.from(form.querySelectorAll('[data-rb-contact-control]'));
        const defaultStatusMessage = (form.dataset.rbContactStatusMessage || '').trim();

        const hideStatus = () => {
            if (!status) {
                return;
            }

            status.hidden = true;
            status.textContent = '';
        };

        const setFieldState = (control, message) => {
            const field = control.closest('[data-rb-contact-field]') ?? control.closest('.rb-contact__field');
            const error = field?.querySelector('[data-rb-contact-error]');

            if (message) {
                control.setAttribute('aria-invalid', 'true');
                field?.classList.add('rb-contact__field--invalid');

                if (error) {
                    error.hidden = false;
                    error.textContent = message;
                }
            } else {
                control.removeAttribute('aria-invalid');
                field?.classList.remove('rb-contact__field--invalid');

                if (error) {
                    error.hidden = true;
                    error.textContent = '';
                }
            }
        };

        const getErrorMessage = (control) => {
            const value = typeof control.value === 'string' ? control.value.trim() : '';

            if (control.name === 'privacy_acceptance') {
                return control.checked ? '' : 'Debes aceptar el Aviso de Privacidad.';
            }

            if (control.name === 'full_name') {
                if (value === '') {
                    return 'Escribe tu nombre completo.';
                }
            } else if (control.name === 'email') {
                if (value === '') {
                    return 'Ingresa un correo electrónico válido.';
                }

                if (!control.validity.valid || control.validity.typeMismatch) {
                    return 'Ingresa un correo electrónico válido.';
                }
            } else if (control.name === 'phone') {
                if (value === '') {
                    return 'Ingresa un teléfono de contacto.';
                }
            } else if (control.name === 'client_type') {
                if (value === '') {
                    return 'Selecciona un tipo de cliente.';
                }
            } else if (control.name === 'solution_interest') {
                if (value === '') {
                    return 'Selecciona una solución de interés.';
                }
            } else if (control.name === 'message') {
                if (value === '') {
                    return 'Escribe un mensaje.';
                }

                if (control.validity.tooShort) {
                    return 'Escribe un mensaje.';
                }
            }

            if (control.validity.valueMissing) {
                return 'Completa este campo.';
            }

            if (control.validity.typeMismatch && control.type === 'email') {
                return 'Ingresa un correo electrónico válido.';
            }

            if (control.validity.tooShort && control.name === 'message') {
                return 'Escribe un mensaje.';
            }

            return '';
        };

        const validateControl = (control) => {
            const isValid = control.checkValidity();
            const message = isValid ? '' : getErrorMessage(control);

            setFieldState(control, message);
            return isValid;
        };

        const validateForm = () => {
            let firstInvalid = null;

            controls.forEach((control) => {
                const isValid = validateControl(control);

                if (!isValid && !firstInvalid) {
                    firstInvalid = control;
                }
            });

            return firstInvalid;
        };

        controls.forEach((control) => {
            const eventName = control.type === 'checkbox' || control.tagName === 'SELECT' ? 'change' : 'input';

            control.addEventListener(eventName, () => {
                validateControl(control);
                hideStatus();
            });

            control.addEventListener('blur', () => {
                validateControl(control);
            });
        });

        form.addEventListener('submit', (event) => {
            event.preventDefault();

            const firstInvalid = validateForm();

            if (firstInvalid) {
                hideStatus();
                firstInvalid.focus({ preventScroll: false });
                return;
            }

            if (status) {
                status.hidden = false;
                status.textContent = defaultStatusMessage || 'El formulario está listo para integrarse con el servicio de envío. Actualmente no realiza envíos.';
            }
        });
    };

    initContact();

    document.documentElement.classList.add('js-ready');
});
