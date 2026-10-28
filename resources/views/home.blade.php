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
    <span><span class="indicator"></span> INDEPENDENT WEB DEVELOPER</span>
    <span>PORTFOLIO / 2026</span>
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
    <div class="hero-role">LARAVEL &amp; PHP DEVELOPER<br><span>WEB DEVELOPER / UI/UX DESIGNER</span></div>
    <p>Creating meaningful digital experiences through <em>design, development</em> and attention to detail.</p>
    <a class="scroll-cue" href="#work">SCROLL TO EXPLORE</a>
  </div>
  <div class="hero-index">01 / 05</div>
</section>

<!-- 01 The Introduction -->
<section class="intro-section section-wrap" aria-labelledby="intro-title">
  <div class="section-eyebrow reveal">01 — THE INTRODUCTION</div>
  <div class="row intro-layout g-4">
    <div class="col-lg-4">
      <p class="muted reveal intro-aside">A thoughtful approach to<br>technology &amp; design.</p>
    </div>
    <div class="col-lg-8">
      <h2 id="intro-title" class="intro-heading reveal">
        I BUILD <span>WEB</span> EXPERIENCES THAT <span>FEEL AS GOOD</span> AS THEY WORK<span class="white-dot">.</span>
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
      <p class="section-eyebrow">02 — FEATURED WORK</p>
      <h2 id="work-title" class="display-heading">SELECTED <i>WORK</i><span class="white-dot">.</span></h2>
    </div>
    <p>A selection of websites I've worked on.<br>Explore the live experiences.</p>
  </div>

  <div class="project-list">
    <!-- 01 Azora Solutions -->
    <a class="project" href="https://azorasolution.com/" target="_blank" rel="noopener noreferrer" aria-label="Visit Azora Solutions website">
      <span class="project-num">01 / 06</span>
      <div class="project-main">
        <h3>AZORA <span>SOLUTIONS</span></h3>
        <p>BUSINESS / DIGITAL SOLUTIONS</p>
      </div>
      <div class="project-preview preview-azora" aria-hidden="true">
        <small>AZORA</small>
        <b>Business,<br>made better.</b>
        <span>EXPLORE SOLUTIONS</span>
      </div>
    </a>

    <!-- 02 AZ Halal Marts -->
    <a class="project" href="https://www.azmarts.com/" target="_blank" rel="noopener noreferrer" aria-label="Visit AZ Halal Marts website">
      <span class="project-num">02 / 06</span>
      <div class="project-main">
        <h3>AZ <span>HALAL MARTS</span></h3>
        <p>GROCERY / RETAIL</p>
      </div>
      <div class="project-preview preview-mart" aria-hidden="true">
        <small>AZ MARTS</small>
        <b>Freshness,<br>delivered.</b>
        <span>SHOP THE COLLECTION</span>
      </div>
    </a>

    <!-- 03 North Fork Auto -->
    <a class="project" href="https://northforkauto.com/" target="_blank" rel="noopener noreferrer" aria-label="Visit North Fork Auto website">
      <span class="project-num">03 / 06</span>
      <div class="project-main">
        <h3>NORTH <span>FORK AUTO</span></h3>
        <p>AUTOMOTIVE / WEB</p>
      </div>
      <div class="project-preview preview-north" aria-hidden="true">
        <small>NORTH FORK AUTO</small>
        <b>Driven<br>forward.</b>
        <span>EXPLORE WEBSITE</span>
      </div>
    </a>

    <!-- 04 Care Source Indy -->
    <a class="project" href="https://caresourceindy.com/" target="_blank" rel="noopener noreferrer" aria-label="Visit Care Source Indy website">
      <span class="project-num">04 / 06</span>
      <div class="project-main">
        <h3>CARE <span>SOURCE INDY</span></h3>
        <p>HEALTHCARE / SERVICES</p>
      </div>
      <div class="project-preview preview-care" aria-hidden="true">
        <small>CARE SOURCE</small>
        <b>Care that<br>connects.</b>
        <span>LEARN MORE</span>
      </div>
    </a>

    <!-- 05 Perfumes Collection -->
    <a class="project" href="https://perfume-collection.wasmer.app/" target="_blank" rel="noopener noreferrer" aria-label="Visit Perfumes Collection website">
      <span class="project-num">05 / 06</span>
      <div class="project-main">
        <h3>PERFUME <span>COLLECTION</span></h3>
        <p>FRAGRANCE / E-COMMERCE</p>
      </div>
      <div class="project-preview preview-perfume" aria-hidden="true">
        <small>SCENT STORIES</small>
        <b>The art of<br>fragrance.</b>
        <span>DISCOVER</span>
      </div>
    </a>

    <!-- 06 Mukoh Tires -->
    <a class="project" href="https://mukoh-demowebsite.netlify.app/" target="_blank" rel="noopener noreferrer" aria-label="Visit Mukoh Tires website">
      <span class="project-num">06 / 06</span>
      <div class="project-main">
        <h3>MUKOH <span>TIRES</span></h3>
        <p>AUTOMOTIVE / SERVICES</p>
      </div>
      <div class="project-preview preview-mukoh" aria-hidden="true">
        <small>MUKOH TIRES</small>
        <b>Go the<br>distance.</b>
        <span>EXPLORE</span>
      </div>
    </a>
  </div>

  <p class="project-footnote">PROJECT PREVIEWS ARE ORIGINAL GRAPHIC PLACEHOLDERS, NOT LIVE WEBSITE SCREENSHOTS. ALL PROJECT LINKS OPEN THE LIVE SITES.</p>
</section>

<!-- 03 About Me -->
<section class="about-section section-wrap" id="about" aria-labelledby="about-title">
  <div class="section-rule"></div>
  <p class="section-eyebrow reveal">03 — ABOUT ME</p>
  <div class="row g-5 about-grid">
    <div class="col-lg-7">
      <h2 id="about-title" class="display-heading reveal">BEYOND<br>THE <i>CODE</i><span class="white-dot">.</span></h2>
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

<!-- 04 Expertise -->
<section class="expertise-section section-wrap" id="expertise" aria-labelledby="expertise-title">
  <div class="section-rule"></div>
  <p class="section-eyebrow reveal">04 — WHAT I DO</p>
  <div class="section-heading-row reveal">
    <h2 id="expertise-title" class="display-heading">MY <i>EXPERTISE</i><span class="white-dot">.</span></h2>
    <p>Selected tools I use to bring<br>ideas into the real world.</p>
  </div>

  <div class="skills-grid">
    <div class="skill-group reveal">
      <span class="skill-num">01</span>
      <h3>DEVELOPMENT</h3>
      <p>Laravel</p>
      <p>PHP</p>
      <p>MySQL</p>
      <p>Blade Templates</p>
    </div>
    <div class="skill-group reveal">
      <span class="skill-num">02</span>
      <h3>FRONTEND</h3>
      <p>HTML / CSS</p>
      <p>JavaScript</p>
      <p>Bootstrap</p>
      <p>Responsive Design</p>
    </div>
    <div class="skill-group reveal">
      <span class="skill-num">03</span>
      <h3>DESIGN &amp; TOOLS</h3>
      <p>UI / UX Design</p>
      <p>Figma</p>
      <p>Git / GitHub</p>
      <p>Web Experiences</p>
    </div>
  </div>
</section>

<!-- 05 Contact -->
<section class="contact-section section-wrap" id="contact" aria-labelledby="contact-title">
  <div class="section-rule"></div>
  <div class="contact-meta">
    <span>05 — HAVE A PROJECT IN MIND?</span>
    <span>LET'S CONNECT</span>
  </div>

  <h2 id="contact-title" class="contact-heading reveal">
    LET'S MAKE<br><span>IT HAPPEN</span><span class="white-dot">.</span>
  </h2>

  <div class="contact-bottom">
    <a href="mailto:{{ config('portfolio.owner.email', 'Hadihnd0@gmail.com') }}" class="email-link">
      {{ strtoupper(config('portfolio.owner.email', 'Hadihnd0@gmail.com')) }}
    </a>
    <p>OPEN TO COLLABORATIONS<br>AND NEW OPPORTUNITIES.</p>
  </div>

  <!-- Interactive Contact Form -->
  <div class="contact-form-container">
    @if(session('success'))
    <div class="alert alert-success bg-transparent border border-success text-success p-3 mb-4 rounded-0" role="alert">
      <strong>Submission Confirmed!</strong>
      <div class="small">{{ session('success') }}</div>
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger bg-transparent border border-danger text-danger p-3 mb-4 rounded-0" role="alert">
      <strong class="d-block mb-1">Please review the fields below:</strong>
      <ul class="mb-0 small ps-3">
        @foreach($errors->all() as $err)
        <li>{{ $err }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST" novalidate>
      @csrf

      <div class="row g-3 mb-3">
        <div class="col-md-6">
          <label for="name" class="form-label-dark">Your Name *</label>
          <input type="text" name="name" id="name" class="form-control-dark @error('name') border-danger @enderror" value="{{ old('name') }}" placeholder="e.g. Alex Morgan" required>
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label-dark">Your Email *</label>
          <input type="email" name="email" id="email" class="form-control-dark @error('email') border-danger @enderror" value="{{ old('email') }}" placeholder="alex@example.com" required>
        </div>
      </div>

      <div class="row g-3 mb-3">
        <div class="col-md-6">
          <label for="subject" class="form-label-dark">Subject</label>
          <input type="text" name="subject" id="subject" class="form-control-dark" value="{{ old('subject') }}" placeholder="Project Inquiry">
        </div>
        <div class="col-md-6">
          <label for="project_type" class="form-label-dark">Project Type</label>
          <select name="project_type" id="project_type" class="form-select-dark">
            <option value="" {{ old('project_type') == '' ? 'selected' : '' }}>Select Category (Optional)</option>
            <option value="Laravel Web Application" {{ old('project_type') == 'Laravel Web Application' ? 'selected' : '' }}>Laravel Web Application</option>
            <option value="PHP & Database Architecture" {{ old('project_type') == 'PHP & Database Architecture' ? 'selected' : '' }}>PHP &amp; Database Architecture</option>
            <option value="UI/UX & Frontend Design" {{ old('project_type') == 'UI/UX & Frontend Design' ? 'selected' : '' }}>UI/UX &amp; Frontend Design</option>
            <option value="General Consultation" {{ old('project_type') == 'General Consultation' ? 'selected' : '' }}>General Consultation</option>
          </select>
        </div>
      </div>

      <div class="mb-4">
        <label for="message" class="form-label-dark">Message *</label>
        <textarea name="message" id="message" rows="4" class="form-control-dark @error('message') border-danger @enderror" placeholder="Describe your project, timeline, and goals..." required>{{ old('message') }}</textarea>
      </div>

      <button type="submit" class="btn-form-submit">
        SEND INQUIRY TO HAIDER
      </button>
    </form>
  </div>
</section>
@endsection
