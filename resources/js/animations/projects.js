import gsap from 'gsap';

export function initProjectInteractions() {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion) return;

    // Desktop Magnetic Buttons
    if (window.innerWidth > 992) {
        const magneticBtns = document.querySelectorAll('.magnetic-btn');
        magneticBtns.forEach(btn => {
            btn.addEventListener('mousemove', (e) => {
                const rect = btn.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;

                gsap.to(btn, {
                    x: x * 0.35,
                    y: y * 0.35,
                    duration: 0.3,
                    ease: 'power2.out',
                });
            });

            btn.addEventListener('mouseleave', () => {
                gsap.to(btn, {
                    x: 0,
                    y: 0,
                    duration: 0.5,
                    ease: 'elastic.out(1, 0.4)',
                });
            });
        });
    }

    // Interactive Category Filter for Work page
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectItems = document.querySelectorAll('.project-grid-item');

    if (filterBtns.length > 0 && projectItems.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.dataset.filter;

                projectItems.forEach(item => {
                    const category = item.dataset.category || '';
                    if (filter === 'all' || category.toLowerCase().includes(filter.toLowerCase())) {
                        gsap.to(item, {
                            opacity: 1,
                            scale: 1,
                            duration: 0.4,
                            ease: 'power2.out',
                            onStart: () => item.classList.remove('d-none'),
                        });
                    } else {
                        gsap.to(item, {
                            opacity: 0,
                            scale: 0.95,
                            duration: 0.3,
                            ease: 'power2.in',
                            onComplete: () => item.classList.add('d-none'),
                        });
                    }
                });
            });
        });
    }
}

