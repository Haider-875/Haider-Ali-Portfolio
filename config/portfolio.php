<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Personal Brand Details
    |--------------------------------------------------------------------------
    */
    'owner' => [
        'name' => 'Haider Ali',
        'title' => 'Laravel & PHP Developer | Web Developer & UI/UX Designer',
        'subtitle' => 'Building refined digital experiences through design, code, and interaction.',
        'hero_tagline' => 'Laravel & PHP Developer crafting modern, responsive, and engaging web experiences.',
        'intro' => "I'm Haider Ali, a Web Developer & UI/UX Designer with over five years of experience. I specialize in Laravel and PHP development, building modern, responsive websites with clean interfaces and seamless user experiences.",
        'email' => 'Hadihnd0@gmail.com',
        'github' => 'https://github.com/haider-875',
        'portrait' => '/images/portrait/haider-portrait.webp',
        'portrait_fallback' => '/images/portrait/haider-portrait.jpg',
        'portrait_mob' => '/images/portrait/haider-portrait-mob.webp',
        'location' => 'Pakistan (Available Worldwide)',
        'availability' => 'Open for Freelance & Full-time Opportunities',
        'experience_years' => '5+',
        'completed_projects' => '30+',
    ],

    /*
    |--------------------------------------------------------------------------
    | Skills Taxonomy
    |--------------------------------------------------------------------------
    */
    'skills' => [
        'primary' => [
            'title' => 'Primary Expertise',
            'lead' => 'Core backend and framework technologies driving scalable web applications',
            'items' => [
                [
                    'name' => 'Laravel',
                    'level' => 'Senior / Core',
                    'description' => 'Architecting robust MVC web apps, Blade templating, Eloquent ORM, RESTful APIs, routing, queue handling, and authentication systems.',
                    'highlight' => true,
                ],
                [
                    'name' => 'PHP',
                    'level' => 'Advanced / 8.x',
                    'description' => 'Object-oriented programming, modern PHP 8.x attributes, types, clean design patterns, security best practices, and server-side processing.',
                    'highlight' => true,
                ],
                [
                    'name' => 'MySQL',
                    'level' => 'Advanced',
                    'description' => 'Relational database schema modeling, query optimization, migrations, indexing, and transactional integrity.',
                    'highlight' => true,
                ],
                [
                    'name' => 'Blade Templating',
                    'level' => 'Expert',
                    'description' => 'Crafting modular, reusable component-driven UI layouts with directives, slots, stacks, and server-rendered speed.',
                    'highlight' => true,
                ],
            ],
        ],
        'frontend' => [
            'title' => 'Frontend Development',
            'lead' => 'Semantic, responsive, and accessible client-side foundations',
            'items' => [
                [
                    'name' => 'HTML5',
                    'level' => 'Semantic & Accessible',
                    'description' => 'Clean markup, SEO best practices, schema integration, and WCAG accessibility compliance.',
                ],
                [
                    'name' => 'CSS3',
                    'level' => 'Modern & Responsive',
                    'description' => 'Fluid typography clamp(), custom properties (variables), Flexbox, CSS Grid, and custom animation styling.',
                ],
                [
                    'name' => 'JavaScript (ES6+)',
                    'level' => 'Vanilla / Modern',
                    'description' => 'DOM manipulation, asynchronous fetch APIs, event delegates, and interactive UI micro-interactions without bloated frameworks.',
                ],
                [
                    'name' => 'Bootstrap 5',
                    'level' => 'Advanced Grid & System',
                    'description' => 'Customized utility layering, fluid responsive breakpoints, and custom theming beyond default templates.',
                ],
                [
                    'name' => 'Responsive Web Design',
                    'level' => 'Pixel Perfect',
                    'description' => 'Mobile-first fluid layouts tested across modern smartphones, tablets, high-DPI displays, and ultra-wide screens.',
                ],
            ],
        ],
        'design_and_tools' => [
            'title' => 'Design & Tools',
            'lead' => 'Bridging creative concept design with developer-ready precision',
            'items' => [
                [
                    'name' => 'UI/UX Design',
                    'level' => 'Creative & Systematic',
                    'description' => 'User research, wireframing, high-fidelity design systems, intuitive visual hierarchies, and micro-interactions.',
                ],
                [
                    'name' => 'Figma',
                    'level' => 'Design Systems & Prototyping',
                    'description' => 'Interactive component libraries, auto-layout mastery, developer handoff specs, and responsive prototypes.',
                ],
                [
                    'name' => 'Git & GitHub',
                    'level' => 'Version Control',
                    'description' => 'Collaborative branch workflows, pull requests, semantic versioning, and continuous code hygiene.',
                ],
            ],
        ],
        'website_animations' => [
            'title' => 'Animation Technologies Used by This Website',
            'lead' => 'Selected libraries powering the cinematic interactive layer of this portfolio',
            'items' => [
                [
                    'name' => 'GSAP',
                    'note' => 'GreenSock Animation Platform powering timeline animations and performance-optimized canvas/DOM transitions.',
                ],
                [
                    'name' => 'ScrollTrigger',
                    'note' => 'Sculpting scroll-linked reveals, scrubbed pin states, and stagger entrances with zero jank.',
                ],
                [
                    'name' => 'Lenis',
                    'note' => 'Smooth inertia scrolling engine harmonized with GSAP animation triggers for an editorial feel.',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Showcase Projects
    |--------------------------------------------------------------------------
    */
    'projects' => [
        [
            'id' => 1,
            'title' => 'Azora Solutions',
            'slug' => 'azora-solutions',
            'client' => 'Azora Solutions',
            'year' => '2024',
            'category' => 'Corporate Web & Digital Agency',
            'tagline' => 'Strategic Digital Solutions & Corporate Technology Platform',
            'live_url' => 'https://azorasolution.com/',
            'featured' => true,
            'color' => '#3B82F6',
            'summary' => 'A premier digital enterprise platform engineered to showcase business advisory services, digital transformation roadmaps, and cutting-edge software solutions.',
            'overview' => 'Azora Solutions required an authoritative yet dynamic corporate presence capable of communicating high-tier advisory, software consulting, and digital products. The platform was designed with high readability, structured service cards, smooth interactive reveals, and a streamlined multi-step inquiry workflow that drives enterprise client acquisition.',
            'challenge' => 'The client had diverse service verticals ranging from cloud consulting to bespoke software development. The challenge was structuring extensive corporate technical offerings into a digestible, visually engaging narrative that would resonate with both C-level executives and technical procurement teams.',
            'solution' => 'Constructed an asymmetric editorial layout with rich typographic hierarchies, interactive service matrices, crisp dark-themed callouts, and clean contact conversion funnels. Implemented high-performance responsive styling to guarantee flawless rendering on desktop and mobile alike.',
            'deliverables' => [
                'Corporate Brand Identity Implementation',
                'Responsive Service Catalog & Architecture',
                'Interactive Contact & Consultation Funnel',
                'Performance Tuning & Mobile Optimization',
                'Cross-Browser & WCAG Accessibility Testing',
            ],
            'key_metrics' => [
                ['label' => 'Performance Score', 'value' => '98/100'],
                ['label' => 'Engagement Boost', 'value' => '+45%'],
                ['label' => 'Responsive Coverage', 'value' => '100%'],
            ],
            'technologies' => ['HTML5 / Semantic Markup', 'CSS3 Custom Properties', 'Bootstrap 5 Grid', 'JavaScript (ES6+)', 'Responsive Design'],
            'image_hero' => '/images/projects/azora-hero.jpg',
            'image_thumb' => '/images/projects/azora-thumb.jpg',
            'gallery' => [
                '/images/projects/azora-detail-1.jpg',
                '/images/projects/azora-detail-2.jpg',
            ],
        ],

        [
            'id' => 2,
            'title' => 'AZ Halal Marts',
            'slug' => 'az-halal-marts',
            'client' => 'AZ Halal Marts Inc.',
            'year' => '2024',
            'category' => 'E-Commerce & Retail Grocery',
            'tagline' => 'Premium Grocery & Halal Market Retail Experience',
            'live_url' => 'https://www.azmarts.com/',
            'featured' => true,
            'color' => '#10B981',
            'summary' => 'A modern retail grocery platform connecting communities with high-quality halal meats, fresh farm produce, and international pantry essentials.',
            'overview' => 'AZ Halal Marts is a trusted grocery chain focused on providing premium certified halal foods. The digital platform bridges physical grocery stores with neighborhood customers, featuring live weekly promotions, categorized product showcases, interactive store location finders, and direct community messaging.',
            'challenge' => 'Serving a fast-growing, culturally diverse customer base required clear visual categorization for hundreds of grocery items, rapid search responsiveness, and effortless store navigation on mobile devices used by shoppers on the go.',
            'solution' => 'Engineered a warm, community-first visual identity utilizing appetizing natural accents, instant category filters, location-aware store directions, and mobile-friendly tap targets designed for quick shopping lookups.',
            'deliverables' => [
                'Retail Catalog UI/UX Design',
                'Weekly Deals & Promotions Showcase',
                'Interactive Store Locator & Hours',
                'Mobile-First Touch Navigation',
                'Direct Customer Order & Inquiry Channel',
            ],
            'key_metrics' => [
                ['label' => 'Mobile User Ratio', 'value' => '72%'],
                ['label' => 'Store Visit Queries', 'value' => '+60%'],
                ['label' => 'Page Load Time', 'value' => '< 1.2s'],
            ],
            'technologies' => ['HTML5', 'CSS3', 'Bootstrap 5', 'JavaScript (ES6+)', 'UI/UX Design', 'Figma Prototyping'],
            'image_hero' => '/images/projects/azmarts-hero.jpg',
            'image_thumb' => '/images/projects/azmarts-thumb.jpg',
            'gallery' => [
                '/images/projects/azmarts-detail-1.jpg',
                '/images/projects/azmarts-detail-2.jpg',
            ],
        ],

        [
            'id' => 3,
            'title' => 'North Fork Auto',
            'slug' => 'north-fork-auto',
            'client' => 'North Fork Auto Group',
            'year' => '2024',
            'category' => 'Automotive Dealership & Inventory',
            'tagline' => 'Automotive Dealership & Inventory Management Showcase',
            'live_url' => 'https://northforkauto.com/',
            'featured' => true,
            'color' => '#F59E0B',
            'summary' => 'An automotive dealership showcase presenting certified pre-owned vehicles, transparent financing tools, and service booking channels.',
            'overview' => 'North Fork Auto needed a commanding digital showroom that builds trust with automotive buyers. The website showcases certified pre-owned cars, trucks, and SUVs with comprehensive vehicle histories, high-resolution visual galleries, transparent pricing badges, and automated test-drive scheduling.',
            'challenge' => 'Car buyers demand immediate transparency regarding vehicle specs, mileage, warranty, and pricing. Presenting rich technical specs without cluttering the screen on smaller devices was paramount to maintaining high lead conversion.',
            'solution' => 'Designed an inventory layout with faceted specification cards, sticky inquiry action bars, seamless photo carousel views, and direct phone/message integration for immediate dealer sales follow-up.',
            'deliverables' => [
                'Automotive Digital Showroom UI',
                'Vehicle Spec Comparison Cards',
                'Financing Inquiry & Test Drive Workflows',
                'Optimized Image Gallery Presentation',
                'Fast Lead Capture Integration',
            ],
            'key_metrics' => [
                ['label' => 'Inquiry Conversion', 'value' => '+38%'],
                ['label' => 'Inventory Browsing Depth', 'value' => '4.8 pgs'],
                ['label' => 'Mobile Speed Index', 'value' => '96/100'],
            ],
            'technologies' => ['HTML5', 'CSS3', 'Bootstrap 5 Grid', 'JavaScript (ES6+)', 'Responsive Layouts'],
            'image_hero' => '/images/projects/northfork-hero.jpg',
            'image_thumb' => '/images/projects/northfork-thumb.jpg',
            'gallery' => [
                '/images/projects/northfork-detail-1.jpg',
                '/images/projects/northfork-detail-2.jpg',
            ],
        ],

        [
            'id' => 4,
            'title' => 'Care Source Indy',
            'slug' => 'care-source-indy',
            'client' => 'Care Source Indianapolis',
            'year' => '2023',
            'category' => 'Healthcare & Patient Community Services',
            'tagline' => 'Compassionate Healthcare & Community Support Services',
            'live_url' => 'https://caresourceindy.com/',
            'featured' => true,
            'color' => '#06B6D4',
            'summary' => 'An accessible, empathetic healthcare portal providing medical support resources, Medicaid plan guidance, and wellness community assistance.',
            'overview' => 'Care Source Indy is dedicated to bridging healthcare disparities in urban communities. The platform provides easy-to-understand health insurance guidance, wellness checkup scheduling, patient advocacy programs, and local community outreach events.',
            'challenge' => 'Healthcare portals must prioritize empathy, accessibility, and simplicity. Patients of all age demographics, including individuals with low vision or digital hesitancy, needed to find vital care resources in under three clicks.',
            'solution' => 'Implemented high-contrast visual hierarchies, generous tap zones, plain-language service groupings, emergency hotline callout cards, and full WCAG AA accessibility compliance across all interactive elements.',
            'deliverables' => [
                'Accessible Healthcare Information Architecture',
                'Patient Resource Directory & Plan Explanations',
                'Emergency Care & Support Quick-Action Modules',
                'WCAG AA Compliance & High Contrast Theming',
                'Community Wellness Event Calendar Layouts',
            ],
            'key_metrics' => [
                ['label' => 'Accessibility Rating', 'value' => 'WCAG AA'],
                ['label' => 'Task Completion Rate', 'value' => '94%'],
                ['label' => 'Average Load Time', 'value' => '1.0s'],
            ],
            'technologies' => ['HTML5 Semantic', 'CSS3', 'Bootstrap 5', 'Vanilla JavaScript', 'Accessibility / a11y'],
            'image_hero' => '/images/projects/caresource-hero.jpg',
            'image_thumb' => '/images/projects/caresource-thumb.jpg',
            'gallery' => [
                '/images/projects/caresource-detail-1.jpg',
                '/images/projects/caresource-detail-2.jpg',
            ],
        ],

        [
            'id' => 5,
            'title' => 'Perfumes Collection',
            'slug' => 'perfumes-collection',
            'client' => 'Artisan Parfumerie Collective',
            'year' => '2024',
            'category' => 'Luxury E-Commerce & Scent Showcase',
            'tagline' => 'Luxury Fragrance Catalog & Curated Scent Showcase',
            'live_url' => 'https://perfume-collection.wasmer.app/',
            'featured' => true,
            'color' => '#EC4899',
            'summary' => 'An haute-parfumerie digital boutique celebrating rare fragrances, olfactory notes, and bespoke scent craftsmanship.',
            'overview' => 'Perfumes Collection delivers an immersive luxury shopping experience for fragrance connoisseurs. It presents haute couture perfumes through sensual aesthetics, detailing top, heart, and base notes alongside creator stories, bottle craftsmanship, and collector editions.',
            'challenge' => 'Conveying the invisible, sensory world of fragrance on a digital screen requires exceptional visual romance, refined serif typography, and tactile micro-interactions that evoke luxury.',
            'solution' => 'Crafted an editorial-style dark boutique featuring bespoke olfactory pyramid breakdowns, golden metallic accents, atmospheric image masks, and smooth card transitions that replicate browsing a high-end Parisian atelier.',
            'deliverables' => [
                'Haute Parfumerie Digital Design System',
                'Interactive Olfactory Pyramid (Top/Heart/Base Notes)',
                'Curated Scent Discovery Gallery',
                'Luxury Micro-interactions & Smooth Transitions',
                'Responsive High-DPI Visual Presentation',
            ],
            'key_metrics' => [
                ['label' => 'Visual Engagement', 'value' => '+52%'],
                ['label' => 'Product Card Hover Rate', 'value' => '68%'],
                ['label' => 'Editorial Aesthetic', 'value' => 'Bespoke'],
            ],
            'technologies' => ['HTML5', 'CSS3 Custom Theme', 'Bootstrap 5 Grid', 'JavaScript (ES6+)', 'UI/UX Design'],
            'image_hero' => '/images/projects/perfume-hero.jpg',
            'image_thumb' => '/images/projects/perfume-thumb.jpg',
            'gallery' => [
                '/images/projects/perfume-detail-1.jpg',
                '/images/projects/perfume-detail-2.jpg',
            ],
        ],

        [
            'id' => 6,
            'title' => 'Mukoh Tires',
            'slug' => 'mukoh-tires',
            'client' => 'Mukoh Heavy Duty Equipment',
            'year' => '2024',
            'category' => 'Industrial Automotive & Heavy Equipment',
            'tagline' => 'Heavy-Duty Commercial & Industrial Tire Solutions',
            'live_url' => 'https://mukoh-demowebsite.netlify.app/',
            'featured' => true,
            'color' => '#E11D48',
            'summary' => 'A rugged commercial product platform showcasing heavy-duty industrial tires, tread engineering, and wholesale supplier quotes.',
            'overview' => 'Mukoh Tires manufactures extreme-durability tires for construction, mining, agriculture, and commercial freight fleets. The digital platform provides fleet managers and equipment distributors with instant access to load-rating specs, ply counts, tread depths, and wholesale bulk quote requests.',
            'challenge' => 'Industrial buyers prioritize raw technical specs, durability ratings, and rapid quote turnarounds. The platform needed to communicate heavy-duty reliability while keeping technical specification tables clear and easy to navigate on job-site tablets.',
            'solution' => 'Designed a bold industrial aesthetic with high-visibility contrast, structured technical comparison tables, tread pattern deep-dive zooms, and a streamlined rapid wholesale quote estimator.',
            'deliverables' => [
                'Industrial Brand Presence & UI Architecture',
                'Tire Specification & Durability Matrix',
                'Wholesale Distributor Quote Request System',
                'Fleet Tire Selection Filter',
                'Responsive Job-Site Ready Layouts',
            ],
            'key_metrics' => [
                ['label' => 'Fleet Quote Requests', 'value' => '+41%'],
                ['label' => 'Spec Sheet Downloads', 'value' => '3.5k+'],
                ['label' => 'Device Adaptability', 'value' => '100%'],
            ],
            'technologies' => ['HTML5', 'CSS3', 'Bootstrap 5 Utilities', 'Vanilla JavaScript', 'Responsive Design'],
            'image_hero' => '/images/projects/mukoh-hero.jpg',
            'image_thumb' => '/images/projects/mukoh-thumb.jpg',
            'gallery' => [
                '/images/projects/mukoh-detail-1.jpg',
                '/images/projects/mukoh-detail-2.jpg',
            ],
        ],
    ],
];
