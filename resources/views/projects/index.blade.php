@extends('layouts.app')

@section('title', 'Selected Work & Case Studies — Haider Ali')
@section('meta_description', 'A curated archive of six real-world web applications and platforms engineered by Haider Ali.')

@section('content')
<section class="work-section section-wrap" style="padding-top: 140px;">
  <div class="section-eyebrow reveal">PROJECT ARCHIVE</div>
  <div class="section-heading-row reveal">
    <div>
      <h1 class="display-heading">SELECTED <i>WORK</i><span class="white-dot">.</span></h1>
    </div>
    <p>A selection of websites I've worked on.<br>Explore the live experiences.</p>
  </div>

  <div class="project-list">
    @foreach($projects as $idx => $project)
    <div class="project">
      <span class="project-num">0{{ $idx + 1 }} / 06</span>
      <div class="project-main">
        <h3>
          <a href="{{ route('projects.show', $project['slug']) }}">
            {{ $project['title'] }}
          </a>
        </h3>
        <p>
          <span>{{ $project['category'] }}</span>
          <span class="mx-2">&bull;</span>
          <a href="{{ $project['live_url'] }}" target="_blank" rel="noopener noreferrer" class="text-secondary text-decoration-underline">
            {{ $project['live_url'] }}
          </a>
        </p>
      </div>
      <div class="project-preview preview-{{ strtolower(explode(' ', $project['title'])[0]) }}" aria-hidden="true">
        <small>{{ $project['title'] }}</small>
        <b>{{ $project['tagline'] }}</b>
        <span>EXPLORE CASE STUDY</span>
      </div>
    </div>
    @endforeach
  </div>

  <div class="d-flex justify-content-between align-items-center mt-5 pt-3 border-top border-dark">
    <p class="project-footnote m-0">ALL SITES ARE LIVE PRODUCTION EXPERIENCES BUILT WITH PURPOSE AND ATTENTION TO DETAIL.</p>
    <a href="{{ route('home') }}" class="underlined-link">RETURN HOME</a>
  </div>
</section>
@endsection
