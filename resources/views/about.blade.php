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
      <p>Laravel</p>
      <p>PHP 8.x</p>
      <p>MySQL</p>
      <p>Blade Templating</p>
    </div>
    <div class="skill-group reveal">
      <h3>FRONTEND</h3>
      <p>HTML / CSS</p>
      <p>JavaScript</p>
      <p>Bootstrap 5</p>
      <p>Responsive Design</p>
    </div>
    <div class="skill-group reveal">
      <h3>DESIGN &amp; TOOLS</h3>
      <p>UI / UX Design</p>
      <p>Figma</p>
      <p>Git / GitHub</p>
      <p>Web Experiences</p>
    </div>
  </div>
</section>
@endsection
