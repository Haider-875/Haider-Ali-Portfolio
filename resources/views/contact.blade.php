@extends('layouts.app')

@section('title', 'Contact Haider Ali — Laravel & PHP Developer')
@section('meta_description', 'Get in touch with Haider Ali for your next Laravel web application, backend architecture, or UI/UX design project.')

@section('content')
<section class="section-wrap" style="padding-top: 140px; padding-bottom: 120px;">
  <div class="contact-meta mb-4">
    <span>01 — INITIATE DIALOGUE</span>
    <span>AVAILABLE FOR SELECT PROJECTS</span>
  </div>

  <h1 class="contact-heading mt-0 mb-5">
    LET'S MAKE<br><span>IT HAPPEN</span><span class="white-dot">.</span>
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

  <!-- Contact Form Container -->
  <div class="contact-form-container">
    <h2 class="h5 text-white mb-4" style="font-family: var(--font);">Send a Direct Message</h2>
    @if(session('success'))
    <div class="alert alert-success bg-transparent border border-success text-success p-3 mb-4 rounded-0" role="alert">
      <strong>Submission Confirmed!</strong>
      <div class="small">{{ session('success') }}</div>
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger bg-transparent border border-danger text-danger p-3 mb-4 rounded-0" role="alert">
      <strong class="d-block mb-1">Please review the following fields:</strong>
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
          @error('name')
          <span class="text-danger small mt-1 d-block">{{ $message }}</span>
          @enderror
        </div>

        <div class="col-md-6">
          <label for="email" class="form-label-dark">Your Email *</label>
          <input type="email" name="email" id="email" class="form-control-dark @error('email') border-danger @enderror" value="{{ old('email') }}" placeholder="alex@company.com" required>
          @error('email')
          <span class="text-danger small mt-1 d-block">{{ $message }}</span>
          @enderror
        </div>
      </div>

      <div class="row g-3 mb-3">
        <div class="col-md-6">
          <label for="subject" class="form-label-dark">Subject</label>
          <input type="text" name="subject" id="subject" class="form-control-dark" value="{{ old('subject') }}" placeholder="New Web Application">
        </div>

        <div class="col-md-6">
          <label for="project_type" class="form-label-dark">Project Type</label>
          <select name="project_type" id="project_type" class="form-select-dark">
            <option value="" {{ old('project_type') == '' ? 'selected' : '' }}>Select Project Type (Optional)</option>
            <option value="Laravel Web Application" {{ old('project_type') == 'Laravel Web Application' ? 'selected' : '' }}>Laravel Web Application</option>
            <option value="PHP & Relational Database" {{ old('project_type') == 'PHP & Relational Database' ? 'selected' : '' }}>PHP &amp; Relational Database</option>
            <option value="E-Commerce Platform" {{ old('project_type') == 'E-Commerce Platform' ? 'selected' : '' }}>E-Commerce Platform</option>
            <option value="UI/UX & Frontend Design" {{ old('project_type') == 'UI/UX & Frontend Design' ? 'selected' : '' }}>UI/UX &amp; Frontend Design</option>
            <option value="General Consultation" {{ old('project_type') == 'General Consultation' ? 'selected' : '' }}>General Consultation</option>
          </select>
        </div>
      </div>

      <div class="mb-4">
        <label for="message" class="form-label-dark">Message *</label>
        <textarea name="message" id="message" rows="5" class="form-control-dark @error('message') border-danger @enderror" placeholder="Describe your project, timeline, and goals..." required>{{ old('message') }}</textarea>
        @error('message')
        <span class="text-danger small mt-1 d-block">{{ $message }}</span>
        @enderror
      </div>

      <button type="submit" class="btn-form-submit">
        SEND INQUIRY TO HAIDER
      </button>
    </form>
  </div>
</section>
@endsection
