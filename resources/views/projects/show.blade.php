@extends('layouts.app')

@section('title', $project['title'] . ' — Case Study | Haider Ali')
@section('meta_description', $project['summary'])

@section('content')
<article class="section-wrap" style="padding-top: 140px; padding-bottom: 80px;">
  <div class="mb-4">
    <a href="{{ route('projects.index') }}" class="underlined-link">
      ALL CASE STUDIES
    </a>
  </div>

  <div class="section-eyebrow">{{ strtoupper($project['category']) }}</div>
  <h1 class="display-heading mb-3">
    {{ strtoupper($project['title']) }}<span class="white-dot">.</span>
  </h1>
  <p class="fs-4 text-white font-monospace mb-4">{{ $project['tagline'] }}</p>
  <p class="about-description mt-0 mb-4" style="max-width: 820px;">
    {{ $project['summary'] }}
  </p>

  <div class="d-flex flex-wrap gap-3 mb-5">
    <a href="{{ $project['live_url'] }}" target="_blank" rel="noopener noreferrer" class="btn-form-submit">
      VISIT LIVE WEBSITE
    </a>
    <a href="{{ route('contact') }}" class="underlined-link">
      START SIMILAR PROJECT
    </a>
  </div>

  <!-- Hero Image -->
  <div class="border border-dark mb-5 overflow-hidden" style="background: #111;">
    <img src="{{ asset($project['image_hero']) }}" alt="{{ $project['title'] }}" class="w-100 d-block" style="max-height: 560px; object-fit: cover; object-position: center;" loading="eager">
  </div>

  <div class="row g-5">
    <!-- Narrative Column -->
    <div class="col-lg-8">
      <div class="mb-5">
        <div class="section-eyebrow">OVERVIEW</div>
        <h2 class="h3 text-white mb-3" style="font-family: var(--font);">Strategic Project Context</h2>
        <p class="text-secondary fs-5 lh-lg">
          {{ $project['overview'] }}
        </p>
      </div>

      <div class="row g-4 mb-5">
        <div class="col-md-6">
          <div class="p-4 bg-dark border border-secondary border-opacity-25 h-100">
            <div class="section-eyebrow text-danger mb-2">CHALLENGE</div>
            <h3 class="h5 text-white mb-2" style="font-family: var(--font);">The Architectural Hurdle</h3>
            <p class="text-secondary small mb-0 lh-base">
              {{ $project['challenge'] }}
            </p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="p-4 bg-dark border border-secondary border-opacity-25 h-100">
            <div class="section-eyebrow text-warning mb-2">SOLUTION</div>
            <h3 class="h5 text-white mb-2" style="font-family: var(--font);">The Implemented Architecture</h3>
            <p class="text-secondary small mb-0 lh-base">
              {{ $project['solution'] }}
            </p>
          </div>
        </div>
      </div>

      @if(!empty($project['key_metrics']))
      <div class="mb-5">
        <div class="section-eyebrow">IMPACT METRICS</div>
        <h3 class="h4 text-white mb-3" style="font-family: var(--font);">Measurable Performance Outcomes</h3>
        <div class="row g-3">
          @foreach($project['key_metrics'] as $metric)
          <div class="col-4">
            <div class="p-4 border border-secondary border-opacity-25 text-center" style="background: #111;">
              <div class="fs-2 fw-bold text-white mb-1" style="font-family: var(--font);">{{ $metric['value'] }}</div>
              <div class="small text-secondary text-uppercase" style="font-family: var(--font);">{{ $metric['label'] }}</div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      @endif

      @if(!empty($project['gallery']))
      <div class="mb-5">
        <div class="section-eyebrow">GALLERY</div>
        <h3 class="h4 text-white mb-3" style="font-family: var(--font);">Responsive Interface Previews</h3>
        <div class="row g-4">
          @foreach($project['gallery'] as $img)
          <div class="col-md-6">
            <div class="border border-secondary border-opacity-25 overflow-hidden" style="background: #09090b;">
              <img src="{{ asset($img) }}" alt="{{ $project['title'] }}" class="w-100 d-block" style="aspect-ratio: 16 / 10; object-fit: cover; object-position: center;" loading="lazy">
            </div>
          </div>
          @endforeach
        </div>
      </div>
      @endif
    </div>

    <!-- Sidebar Column -->
    <div class="col-lg-4">
      <div class="p-4 border border-secondary border-opacity-25 sticky-top" style="top: 110px; background: #111;">
        <div class="section-eyebrow">SPECIFICATIONS</div>
        <h3 class="h5 text-white mb-4" style="font-family: var(--font);">Project Metadata</h3>

        <div class="mb-3 pb-3 border-bottom border-secondary border-opacity-25">
          <small class="text-secondary text-uppercase d-block" style="font-family: var(--font);">Client</small>
          <strong class="text-white">{{ $project['client'] }}</strong>
        </div>

        <div class="mb-3 pb-3 border-bottom border-secondary border-opacity-25">
          <small class="text-secondary text-uppercase d-block" style="font-family: var(--font);">Year</small>
          <strong class="text-white">{{ $project['year'] }}</strong>
        </div>

        <div class="mb-3 pb-3 border-bottom border-secondary border-opacity-25">
          <small class="text-secondary text-uppercase d-block" style="font-family: var(--font);">Category</small>
          <strong class="text-white">{{ $project['category'] }}</strong>
        </div>

        <div class="mb-4">
          <small class="text-secondary text-uppercase d-block mb-2" style="font-family: var(--font);">Technologies</small>
          <div class="d-flex flex-wrap gap-1">
            @foreach($project['technologies'] as $tech)
            <span class="badge border border-secondary border-opacity-25 text-white fw-normal">{{ $tech }}</span>
            @endforeach
          </div>
        </div>

        <a href="{{ $project['live_url'] }}" target="_blank" rel="noopener noreferrer" class="btn-form-submit w-100 text-center">
          OPEN LIVE SITE
        </a>
      </div>
    </div>
  </div>

  <!-- Pagination - NO ARROWS -->
  <div class="d-flex justify-content-between align-items-center mt-5 pt-4 border-top border-secondary border-opacity-25">
    <div>
      @if($prevProject)
      <a href="{{ route('projects.show', $prevProject['slug']) }}" class="underlined-link">
        PREVIOUS PROJECT: {{ $prevProject['title'] }}
      </a>
      @endif
    </div>
    <div>
      @if($nextProject)
      <a href="{{ route('projects.show', $nextProject['slug']) }}" class="underlined-link">
        NEXT PROJECT: {{ $nextProject['title'] }}
      </a>
      @endif
    </div>
  </div>
</article>
@endsection
