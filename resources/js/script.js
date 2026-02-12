import Splide from '@splidejs/splide';
import Quill from 'quill';

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
    const mountSlider = (selector, overrides = {}) => {
        document.querySelectorAll(selector).forEach((slider) => {
            if (slider.dataset.sliderBound === 'true') {
                return;
            }

            const splide = new Splide(slider, {
                type: 'loop',
                perPage: 3,
                perMove: 1,
                gap: '1rem',
                autoplay: true,
                interval: 3200,
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
                ...overrides,
            });

            splide.mount();
            slider.dataset.sliderBound = 'true';
        });
    };

    mountSlider('[data-splide-posts]');
    mountSlider('[data-splide-projects]', {
        perPage: 2,
        interval: 3800,
        breakpoints: {
            1024: {
                perPage: 2,
            },
            640: {
                perPage: 1,
            },
        },
    });
};

const initLocaleTabs = () => {
    document.querySelectorAll('[data-locale-tabs]').forEach((tabs) => {
        if (tabs.dataset.tabsBound === 'true') {
            return;
        }

        const buttons = Array.from(tabs.querySelectorAll('[data-locale-tab-button]'));
        const panels = Array.from(tabs.querySelectorAll('[data-locale-tab-panel]'));
        const activeLocaleInput = tabs.querySelector('[data-locale-active-input]');

        if (!buttons.length || !panels.length) {
            return;
        }

        const setActiveTab = (locale) => {
            const activeLocale = panels.some((panel) => panel.dataset.localeTabPanel === locale)
                ? locale
                : buttons[0].dataset.localeTabButton;

            buttons.forEach((button) => {
                const isActive = button.dataset.localeTabButton === activeLocale;
                button.classList.toggle('bg-slate-900', isActive);
                button.classList.toggle('border-slate-900', isActive);
                button.classList.toggle('text-white', isActive);
                button.classList.toggle('text-slate-600', !isActive);
                button.classList.toggle('border-slate-300', !isActive);
            });

            panels.forEach((panel) => {
                panel.hidden = panel.dataset.localeTabPanel !== activeLocale;
            });

            if (activeLocaleInput) {
                activeLocaleInput.value = activeLocale;
            }
        };

        buttons.forEach((button) => {
            button.addEventListener('click', () => {
                setActiveTab(button.dataset.localeTabButton);
            });
        });

        setActiveTab(tabs.dataset.initialLocale || activeLocaleInput?.value || buttons[0].dataset.localeTabButton);
        tabs.dataset.tabsBound = 'true';
    });
};

const initQuillEditors = () => {
    const toolbarOptions = [
        [{ header: [2, 3, false] }],
        ['bold', 'italic', 'underline', 'strike'],
        [{ list: 'ordered' }, { list: 'bullet' }],
        ['blockquote', 'code-block', 'link'],
        ['clean'],
    ];

    document.querySelectorAll('[data-quill-editor]').forEach((editor) => {
        if (editor.dataset.quillBound === 'true') {
            return;
        }

        const panel = editor.closest('[data-locale-tab-panel]');
        const input = panel?.querySelector('[data-quill-input]');

        if (!input) {
            return;
        }

        const quill =new Quill(editor, {
            theme: 'snow',
            modules: {
                // imageResize is removed from here
                toolbar: [
                    [{'header': [1, 2, 3, 4, 5, 6, false]}],
                    [{'font': []}],
                    [{'size': ['small', false, 'large', 'huge']}],
                    ['bold', 'italic', 'underline', 'strike'],
                    ['blockquote'],
                    [{'color': []}, {'background': []}],
                    [{'script': 'sub'}, {'script': 'super'}],
                    [{'list': 'ordered'}, {'list': 'bullet'}],
                    [{'indent': '-1'}, {'indent': '+1'}],
                    [{'direction': 'rtl'}],
                    [{'align': []}],
                    ['link', 'image', 'video'],
                    ['clean']
                ]
            },
            // Maximum compatible formats for Quill 2.0.3
            formats: [
                'header', 'font', 'size',
                'bold', 'italic', 'underline', 'strike',
                'color', 'background',
                'script', 'blockquote',
                'list', 'indent', 'direction',
                'align', 'link', 'image', 'video'
            ]
        });

        if (input.value) {
            quill.clipboard.dangerouslyPasteHTML(input.value);
            quill.setSelection(quill.getLength(), 0);
        }

        const syncInput = () => {
            input.value = quill.getText().trim().length === 0 ? '' : quill.getSemanticHTML();
        };

        syncInput();
        quill.on('text-change', syncInput);

        editor.__quill = quill;
        editor.dataset.quillBound = 'true';
    });

    document.querySelectorAll('form').forEach((form) => {
        if (form.dataset.quillSubmitBound === 'true') {
            return;
        }

        const editors = form.querySelectorAll('[data-quill-editor]');

        if (!editors.length) {
            return;
        }

        form.addEventListener('submit', () => {
            editors.forEach((editor) => {
                if (!editor.__quill) {
                    return;
                }

                const panel = editor.closest('[data-locale-tab-panel]');
                const input = panel?.querySelector('[data-quill-input]');

                if (input) {
                    input.value = editor.__quill.getText().trim().length === 0 ? '' : editor.__quill.getSemanticHTML();
                }
            });
        });

        form.dataset.quillSubmitBound = 'true';
    });
};

const initSite = () => {
    initNavbar();
    initAccordions();
    initSliders();
    initQuillEditors();
    initLocaleTabs();
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initSite);
} else {
    initSite();
}
