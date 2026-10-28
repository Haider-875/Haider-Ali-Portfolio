import gsap from 'gsap';

export function initHeroAnimation() {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion) return;

    const heroTitle = document.querySelector('.hero-editorial-title');
    if (!heroTitle) return;

    const tl = gsap.timeline({
        defaults: { ease: 'power4.out' },
        delay: 0.2
    });

    // 1. Navbar fades into view
    tl.fromTo('.site-nav',
        { opacity: 0, y: -20 },
        { opacity: 1, y: 0, duration: 0.7 }
    );

    // 2. HAIDER animates upward through clean text mask
    const haiderLine = document.querySelector('.line-haider .text-mask-inner');
    if (haiderLine) {
        tl.fromTo(haiderLine,
            { y: '115%', opacity: 0 },
            { y: '0%', opacity: 1, duration: 0.9 },
            '-=0.4'
        );
    }

    // 3. ALI. follows with slightly delayed timing
    const aliLine = document.querySelector('.line-ali .text-mask-inner');
    if (aliLine) {
        tl.fromTo(aliLine,
            { y: '115%', opacity: 0 },
            { y: '0%', opacity: 1, duration: 0.9 },
            '-=0.65'
        );
    }

    // 4. Portrait reveals through a smooth vertical mask
    const portraitMask = document.querySelector('.portrait-reveal-mask');
    const portraitPhoto = document.querySelector('.portrait-photo');
    if (portraitMask) {
        tl.to(portraitMask, {
            onStart: () => portraitMask.classList.add('revealed'),
            duration: 0.1
        }, '-=0.6');

        if (portraitPhoto) {
            tl.fromTo(portraitPhoto,
                { scale: 1.08 },
                { scale: 1.0, duration: 1.2, ease: 'power3.out' },
                '-=0.6'
            );
        }
    }

    // 5. Supporting copy & role lead fade in
    tl.fromTo(['.hero-role-lead', '.hero-supporting-line'],
        { opacity: 0, y: 25 },
        { opacity: 1, y: 0, duration: 0.7, stagger: 0.12 },
        '-=0.5'
    );

    // 6. Lime accent elements appear last
    tl.fromTo('.badge-editorial',
        { opacity: 0, scale: 0.9, y: 12 },
        { opacity: 1, scale: 1, y: 0, duration: 0.45, stagger: 0.06, ease: 'back.out(1.4)' },
        '-=0.3'
    );

    tl.fromTo(['.btn-editorial-primary', '.btn-editorial-secondary'],
        { opacity: 0, y: 15 },
        { opacity: 1, y: 0, duration: 0.55, stagger: 0.1 },
        '-=0.2'
    );

    tl.fromTo('.hero-footer-index',
        { opacity: 0 },
        { opacity: 1, duration: 0.8 },
        '-=0.3'
    );

    return tl;
}
