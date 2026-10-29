@extends('layouts.app')

@section('title', 'Haider Ali® — Creative Web Developer | Laravel & PHP')
@section('meta_description', 'Haider Ali — Laravel & PHP Developer and UI/UX Designer. Selected work, skills and creative digital experiences.')

@section('content')
<!-- Hero Section -->
<section class="hero" id="home" aria-label="Introduction">
  <div class="hero-grid" aria-hidden="true"></div>
  <div class="hero-portrait">
    <picture>
      <source srcset="{{ asset('images/portrait/haider-portrait.webp') }}" type="image/webp">
      <img src="{{ asset('images/portrait/haider-portrait.jpg') }}" alt="Portrait of Haider Ali" width="720" height="1280" fetchpriority="high">
    </picture>
  </div>
  <div class="hero-topline page-gutter">
    <span class="hero-tag">INDEPENDENT WEB DEVELOPER</span>
    <span class="hero-meta">PORTFOLIO / 2026</span>
  </div>
  <div class="hero-type page-gutter" aria-label="HAIDER ALI">
    <div class="hero-name first" data-text="HAIDER">
      <span class="name-mask">
        <span>HAID<span class="outline-text">ER</span></span>
      </span>
    </div>
    <div class="hero-name last" data-text="ALI.">
      <span class="name-mask">
        <span><span class="outline-text">ALI</span><span class="name-period">.</span></span>
      </span>
    </div>
  </div>
  <div class="hero-bottom page-gutter">
    <div class="hero-role">LARAVEL &amp; PHP DEVELOPER<br><span class="hero-role-badge">WEB DEVELOPER / UI/UX DESIGNER</span></div>
    <p>Creating meaningful digital experiences through <em>design, development</em> and attention to detail.</p>
    <a class="scroll-cue" href="#work">SCROLL TO EXPLORE</a>
  </div>
</section>

<!-- 01 The Introduction -->
<section class="intro-section section-wrap" aria-labelledby="intro-title">
  <div class="section-eyebrow reveal">THE INTRODUCTION</div>
  <div class="row intro-layout g-4">
    <div class="col-lg-4">
      <p class="muted reveal intro-aside">A thoughtful approach to<br>technology &amp; design.</p>
    </div>
    <div class="col-lg-8">
      <h2 id="intro-title" class="intro-heading reveal">
        I BUILD <span>WEB</span> EXPERIENCES THAT <br><span class="highlight-bar">FEEL AS GOOD</span> AS THEY WORK<span class="white-dot">.</span>
      </h2>
      <a href="#about" class="underlined-link reveal">MORE ABOUT ME</a>
    </div>
  </div>
</section>

<!-- 02 Featured Work -->
<section class="work-section section-wrap" id="work" aria-labelledby="work-title">
  <div class="section-rule"></div>
  <div class="section-heading-row reveal">
    <div>
      <p class="section-eyebrow">FEATURED WORK</p>
      <h2 id="work-title" class="display-heading">SELECTED <span class="highlight-bar">WORK</span><span class="white-dot">.</span></h2>
    </div>
    <p>A selection of websites I've worked on.<br>Explore the live experiences.</p>
  </div>

  <div class="project-list">
    <!-- 01 Azora Solutions -->
    <div class="project reveal" data-project="azora-solutions">
      <span class="project-num">01 / 07</span>
      <div class="project-main">
        <h3><a href="{{ route('projects.show', 'azora-solutions') }}" class="project-title-link">AZORA <span>SOLUTIONS</span></a></h3>
        <p>BUSINESS / DIGITAL SOLUTIONS</p>
        <div class="project-actions">
          <a href="https://azorasolution.com/" target="_blank" rel="noopener noreferrer" class="btn-project-live" aria-label="Visit Azora Solutions live website">
            <span class="action-pulse" aria-hidden="true"></span>
            <span>VISIT LIVE SITE</span>
          </a>
          <a href="{{ route('projects.show', 'azora-solutions') }}" class="btn-project-case" aria-label="View Azora Solutions architecture">
            <span>VIEW ARCHITECTURE</span>
          </a>
        </div>
      </div>
      <div class="project-preview preview-azora" aria-hidden="true">
        <small>AZORA</small>
        <b>Business,<br>made better.</b>
        <span>EXPLORE SOLUTIONS</span>
      </div>
    </div>

    <!-- 02 AZ Halal Marts -->
    <div class="project reveal" data-project="az-halal-marts">
      <span class="project-num">02 / 07</span>
      <div class="project-main">
        <h3><a href="{{ route('projects.show', 'az-halal-marts') }}" class="project-title-link">AZ <span>HALAL MARTS</span></a></h3>
        <p>GROCERY / RETAIL</p>
        <div class="project-actions">
          <a href="https://www.azmarts.com/" target="_blank" rel="noopener noreferrer" class="btn-project-live" aria-label="Visit AZ Halal Marts live website">
            <span class="action-pulse" aria-hidden="true"></span>
            <span>VISIT LIVE SITE</span>
          </a>
          <a href="{{ route('projects.show', 'az-halal-marts') }}" class="btn-project-case" aria-label="View AZ Halal Marts architecture">
            <span>VIEW ARCHITECTURE</span>
          </a>
        </div>
      </div>
      <div class="project-preview preview-mart" aria-hidden="true">
        <small>AZ MARTS</small>
        <b>Freshness,<br>delivered.</b>
        <span>SHOP THE COLLECTION</span>
      </div>
    </div>

    <!-- 03 North Fork Auto -->
    <div class="project reveal" data-project="north-fork-auto">
      <span class="project-num">03 / 07</span>
      <div class="project-main">
        <h3><a href="{{ route('projects.show', 'north-fork-auto') }}" class="project-title-link">NORTH <span>FORK AUTO</span></a></h3>
        <p>AUTOMOTIVE / WEB</p>
        <div class="project-actions">
          <a href="https://northforkauto.com/" target="_blank" rel="noopener noreferrer" class="btn-project-live" aria-label="Visit North Fork Auto live website">
            <span class="action-pulse" aria-hidden="true"></span>
            <span>VISIT LIVE SITE</span>
          </a>
          <a href="{{ route('projects.show', 'north-fork-auto') }}" class="btn-project-case" aria-label="View North Fork Auto architecture">
            <span>VIEW ARCHITECTURE</span>
          </a>
        </div>
      </div>
      <div class="project-preview preview-north" aria-hidden="true">
        <small>NORTH FORK AUTO</small>
        <b>Driven<br>forward.</b>
        <span>EXPLORE WEBSITE</span>
      </div>
    </div>

    <!-- 04 Care Source Indy -->
    <div class="project reveal" data-project="care-source-indy">
      <span class="project-num">04 / 07</span>
      <div class="project-main">
        <h3><a href="{{ route('projects.show', 'care-source-indy') }}" class="project-title-link">CARE <span>SOURCE INDY</span></a></h3>
        <p>HEALTHCARE / SERVICES</p>
        <div class="project-actions">
          <a href="https://caresourceindy.com/" target="_blank" rel="noopener noreferrer" class="btn-project-live" aria-label="Visit Care Source Indy live website">
            <span class="action-pulse" aria-hidden="true"></span>
            <span>VISIT LIVE SITE</span>
          </a>
          <a href="{{ route('projects.show', 'care-source-indy') }}" class="btn-project-case" aria-label="View Care Source Indy architecture">
            <span>VIEW ARCHITECTURE</span>
          </a>
        </div>
      </div>
      <div class="project-preview preview-care" aria-hidden="true">
        <small>CARE SOURCE</small>
        <b>Care that<br>connects.</b>
        <span>LEARN MORE</span>
      </div>
    </div>

    <!-- 05 Perfumes Collection -->
    <div class="project reveal" data-project="perfumes-collection">
      <span class="project-num">05 / 07</span>
      <div class="project-main">
        <h3><a href="{{ route('projects.show', 'perfumes-collection') }}" class="project-title-link">PERFUME <span>COLLECTION</span></a></h3>
        <p>FRAGRANCE / E-COMMERCE</p>
        <div class="project-actions">
          <a href="https://perfume-collection.wasmer.app/" target="_blank" rel="noopener noreferrer" class="btn-project-live" aria-label="Visit Perfumes Collection live website">
            <span class="action-pulse" aria-hidden="true"></span>
            <span>VISIT LIVE SITE</span>
          </a>
          <a href="{{ route('projects.show', 'perfumes-collection') }}" class="btn-project-case" aria-label="View Perfumes Collection architecture">
            <span>VIEW ARCHITECTURE</span>
          </a>
        </div>
      </div>
      <div class="project-preview preview-perfume" aria-hidden="true">
        <small>SCENT STORIES</small>
        <b>The art of<br>fragrance.</b>
        <span>DISCOVER</span>
      </div>
    </div>

    <!-- 06 Mukoh Tires -->
    <div class="project reveal" data-project="mukoh-tires">
      <span class="project-num">06 / 07</span>
      <div class="project-main">
        <h3><a href="{{ route('projects.show', 'mukoh-tires') }}" class="project-title-link">MUKOH <span>TIRES</span></a></h3>
        <p>AUTOMOTIVE / SERVICES</p>
        <div class="project-actions">
          <a href="https://mukoh-demowebsite.netlify.app/" target="_blank" rel="noopener noreferrer" class="btn-project-live" aria-label="Visit Mukoh Tires live website">
            <span class="action-pulse" aria-hidden="true"></span>
            <span>VISIT LIVE SITE</span>
          </a>
          <a href="{{ route('projects.show', 'mukoh-tires') }}" class="btn-project-case" aria-label="View Mukoh Tires architecture">
            <span>VIEW ARCHITECTURE</span>
          </a>
        </div>
      </div>
      <div class="project-preview preview-mukoh" aria-hidden="true">
        <small>MUKOH TIRES</small>
        <b>Go the<br>distance.</b>
        <span>EXPLORE</span>
      </div>
    </div>

    <!-- 07 Hari Om Bites -->
    <div class="project reveal" data-project="hari-om-bites">
      <span class="project-num">07 / 07</span>
      <div class="project-main">
        <h3><a href="{{ route('projects.show', 'hari-om-bites') }}" class="project-title-link">HARI OM <span>BITES</span></a></h3>
        <p>RESTAURANT / HOSPITALITY</p>
        <div class="project-actions">
          <a href="https://hari-om-bites.wasmer.app/" target="_blank" rel="noopener noreferrer" class="btn-project-live" aria-label="Visit Hari Om Bites live website">
            <span class="action-pulse" aria-hidden="true"></span>
            <span>VISIT LIVE SITE</span>
          </a>
          <a href="{{ route('projects.show', 'hari-om-bites') }}" class="btn-project-case" aria-label="View Hari Om Bites architecture">
            <span>VIEW ARCHITECTURE</span>
          </a>
        </div>
      </div>
      <div class="project-preview preview-hariom" aria-hidden="true">
        <small>HARI OM BITES</small>
        <b>Authentic cuisine,<br>crafted with passion.</b>
        <span>EXPLORE FLAVORS</span>
      </div>
    </div>
  </div>

  <p class="project-footnote">PROJECT PREVIEWS ARE ORIGINAL GRAPHIC PLACEHOLDERS, NOT LIVE WEBSITE SCREENSHOTS. ALL PROJECT LINKS OPEN THE LIVE SITES.</p>
</section>

<!-- About Me -->
<section class="about-section section-wrap" id="about" aria-labelledby="about-title">
  <div class="section-rule"></div>
  <p class="section-eyebrow reveal">ABOUT ME</p>
  <div class="row g-5 about-grid">
    <div class="col-lg-7">
      <h2 id="about-title" class="display-heading reveal">BEYOND<br>THE <span class="highlight-bar">CODE</span><span class="white-dot">.</span></h2>
      <p class="about-description reveal">
        I'm <strong>Haider Ali</strong>, a web developer and UI/UX designer with over <strong>5 years of experience</strong>. I specialize in Laravel and PHP, combining strong development foundations with sharp, thoughtful interfaces.
      </p>
      <p class="about-small reveal">
        I believe good digital experiences are built on clarity, purpose, and the details people remember.
      </p>
      <a class="underlined-link reveal" href="#contact">LET'S WORK TOGETHER</a>
    </div>
    <div class="col-lg-5">
      <div class="about-portrait reveal">
        <picture>
          <source srcset="{{ asset('images/portrait/haider-portrait.webp') }}" type="image/webp">
          <img src="{{ asset('images/portrait/haider-portrait.jpg') }}" width="720" height="1280" loading="lazy" alt="Haider Ali portrait">
        </picture>
        <span>HAIDER ALI / 2026</span>
      </div>
    </div>
  </div>
</section>

<!-- Expertise -->
<section class="expertise-section section-wrap" id="expertise" aria-labelledby="expertise-title">
  <div class="section-rule"></div>
  <p class="section-eyebrow reveal">WHAT I DO</p>
  <div class="section-heading-row reveal">
    <h2 id="expertise-title" class="display-heading">MY <span class="highlight-bar">EXPERTISE</span><span class="white-dot">.</span></h2>
    <p>Selected tools I use to bring<br>ideas into the real world.</p>
  </div>

  <div class="skills-grid">
    <div class="skill-group reveal">
      <h3>DEVELOPMENT</h3>
      <p>
        <span class="skill-item-content">
          <span class="skill-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="#FF2D20"><path d="M21.6 6.8 12.4 1.5a.8.8 0 0 0-.8 0L2.4 6.8a.8.8 0 0 0-.4.7v10.6a.8.8 0 0 0 .4.7l9.2 5.3c.2.1.5.1.8 0l9.2-5.3a.8.8 0 0 0 .4-.7V7.5a.8.8 0 0 0-.4-.7zM12 3.1l7.8 4.5-3.3 1.9-7.8-4.5L12 3.1zm-8.4 5.2 7.8 4.5v9.1L3.6 17.4V8.3zm9.6 13.6v-9.1l7.8-4.5v9.1l-7.8 4.5z"/></svg>
          </span>
          <span>Laravel</span>
        </span>
        <span class="skill-ping-indicator"></span>
      </p>
      <p>
        <span class="skill-item-content">
          <span class="skill-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="#777BB4"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9v-2H7v2H5V8h4.5c1.4 0 2.5 1.1 2.5 2.5 0 .9-.5 1.7-1.2 2.1.7.4 1.2 1.2 1.2 2.1 0 .5-.2.9-.5 1.3zm8 0h-2v-2h-2v2h-2V8h4.5c1.4 0 2.5 1.1 2.5 2.5 0 .9-.5 1.7-1.2 2.1.7.4 1.2 1.2 1.2 2.1 0 .5-.2.9-.5 1.3zM9 10H7v2h2c.6 0 1-.4 1-1s-.4-1-1-1zm7 0h-2v2h2c.6 0 1-.4 1-1s-.4-1-1-1z"/></svg>
          </span>
          <span>PHP 8.x</span>
        </span>
        <span class="skill-ping-indicator"></span>
      </p>
      <p>
        <span class="skill-item-content">
          <span class="skill-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="#68A063"><path d="M12 2.1 3.5 7v9.8l8.5 4.9 8.5-4.9V7L12 2.1zm6.7 13.7-6.7 3.9-6.7-3.9V8.2l6.7-3.9 6.7 3.9v7.6z"/><path d="m12 7.5-4 2.3v4.6l4 2.3 4-2.3V9.8l-4-2.3z"/></svg>
          </span>
          <span>Nodejs</span>
        </span>
        <span class="skill-ping-indicator"></span>
      </p>
      <p>
        <span class="skill-item-content">
          <span class="skill-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24"><rect width="24" height="24" rx="4" fill="#3178C6"/><path fill="#fff" d="M3 7h7v2H7.5v8h-2V9H3V7zm10.5 7.5c.8.6 1.7.9 2.6.9 1 0 1.5-.4 1.5-1 0-.6-.5-.9-1.8-1.4-1.7-.6-2.8-1.5-2.8-3 0-1.8 1.4-3.2 3.6-3.2 1.3 0 2.4.4 3.2 1l-1 1.6c-.7-.5-1.4-.8-2.2-.8-.9 0-1.4.4-1.4.9 0 .6.5.9 1.8 1.4 1.8.7 2.8 1.6 2.8 3.1 0 1.9-1.5 3.3-3.8 3.3-1.5 0-2.8-.5-3.7-1.2l1.2-1.6z"/></svg>
          </span>
          <span>TypeScript</span>
        </span>
        <span class="skill-ping-indicator"></span>
      </p>
      <p>
        <span class="skill-item-content">
          <span class="skill-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="#00758F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>
          </span>
          <span>MySQL</span>
        </span>
        <span class="skill-ping-indicator"></span>
      </p>
      <p>
        <span class="skill-item-content">
          <span class="skill-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="#F05340" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
          </span>
          <span>Blade Templating</span>
        </span>
        <span class="skill-ping-indicator"></span>
      </p>
      <p>
        <span class="skill-item-content">
          <span class="skill-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/><path d="M7 8h2m2 0h2m-6 4h6"/></svg>
          </span>
          <span>RESTful APIs</span>
        </span>
        <span class="skill-ping-indicator"></span>
      </p>
    </div>
    <div class="skill-group reveal">
      <h3>FRONTEND</h3>
      <p>
        <span class="skill-item-content">
          <span class="skill-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="#E34F26"><path d="M3 2l1.8 17.5L12 22l7.2-2.5L21 2H3zm14.8 5.7h-7.6l.2 2.3h7.2l-.6 6.3-5 1.4-5-1.4-.3-3.6h2.2l.2 1.8 2.9.8 2.9-.8.3-3H6.8L6.2 5.5h11.9l-.3 2.2z"/></svg>
          </span>
          <span>HTML5 / CSS3</span>
        </span>
        <span class="skill-ping-indicator"></span>
      </p>
      <p>
        <span class="skill-item-content">
          <span class="skill-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24"><rect width="24" height="24" rx="3" fill="#F7DF1E"/><path fill="#000" d="M7 16.5c0 1.5 1 2.5 2.5 2.5 1.2 0 2-.6 2.3-1.4l-1.6-.9c-.2.5-.5.7-.8.7-.4 0-.7-.3-.7-.9V8h-1.7v8.5zm7.3 2.5c1.8 0 3-.9 3-2.4 0-1.6-1.1-2.1-2.4-2.6l-.5-.2c-.6-.2-.9-.5-.9-.9 0-.4.3-.7.8-.7.5 0 .8.2 1.1.7l1.5-.9c-.5-.9-1.3-1.4-2.5-1.4-1.5 0-2.6.9-2.6 2.3 0 1.5 1 2.1 2.2 2.6l.5.2c.7.3 1.1.5 1.1 1 0 .5-.4.8-1 .8-.7 0-1.1-.4-1.4-1l-1.5.9c.5 1 1.4 1.6 2.6 1.6z"/></svg>
          </span>
          <span>JavaScript (ES6+)</span>
        </span>
        <span class="skill-ping-indicator"></span>
      </p>
      <p>
        <span class="skill-item-content">
          <span class="skill-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24"><rect width="24" height="24" rx="5" fill="#7952B3"/><path fill="#fff" d="M7.5 6h4.5c1.8 0 3 .9 3 2.2 0 1-.6 1.7-1.5 2 1.2.3 1.9 1.1 1.9 2.3 0 1.5-1.3 2.5-3.3 2.5H7.5V6zm2.3 3.6h2c.6 0 1-.3 1-.8s-.4-.8-1-.8h-2v1.6zm0 3.8h2.3c.7 0 1.2-.3 1.2-.9s-.5-.9-1.2-.9H9.8v1.8z"/></svg>
          </span>
          <span>Bootstrap 5</span>
        </span>
        <span class="skill-ping-indicator"></span>
      </p>
      <p>
        <span class="skill-item-content">
          <span class="skill-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="#38BDF8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
          </span>
          <span>Responsive Design</span>
        </span>
        <span class="skill-ping-indicator"></span>
      </p>
      <p>
        <span class="skill-item-content">
          <span class="skill-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="#77C1D2"><path d="m18 8-6 6-6-6 6-6 6 6zm-6 8 6 6h-6l-6-6 6-6 6 6z"/></svg>
          </span>
          <span>Alpine.js / DOM</span>
        </span>
        <span class="skill-ping-indicator"></span>
      </p>
    </div>
    <div class="skill-group reveal">
      <h3>DESIGN &amp; TOOLS</h3>
      <p>
        <span class="skill-item-content">
          <span class="skill-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="#F5D900" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 19 7-7 3 3-7 7-3-3z"/><path d="m18 13-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="m2 2 7.586 7.586"/><circle cx="11" cy="11" r="2"/></svg>
          </span>
          <span>UI / UX Design</span>
        </span>
        <span class="skill-ping-indicator"></span>
      </p>
      <p>
        <span class="skill-item-content">
          <span class="skill-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path fill="#F24E1E" d="M8 2h4v4H8a2 2 0 1 1 0-4z"/><path fill="#FF7262" d="M12 2h4a2 2 0 1 1 0 4h-4V2z"/><path fill="#1ABCFE" d="M12 8h4a2 2 0 1 1 0 4h-4V8z"/><path fill="#0ACF83" d="M8 14h4v4a2 2 0 1 1-4 0v-4z"/><path fill="#A259FF" d="M8 8h4v4H8a2 2 0 1 1 0-4z"/></svg>
          </span>
          <span>Figma</span>
        </span>
        <span class="skill-ping-indicator"></span>
      </p>
      <p>
        <span class="skill-item-content">
          <span class="skill-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="#EC4899" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
          </span>
          <span>Design Systems</span>
        </span>
        <span class="skill-ping-indicator"></span>
      </p>
      <p>
        <span class="skill-item-content">
          <span class="skill-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="#818CF8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg>
          </span>
          <span>Wireframing &amp; Prototyping</span>
        </span>
        <span class="skill-ping-indicator"></span>
      </p>
      <p>
        <span class="skill-item-content">
          <span class="skill-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="#F05032" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="6" y1="3" x2="6" y2="15"/><circle cx="18" cy="6" r="3"/><circle cx="6" cy="18" r="3"/><path d="M18 9a9 9 0 0 1-9 9"/></svg>
          </span>
          <span>Git / GitHub</span>
        </span>
        <span class="skill-ping-indicator"></span>
      </p>
      <p>
        <span class="skill-item-content">
          <span class="skill-icon-wrap" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="#FF6C37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="4 17 10 11 4 5"/><line x1="12" y1="19" x2="20" y2="19"/></svg>
          </span>
          <span>Postman / DevTools</span>
        </span>
        <span class="skill-ping-indicator"></span>
      </p>
    </div>
  </div>
</section>

<!-- Contact -->
<section class="contact-section section-wrap" id="contact" aria-labelledby="contact-title">
  <div class="section-rule"></div>
  <div class="contact-meta">
    <span>HAVE A PROJECT IN MIND?</span>
    <span>LET'S CONNECT</span>
  </div>

  <h2 id="contact-title" class="contact-heading reveal">
    LET'S MAKE<br><span class="highlight-bar">IT HAPPEN</span><span class="white-dot">.</span>
  </h2>

  <div class="contact-bottom">
    <a href="mailto:{{ config('portfolio.owner.email', 'Hadihnd0@gmail.com') }}" class="email-link">
      {{ strtoupper(config('portfolio.owner.email', 'Hadihnd0@gmail.com')) }}
    </a>
    <p>OPEN TO COLLABORATIONS<br>AND NEW OPPORTUNITIES.</p>
  </div>

  <!-- Interactive Futuristic Contact Form -->
  <div class="contact-form-container">
    <div class="terminal-header">
      <div class="terminal-status">
        <span class="terminal-dot"></span>
        <span class="terminal-status-text">Send a Direct Message // SECURE CHANNEL</span>
      </div>
      <div class="terminal-id">TARGET: HADIHND0@GMAIL.COM // 2026</div>
    </div>

    @if(session('success'))
    <div class="futuristic-alert futuristic-alert-success" role="alert">
      <div class="alert-icon">✦</div>
      <div>
        <strong>TRANSMISSION CONFIRMED</strong>
        <p>{{ session('success') }}</p>
      </div>
    </div>
    @endif

    @if($errors->any())
    <div class="futuristic-alert futuristic-alert-danger" role="alert">
      <div class="alert-icon">✕</div>
      <div>
        <strong>TRANSMISSION INTERRUPTED — VERIFY FIELDS</strong>
        <ul>
          @foreach($errors->all() as $err)
          <li>{{ $err }}</li>
          @endforeach
        </ul>
      </div>
    </div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST" novalidate class="futuristic-form">
      @csrf

      <div class="row g-3 g-md-4 mb-3 mb-md-4">
        <div class="col-md-6">
          <label for="name" class="form-label-tech">
            <span class="label-idx">01</span>
            <span class="label-name">Your Name</span>
            <span class="label-req">*</span>
          </label>
          <div class="input-glow-wrapper">
            <input type="text" name="name" id="name" class="form-control-tech @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Alex Morgan" required autocomplete="name">
          </div>
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label-tech">
            <span class="label-idx">02</span>
            <span class="label-name">Your Email</span>
            <span class="label-req">*</span>
          </label>
          <div class="input-glow-wrapper">
            <input type="email" name="email" id="email" class="form-control-tech @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="alex@company.com" required autocomplete="email">
          </div>
        </div>
      </div>

      <div class="row g-3 g-md-4 mb-3 mb-md-4">
        <div class="col-md-6">
          <label for="subject" class="form-label-tech">
            <span class="label-idx">03</span>
            <span class="label-name">Project Subject</span>
          </label>
          <div class="input-glow-wrapper">
            <input type="text" name="subject" id="subject" class="form-control-tech" value="{{ old('subject') }}" placeholder="New Web Application / Architecture">
          </div>
        </div>
        <div class="col-md-6">
          <label for="project_type" class="form-label-tech">
            <span class="label-idx">04</span>
            <span class="label-name">Architecture Domain (Optional)</span>
          </label>
          <div class="input-glow-wrapper select-wrapper">
            <div class="custom-select-container" id="project-type-container">
              <select name="project_type" id="project_type" class="form-select-tech visually-hidden-accessible" tabindex="-1" aria-hidden="true">
                <option value="" {{ old('project_type') == '' ? 'selected' : '' }}>Select Category (Optional)</option>
                <option value="Laravel Web Application" {{ old('project_type') == 'Laravel Web Application' ? 'selected' : '' }}>Laravel Web Application</option>
                <option value="PHP & Database Architecture" {{ old('project_type') == 'PHP & Database Architecture' ? 'selected' : '' }}>PHP &amp; Database Architecture</option>
                <option value="E-Commerce Platform" {{ old('project_type') == 'E-Commerce Platform' ? 'selected' : '' }}>E-Commerce Platform</option>
                <option value="UI/UX & Frontend Design" {{ old('project_type') == 'UI/UX & Frontend Design' ? 'selected' : '' }}>UI/UX &amp; Frontend Design</option>
                <option value="General Consultation" {{ old('project_type') == 'General Consultation' ? 'selected' : '' }}>General Consultation</option>
              </select>

              <button type="button" class="custom-select-trigger" aria-haspopup="listbox" aria-expanded="false" id="project-type-trigger">
                <span class="selected-value-wrap">
                  <span class="option-color-dot dot-neutral"></span>
                  <span class="selected-text {{ old('project_type') ? '' : 'is-placeholder' }}">{{ old('project_type') ?: 'Select Category' }}</span>
                </span>
                <span class="dropdown-chevron-icon">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </span>
              </button>

              <div class="custom-select-menu" role="listbox" tabindex="-1">
                <div class="custom-option is-selected" data-value="" role="option" aria-selected="true">
                  <span class="option-color-dot dot-neutral"></span>
                  <span class="option-label">Select Category</span>
                  <span class="option-tag tag-neutral">DEFAULT</span>
                </div>
                <div class="custom-option" data-value="Laravel Web Application" role="option">
                  <span class="option-color-dot dot-laravel"></span>
                  <span class="option-label">Laravel Web Application</span>
                  <span class="option-tag tag-laravel">LARAVEL</span>
                </div>
                <div class="custom-option" data-value="PHP & Database Architecture" role="option">
                  <span class="option-color-dot dot-php"></span>
                  <span class="option-label">PHP &amp; Database Architecture</span>
                  <span class="option-tag tag-php">BACKEND</span>
                </div>
                <div class="custom-option" data-value="E-Commerce Platform" role="option">
                  <span class="option-color-dot dot-ecommerce"></span>
                  <span class="option-label">E-Commerce Platform</span>
                  <span class="option-tag tag-ecommerce">COMMERCE</span>
                </div>
                <div class="custom-option" data-value="UI/UX & Frontend Design" role="option">
                  <span class="option-color-dot dot-design"></span>
                  <span class="option-label">UI/UX &amp; Frontend Design</span>
                  <span class="option-tag tag-design">CREATIVE</span>
                </div>
                <div class="custom-option" data-value="General Consultation" role="option">
                  <span class="option-color-dot dot-consult"></span>
                  <span class="option-label">General Consultation</span>
                  <span class="option-tag tag-consult">ADVISORY</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="mb-3 mb-md-4">
        <label for="message" class="form-label-tech">
          <span class="label-idx">05</span>
          <span class="label-name">Project Scope &amp; Requirements</span>
          <span class="label-req">*</span>
        </label>
        <div class="input-glow-wrapper">
          <textarea name="message" id="message" rows="4" class="form-control-tech @error('message') is-invalid @enderror" placeholder="Describe your project vision, timeline, goals, and technical requirements..." required>{{ old('message') }}</textarea>
        </div>
      </div>

      <div class="form-footer">
        <button type="submit" class="btn-tech-submit">
          <span class="btn-pulse-dot"></span>
          <span>TRANSMIT INQUIRY DIRECTLY</span>
        </button>
        <div class="form-footer-meta">
          <span>ENCRYPTED DISPATCH TO HAIDER ALI</span>
          <small>AVERAGE RESPONSE TIME: &lt; 24 HOURS</small>
        </div>
      </div>
    </form>
  </div>
</section>
@endsection
