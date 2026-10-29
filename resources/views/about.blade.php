@extends('layouts.app')

@section('title', 'About Haider Ali — Laravel & PHP Developer')
@section('meta_description', 'Learn more about Haider Ali, a Web Developer & UI/UX Designer specializing in Laravel and PHP development with over five years of experience.')

@section('content')
<section class="section-wrap" style="padding-top: 140px; padding-bottom: 120px;">
  <div class="section-eyebrow reveal">ABOUT THE DEVELOPER</div>
  <div class="row g-5 align-items-center">
    <div class="col-lg-7">
      <h1 class="display-heading reveal">BEYOND THE <span class="highlight-bar">CODE</span><span class="white-dot">.</span></h1>
      <p class="about-description reveal">
        I'm <strong>Haider Ali</strong>, a web developer and UI/UX designer with over <strong>5 years of experience</strong>. I specialize in Laravel and PHP development, combining strong development foundations with sharp, thoughtful interfaces.
      </p>
      <p class="about-small reveal">
        My specialization centers on the Laravel framework and modern PHP 8.x ecosystem. Rather than following transient trends, I focus on building rock-solid foundations: expressive Eloquent models, declarative database migrations, structured Form Requests, clean service boundaries, and server-rendered Blade templates.
      </p>
      <div class="d-flex flex-wrap gap-3 mt-4">
        <a href="{{ route('contact') }}" class="btn-form-submit">LET'S TALK</a>
        <a href="{{ route('projects.index') }}" class="underlined-link">VIEW WORK</a>
      </div>
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

<!-- Expertise Taxonomy -->
<section class="expertise-section section-wrap" style="padding-bottom: 120px;">
  <div class="section-rule"></div>
  <p class="section-eyebrow reveal">WHAT I DO</p>
  <div class="section-heading-row reveal">
    <h2 class="display-heading">TECHNICAL <i>SPECTRUM</i><span class="white-dot">.</span></h2>
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
            <svg viewBox="0 0 24 24"><path fill="#3776AB" d="M11.9 2c-4.4 0-4.1 1.9-4.1 1.9l.1 2h4.2v.6H5.9S2 6.1 2 10.5c0 4.5 3.4 4.3 3.4 4.3h2v-2.8s-.1-3.4 3.3-3.4h5.6s3.3.1 3.3-3.2c0-3.4-3.4-3.4-3.4-3.4H11.9zm-2.3 1.3c.4 0 .7.3.7.7s-.3.7-.7.7-.7-.3-.7-.7.3-.7.7-.7z"/><path fill="#FFD438" d="M12.1 22c4.4 0 4.1-1.9 4.1-1.9l-.1-2h-4.2v-.6h6.2s3.9.4 3.9-4c0-4.5-3.4-4.3-3.4-4.3h-2v2.8s.1 3.4-3.3 3.4H7.7s-3.3-.1-3.3 3.2c0 3.4 3.4 3.4 3.4 3.4h4.3zm2.3-1.3c-.4 0-.7-.3-.7-.7s.3-.7.7-.7.7.3.7.7-.3.7-.7.7z"/></svg>
          </span>
          <span>Python</span>
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
          <span>MySQL / PostgreSQL</span>
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
@endsection
