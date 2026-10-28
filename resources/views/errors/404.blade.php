@extends('layouts.app')

@section('title', 'Page Not Found — 404 | Haider Ali')

@section('content')
<section class="section-wrap text-center" style="padding-top: 180px; padding-bottom: 140px;">
  <div class="section-eyebrow mb-3">ERROR 404</div>
  <h1 class="display-heading mb-4">
    PAGE NOT <i>FOUND</i><span class="white-dot">.</span>
  </h1>
  <p class="about-small mx-auto mb-5">
    The requested URL or case study could not be located in this directory.
  </p>
  <div class="d-flex justify-content-center gap-3">
    <a href="{{ route('home') }}" class="btn-form-submit">
      RETURN HOME
    </a>
    <a href="{{ route('projects.index') }}" class="underlined-link">
      VIEW SHOWCASE WORK
    </a>
  </div>
</section>
@endsection
