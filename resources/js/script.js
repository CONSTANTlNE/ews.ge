import Splide from '@splidejs/splide';

const initNavbar = () => {
    const navbar = document.getElementById('navbar');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuBtn = document.getElementById('menu-btn');
    const closeBtn = document.getElementById('close-btn');

    if (navbar) {
        const handleScroll = () => {
            if (window.scrollY > 50) {
                navbar.classList.add('bg-white/15', 'backdrop-blur-lg');
            } else {
                navbar.classList.remove('bg-white/15', 'backdrop-blur-lg');
            }
        };

        window.addEventListener('scroll', handleScroll);
        handleScroll();
    }

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('-translate-x-full');
            mobileMenu.classList.add('translate-x-0');
        });
    }

    if (closeBtn && mobileMenu) {
        closeBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('translate-x-0');
            mobileMenu.classList.add('-translate-x-full');
        });
    }
};

const setAccordionItemState = (item, isOpen) => {
    const trigger = item.querySelector('[data-accordion-trigger]');
    const content = item.querySelector('[data-accordion-content]');
    const icon = item.querySelector('[data-accordion-icon]');

    if (!trigger || !content) {
        return;
    }

    trigger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');

    if (isOpen) {
        content.classList.remove('max-h-0');
        content.classList.add('max-h-80', 'pt-2', 'pb-4');
        content.hidden = false;
        if (icon) {
            icon.classList.add('rotate-180');
        }
    } else {
        content.classList.remove('max-h-80', 'pt-2', 'pb-4');
        content.classList.add('max-h-0');
        content.hidden = true;
        if (icon) {
            icon.classList.remove('rotate-180');
        }
    }
};

const initAccordions = () => {
    document.querySelectorAll('[data-accordion]').forEach((accordion) => {
        if (accordion.dataset.accordionBound === 'true') {
            return;
        }

        const singleMode = accordion.dataset.accordionSingle !== 'false';
        const items = Array.from(accordion.querySelectorAll('[data-accordion-item]'));

        items.forEach((item) => {
            const trigger = item.querySelector('[data-accordion-trigger]');
            const content = item.querySelector('[data-accordion-content]');

            if (!trigger || !content) {
                return;
            }

            const startsOpen = trigger.getAttribute('aria-expanded') === 'true';
            setAccordionItemState(item, startsOpen);

            trigger.addEventListener('click', () => {
                const isOpen = trigger.getAttribute('aria-expanded') === 'true';

                if (singleMode) {
                    items.forEach((other) => {
                        if (other !== item) {
                            setAccordionItemState(other, false);
                        }
                    });
                }

                setAccordionItemState(item, !isOpen);
            });
        });

        accordion.dataset.accordionBound = 'true';
    });
};

const initSliders = () => {
    document.querySelectorAll('[data-splide-posts]').forEach((slider) => {
        if (slider.dataset.sliderBound === 'true') {
            return;
        }

        const splide = new Splide(slider, {
            type: 'loop',
            perPage: 3,
            perMove: 1,
            gap: '0.5rem',
            autoplay: true,
            interval: 2800,
            pauseOnHover: true,
            pagination: true,
            arrows: true,
            breakpoints: {
                1024: {
                    perPage: 2,
                },
                640: {
                    perPage: 1,
                },
            },
        });

        splide.mount();
        slider.dataset.sliderBound = 'true';
    });
};

const initSite = () => {
    initNavbar();
    initAccordions();
    initSliders();
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initSite);
} else {
    initSite();
}
