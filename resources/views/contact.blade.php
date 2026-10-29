@extends('layouts.app')

@section('title', 'Contact Haider Ali — Laravel & PHP Developer')
@section('meta_description', 'Get in touch with Haider Ali for your next Laravel web application, backend architecture, or UI/UX design project.')

@section('content')
<section class="section-wrap" style="padding-top: 140px; padding-bottom: 120px;">
  <div class="contact-meta mb-4">
    <span>INITIATE DIALOGUE</span>
    <span>AVAILABLE FOR SELECT PROJECTS</span>
  </div>

  <h1 class="contact-heading mt-0 mb-5">
    LET'S MAKE<br><span class="highlight-bar">IT HAPPEN</span><span class="white-dot">.</span>
  </h1>

  <div class="contact-bottom mb-5">
    <div>
      <div class="section-eyebrow mb-2">DIRECT EMAIL</div>
      <a href="mailto:{{ config('portfolio.owner.email', 'Hadihnd0@gmail.com') }}" class="email-link">
        {{ strtoupper(config('portfolio.owner.email', 'Hadihnd0@gmail.com')) }}
      </a>
    </div>
    <p>OPEN TO COLLABORATIONS<br>AND NEW OPPORTUNITIES WORLDWIDE.</p>
  </div>

  <!-- Futuristic Contact Form Container -->
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
          @error('name')
          <span class="text-danger small mt-1 d-block">{{ $message }}</span>
          @enderror
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
          @error('email')
          <span class="text-danger small mt-1 d-block">{{ $message }}</span>
          @enderror
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
            <span class="label-name">Architecture Domain</span>
          </label>
          <div class="input-glow-wrapper select-wrapper">
            <div class="custom-select-container" id="project-type-container">
              <select name="project_type" id="project_type" class="form-select-tech visually-hidden-accessible" tabindex="-1" aria-hidden="true">
                <option value="" {{ old('project_type') == '' ? 'selected' : '' }}>Select Project Type (Optional)</option>
                <option value="Laravel Web Application" {{ old('project_type') == 'Laravel Web Application' ? 'selected' : '' }}>Laravel Web Application</option>
                <option value="PHP & Relational Database" {{ old('project_type') == 'PHP & Relational Database' ? 'selected' : '' }}>PHP &amp; Relational Database</option>
                <option value="E-Commerce Platform" {{ old('project_type') == 'E-Commerce Platform' ? 'selected' : '' }}>E-Commerce Platform</option>
                <option value="UI/UX & Frontend Design" {{ old('project_type') == 'UI/UX & Frontend Design' ? 'selected' : '' }}>UI/UX &amp; Frontend Design</option>
                <option value="General Consultation" {{ old('project_type') == 'General Consultation' ? 'selected' : '' }}>General Consultation</option>
              </select>

              <button type="button" class="custom-select-trigger" aria-haspopup="listbox" aria-expanded="false" id="project-type-trigger">
                <span class="selected-value-wrap">
                  <span class="option-color-dot dot-neutral"></span>
                  <span class="selected-text">Select Project Type (Optional)</span>
                </span>
                <span class="dropdown-chevron-icon">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </span>
              </button>

              <div class="custom-select-menu" role="listbox" tabindex="-1">
                <div class="custom-option is-selected" data-value="" role="option" aria-selected="true">
                  <span class="option-color-dot dot-neutral"></span>
                  <span class="option-label">Select Project Type (Optional)</span>
                  <span class="option-tag tag-neutral">DEFAULT</span>
                </div>
                <div class="custom-option" data-value="Laravel Web Application" role="option">
                  <span class="option-color-dot dot-laravel"></span>
                  <span class="option-label">Laravel Web Application</span>
                  <span class="option-tag tag-laravel">LARAVEL</span>
                </div>
                <div class="custom-option" data-value="PHP & Relational Database" role="option">
                  <span class="option-color-dot dot-php"></span>
                  <span class="option-label">PHP &amp; Relational Database</span>
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
          <textarea name="message" id="message" rows="5" class="form-control-tech @error('message') is-invalid @enderror" placeholder="Describe your project vision, timeline, goals and technical requirements..." required>{{ old('message') }}</textarea>
        </div>
        @error('message')
        <span class="text-danger small mt-1 d-block">{{ $message }}</span>
        @enderror
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
