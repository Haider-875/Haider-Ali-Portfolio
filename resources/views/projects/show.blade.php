@extends('layouts.app')

@section('title', $project['title'] . ' — Case Study | Haider Ali')
@section('meta_description', $project['summary'])

@section('content')
<article class="section-wrap" style="padding-top: 130px; padding-bottom: 80px;">
  <div class="mb-4">
    <a href="{{ route('projects.index') }}" class="underlined-link" style="font-size: 11px; letter-spacing: 0.1em;">
      ALL CASE STUDIES
    </a>
  </div>

  <div class="section-eyebrow" style="font-size: 10.5px; letter-spacing: 0.14em;">{{ strtoupper($project['category']) }}</div>
  <h1 class="case-study-title">
    {{ strtoupper($project['title']) }}<span class="white-dot">.</span>
  </h1>
  <p class="case-study-tagline">{{ $project['tagline'] }}</p>
  <p class="case-study-summary">
    {{ $project['summary'] }}
  </p>

  <div class="d-flex flex-wrap align-items-center gap-3 mb-5">
    <a href="{{ $project['live_url'] }}" target="_blank" rel="noopener noreferrer" class="btn-form-submit" style="font-size: 11px; padding: 11px 22px; letter-spacing: 0.12em;">
      VISIT LIVE WEBSITE
    </a>
    <a href="{{ route('contact') }}" class="underlined-link" style="font-size: 11px; letter-spacing: 0.1em;">
      START SIMILAR PROJECT
    </a>
  </div>

  <!-- Hero Image -->
  <div class="border border-dark mb-5 overflow-hidden" style="background: #111; border-radius: 4px;">
    <img src="{{ asset($project['image_hero']) }}" alt="{{ $project['title'] }}" class="w-100 d-block" style="max-height: 520px; object-fit: cover; object-position: center;" loading="eager">
  </div>

  <div class="row g-5">
    <!-- Narrative Column -->
    <div class="col-lg-8">
      <div class="mb-5">
        <div class="section-eyebrow" style="font-size: 10px; letter-spacing: 0.12em;">OVERVIEW</div>
        <h2 class="case-study-heading">Strategic Project Context</h2>
        <p class="case-study-lead">
          {{ $project['overview'] }}
        </p>
      </div>

      <div class="row g-4 mb-5">
        <div class="col-md-6">
          <div class="p-4 bg-dark border border-secondary border-opacity-25 h-100" style="border-radius: 4px;">
            <div class="section-eyebrow text-danger mb-2" style="font-size: 9.5px; letter-spacing: 0.12em;">CHALLENGE</div>
            <h3 class="case-card-title">The Architectural Hurdle</h3>
            <p class="case-card-text">
              {{ $project['challenge'] }}
            </p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="p-4 bg-dark border border-secondary border-opacity-25 h-100" style="border-radius: 4px;">
            <div class="section-eyebrow text-warning mb-2" style="font-size: 9.5px; letter-spacing: 0.12em;">SOLUTION</div>
            <h3 class="case-card-title">The Implemented Architecture</h3>
            <p class="case-card-text">
              {{ $project['solution'] }}
            </p>
          </div>
        </div>
      </div>

      @if(!empty($project['key_metrics']))
      <div class="mb-5">
        <div class="section-eyebrow" style="font-size: 10px; letter-spacing: 0.12em;">IMPACT METRICS</div>
        <h3 class="case-study-heading">Measurable Performance Outcomes</h3>
        <div class="row g-3">
          @foreach($project['key_metrics'] as $metric)
          <div class="col-12 col-sm-4">
            <div class="p-3 p-sm-4 border border-secondary border-opacity-25 text-center h-100" style="background: #111; border-radius: 4px;">
              <div class="metric-card-val">{{ $metric['value'] }}</div>
              <div class="metric-card-lbl">{{ $metric['label'] }}</div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      @endif

      @if(!empty($project['gallery']))
      <div class="mb-5">
        <div class="section-eyebrow" style="font-size: 10px; letter-spacing: 0.12em;">GALLERY</div>
        <h3 class="case-study-heading">Responsive Interface Previews</h3>
        <div class="row g-4">
          @foreach($project['gallery'] as $img)
          <div class="col-md-6">
            <div class="border border-secondary border-opacity-25 overflow-hidden" style="background: #09090b; border-radius: 4px;">
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
      <div class="p-4 border border-secondary border-opacity-25 sticky-top" style="top: 110px; background: #111; border-radius: 4px;">
        <div class="section-eyebrow" style="font-size: 10px; letter-spacing: 0.12em;">SPECIFICATIONS</div>
        <h3 class="spec-sidebar-title">Project Metadata</h3>

        <div class="mb-3 pb-3 border-bottom border-secondary border-opacity-25">
          <small class="spec-label">Client</small>
          <strong class="spec-value">{{ $project['client'] }}</strong>
        </div>

        <div class="mb-3 pb-3 border-bottom border-secondary border-opacity-25">
          <small class="spec-label">Year</small>
          <strong class="spec-value">{{ $project['year'] }}</strong>
        </div>

        <div class="mb-3 pb-3 border-bottom border-secondary border-opacity-25">
          <small class="spec-label">Category</small>
          <strong class="spec-value">{{ $project['category'] }}</strong>
        </div>

        <div class="mb-4">
          <small class="spec-label mb-2">Technologies</small>
          <div class="d-flex flex-wrap gap-1">
            @foreach($project['technologies'] as $tech)
            <span class="spec-tech-badge">{{ $tech }}</span>
            @endforeach
          </div>
        </div>

        <a href="{{ $project['live_url'] }}" target="_blank" rel="noopener noreferrer" class="btn-form-submit w-100 text-center" style="font-size: 11px; padding: 11px 16px; letter-spacing: 0.12em;">
          OPEN LIVE SITE
        </a>
      </div>
    </div>
  </div>

  <!-- Pagination - NO ARROWS -->
  <div class="d-flex justify-content-between align-items-center mt-5 pt-4 border-top border-secondary border-opacity-25">
    <div>
      @if($prevProject)
      <a href="{{ route('projects.show', $prevProject['slug']) }}" class="underlined-link" style="font-size: 11px; letter-spacing: 0.08em;">
        PREVIOUS PROJECT: {{ $prevProject['title'] }}
      </a>
      @endif
    </div>
    <div>
      @if($nextProject)
      <a href="{{ route('projects.show', $nextProject['slug']) }}" class="underlined-link" style="font-size: 11px; letter-spacing: 0.08em;">
        NEXT PROJECT: {{ $nextProject['title'] }}
      </a>
      @endif
    </div>
  </div>
</article>
@endsection
