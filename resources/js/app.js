import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
    const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // 1. Footer Year
    const yearEl = document.getElementById('year');
    if (yearEl) {
        yearEl.textContent = new Date().getFullYear();
    }

    // 2. Header Scroll State
    const header = document.getElementById('site-header');
    if (header) {
        const updateHeader = () => header.classList.toggle('scrolled', window.scrollY > 30);
        window.addEventListener('scroll', updateHeader, { passive: true });
        updateHeader();
    }

    // 3. Mobile Navigation Menu
    const toggle = document.querySelector('.menu-toggle');
    const mobileNav = document.getElementById('mobile-nav');
    if (toggle && mobileNav) {
        const setMenu = (open) => {
            toggle.classList.toggle('open', open);
            toggle.setAttribute('aria-expanded', String(open));
            toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
            mobileNav.classList.toggle('open', open);
            mobileNav.inert = !open;
            document.body.style.overflow = open ? 'hidden' : '';
            if (open) {
                const firstLink = mobileNav.querySelector('a');
                if (firstLink) firstLink.focus();
            } else {
                toggle.focus();
            }
        };

        toggle.addEventListener('click', () => setMenu(!mobileNav.classList.contains('open')));
        mobileNav.querySelectorAll('a').forEach(link => link.addEventListener('click', () => setMenu(false)));
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mobileNav.classList.contains('open')) setMenu(false);
        });
    }

    // 4. Page Loader & Entrance Animations
    const loader = document.querySelector('.page-loader');
    const hideLoader = () => {
        if (loader) {
            loader.classList.add('loaded');
            setTimeout(() => { loader.style.display = 'none'; }, 500);
        }
        document.body.classList.add('js-ready');
    };

    if (reduced) {
        hideLoader();
        document.querySelectorAll('.reveal').forEach(el => el.classList.add('is-visible'));
        return;
    }

    // GSAP Loader Timeline
    if (loader) {
        const tl = gsap.timeline({ onComplete: hideLoader });
        tl.to('.page-loader > span', { y: -18, opacity: 0, duration: 0.35, delay: 0.15 })
          .to('.loader-line', { scaleX: 0, transformOrigin: 'right', duration: 0.32 }, '<')
          .to('.page-loader', { yPercent: -101, duration: 0.75, ease: 'power3.inOut' });

        // Hero Entrance
        gsap.from('.hero-name.first .name-mask > span', { yPercent: 105, duration: 1.15, delay: 0.95, ease: 'power4.out' });
        gsap.from('.hero-name.last .name-mask > span', { yPercent: 105, duration: 1.15, delay: 1.12, ease: 'power4.out' });
        gsap.from('.hero-portrait img', { scale: 1.08, opacity: 0, duration: 1.5, delay: 0.85, ease: 'power3.out' });
        gsap.from('.hero-topline, .hero-bottom', { y: 16, opacity: 0, duration: 0.85, delay: 1.3, stagger: 0.13 });
    } else {
        hideLoader();
    }

    // 5. ScrollTrigger Reveals
    document.querySelectorAll('.reveal').forEach(el => {
        ScrollTrigger.create({
            trigger: el,
            start: 'top 90%',
            once: true,
            onEnter: () => el.classList.add('is-visible')
        });
    });

    ScrollTrigger.refresh();

    // 6. Active Nav Highlighting via IntersectionObserver
    const sections = document.querySelectorAll('section[id]');
    if ('IntersectionObserver' in window && sections.length > 0) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                document.querySelectorAll('.desktop-nav a').forEach(a => {
                    a.classList.toggle('active', a.getAttribute('href') === '#' + entry.target.id);
                });
            });
        }, { rootMargin: '-25% 0px -65% 0px' });

        sections.forEach(s => observer.observe(s));
    }

    // 7. Futuristic Dropdown Menu with Colors
    const selectContainers = document.querySelectorAll('.custom-select-container');
    selectContainers.forEach(container => {
        const trigger = container.querySelector('.custom-select-trigger');
        const menu = container.querySelector('.custom-select-menu');
        const nativeSelect = container.querySelector('select');
        const options = container.querySelectorAll('.custom-option');
        const selectedText = trigger?.querySelector('.selected-text');
        const selectedDot = trigger?.querySelector('.option-color-dot');

        if (!trigger || !menu || !nativeSelect) return;

        const setSelectValue = (value, label, colorClass) => {
            nativeSelect.value = value;
            nativeSelect.dispatchEvent(new Event('change', { bubbles: true }));
            if (selectedText) selectedText.textContent = label;
            if (selectedDot) {
                selectedDot.className = 'option-color-dot ' + (colorClass || 'dot-neutral');
            }

            options.forEach(opt => {
                const isSelected = opt.getAttribute('data-value') === value;
                opt.setAttribute('aria-selected', isSelected ? 'true' : 'false');
                opt.classList.toggle('is-selected', isSelected);
            });
        };

        // Initialize from pre-selected or old() value
        const initialOpt = Array.from(options).find(opt => opt.getAttribute('data-value') === nativeSelect.value) || options[0];
        if (initialOpt) {
            const val = initialOpt.getAttribute('data-value');
            const lbl = initialOpt.querySelector('.option-label')?.textContent || initialOpt.textContent.trim();
            const dot = initialOpt.querySelector('.option-color-dot')?.className.replace('option-color-dot', '').trim();
            setSelectValue(val, lbl, dot);
        }

        const toggleMenu = (open) => {
            const isOpen = open !== undefined ? open : !container.classList.contains('is-open');
            container.classList.toggle('is-open', isOpen);
            trigger.setAttribute('aria-expanded', String(isOpen));
        };

        trigger.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleMenu();
        });

        options.forEach(opt => {
            opt.addEventListener('click', (e) => {
                e.stopPropagation();
                const value = opt.getAttribute('data-value');
                const label = opt.querySelector('.option-label')?.textContent || opt.textContent.trim();
                const dotClass = opt.querySelector('.option-color-dot')?.className.replace('option-color-dot', '').trim();
                setSelectValue(value, label, dotClass);
                toggleMenu(false);
                trigger.focus();
            });
        });

        document.addEventListener('click', (e) => {
            if (!container.contains(e.target)) {
                toggleMenu(false);
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && container.classList.contains('is-open')) {
                toggleMenu(false);
                trigger.focus();
            }
        });
    });
});
