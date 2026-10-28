import gsap from 'gsap';

export function initNavigation() {
    // 1. Scroll-aware Navbar
    const nav = document.querySelector('.site-nav');
    if (nav) {
        const handleScroll = () => {
            if (window.scrollY > 40) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        };

        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll();
    }

    // 2. Mobile Fullscreen Navigation Overlay
    const mobileToggle = document.querySelector('.mobile-hamburger');
    const mobileClose = document.querySelector('.mobile-nav-close');
    const mobileOverlay = document.querySelector('.mobile-nav-overlay');
    const mobileLinks = document.querySelectorAll('.mobile-nav-list li');

    if (mobileToggle && mobileOverlay) {
        const openMenu = () => {
            mobileOverlay.classList.add('open');
            document.body.style.overflow = 'hidden';

            gsap.fromTo(mobileLinks,
                { opacity: 0, y: 25 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.45,
                    stagger: 0.07,
                    ease: 'power3.out',
                    delay: 0.1,
                }
            );
        };

        const closeMenu = () => {
            mobileOverlay.classList.remove('open');
            document.body.style.overflow = '';
        };

        mobileToggle.addEventListener('click', openMenu);
        if (mobileClose) mobileClose.addEventListener('click', closeMenu);

        mobileLinks.forEach(link => {
            link.addEventListener('click', closeMenu);
        });
    }

    // 3. Custom Cursor (Desktop only, fine pointer)
    const cursor = document.querySelector('.custom-cursor');
    if (cursor && window.matchMedia('(pointer: fine)').matches) {
        const dot = cursor.querySelector('.cursor-dot');
        const ring = cursor.querySelector('.cursor-ring');

        let mouseX = -100;
        let mouseY = -100;
        let ringX = -100;
        let ringY = -100;

        window.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
            dot.style.transform = `translate(${mouseX}px, ${mouseY}px)`;
        });

        const renderRing = () => {
            ringX += (mouseX - ringX) * 0.18;
            ringY += (mouseY - ringY) * 0.18;
            ring.style.transform = `translate(${ringX}px, ${ringY}px)`;
            requestAnimationFrame(renderRing);
        };
        requestAnimationFrame(renderRing);

        const interactiveTargets = document.querySelectorAll('a, button, input, textarea, select, .project-editorial-item, .skill-editorial-block, .btn-editorial-primary, .btn-editorial-secondary');
        interactiveTargets.forEach(el => {
            el.addEventListener('mouseenter', () => ring.classList.add('cursor-hover'));
            el.addEventListener('mouseleave', () => ring.classList.remove('cursor-hover'));
        });
    }

    // 4. Preloader Dismissal
    const preloader = document.getElementById('preloader');
    if (preloader) {
        window.addEventListener('load', () => {
            setTimeout(() => {
                preloader.classList.add('loaded');
            }, 350);
        });

        setTimeout(() => {
            if (!preloader.classList.contains('loaded')) {
                preloader.classList.add('loaded');
            }
        }, 1000);
    }
}
