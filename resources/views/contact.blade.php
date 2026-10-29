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
            <select name="project_type" id="project_type" class="form-select-tech">
              <option value="" {{ old('project_type') == '' ? 'selected' : '' }}>Select Project Type (Optional)</option>
              <option value="Laravel Web Application" {{ old('project_type') == 'Laravel Web Application' ? 'selected' : '' }}>Laravel Web Application</option>
              <option value="PHP & Relational Database" {{ old('project_type') == 'PHP & Relational Database' ? 'selected' : '' }}>PHP &amp; Relational Database</option>
              <option value="E-Commerce Platform" {{ old('project_type') == 'E-Commerce Platform' ? 'selected' : '' }}>E-Commerce Platform</option>
              <option value="UI/UX & Frontend Design" {{ old('project_type') == 'UI/UX & Frontend Design' ? 'selected' : '' }}>UI/UX &amp; Frontend Design</option>
              <option value="General Consultation" {{ old('project_type') == 'General Consultation' ? 'selected' : '' }}>General Consultation</option>
            </select>
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
