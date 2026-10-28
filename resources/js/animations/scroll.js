import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import Lenis from 'lenis';

gsap.registerPlugin(ScrollTrigger);

let lenisInstance = null;

export function initScrollAnimations() {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Optional Lenis smooth scrolling (disabled for reduced-motion)
    if (!prefersReducedMotion) {
        try {
            lenisInstance = new Lenis({
                duration: 1.1,
                easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
                smoothWheel: true,
                touchMultiplier: 1.5,
            });

            lenisInstance.on('scroll', ScrollTrigger.update);

            gsap.ticker.add((time) => {
                lenisInstance.raf(time * 1000);
            });

            gsap.ticker.lagSmoothing(0);
        } catch (e) {
            console.warn('Lenis smooth scrolling not active:', e);
        }
    }

    if (prefersReducedMotion) {
        document.querySelectorAll('[data-reveal]').forEach(el => el.classList.add('is-revealed'));
        return;
    }

    // Reveal elements on scroll using ScrollTrigger
    const revealElements = document.querySelectorAll('[data-reveal]');
    revealElements.forEach(el => {
        const direction = el.dataset.reveal || 'fade-up';
        let xVal = 0;
        let yVal = 40;

        if (direction === 'fade-right') {
            xVal = -40;
            yVal = 0;
        } else if (direction === 'fade-left') {
            xVal = 40;
            yVal = 0;
        }

        gsap.fromTo(el,
            { opacity: 0, x: xVal, y: yVal },
            {
                opacity: 1,
                x: 0,
                y: 0,
                duration: 0.9,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: el,
                    start: 'top 88%',
                    toggleActions: 'play none none none',
                    once: true,
                    onEnter: () => el.classList.add('is-revealed'),
                }
            }
        );
    });

    // Staggered reveal for grid cards (skills & project items)
    const cardGrids = document.querySelectorAll('.stagger-grid');
    cardGrids.forEach(grid => {
        const cards = grid.children;
        gsap.fromTo(cards,
            { opacity: 0, y: 35 },
            {
                opacity: 1,
                y: 0,
                duration: 0.7,
                stagger: 0.12,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: grid,
                    start: 'top 85%',
                    once: true,
                }
            }
        );
    });

    // Image reveal masks
    const maskedImages = document.querySelectorAll('.image-reveal-mask');
    maskedImages.forEach(mask => {
        ScrollTrigger.create({
            trigger: mask,
            start: 'top 85%',
            once: true,
            onEnter: () => mask.classList.add('revealed')
        });
    });
}

export function cleanupScroll() {
    if (lenisInstance) {
        lenisInstance.destroy();
        lenisInstance = null;
    }
    ScrollTrigger.getAll().forEach(trigger => trigger.kill());
}

