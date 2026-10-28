<header class="site-header" id="site-header">
  <div class="container-fluid page-gutter header-inner">
    <a class="brand" href="{{ route('home') }}" aria-label="Haider Ali, home">
      H.A<span class="light-dot">.</span>
    </a>

    <nav class="desktop-nav" aria-label="Main navigation">
      <a href="{{ request()->routeIs('home') ? '#work' : route('projects.index') }}" class="{{ request()->routeIs('projects.*') ? 'active' : '' }}">
        Work
      </a>
      <a href="{{ request()->routeIs('home') ? '#about' : route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">
        About
      </a>
      <a href="{{ request()->routeIs('home') ? '#expertise' : route('home') . '#expertise' }}">
        Expertise
      </a>
      <a href="{{ request()->routeIs('home') ? '#contact' : route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">
        Contact
      </a>
    </nav>

    <!-- Header CTA - NO ARROWS -->
    <a class="header-cta" href="{{ request()->routeIs('home') ? '#contact' : route('contact') }}">
      LET'S TALK
    </a>

    <!-- Mobile Menu Toggle -->
    <button class="menu-toggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-nav">
      <span></span>
      <span></span>
    </button>
  </div>
</header>

<!-- Mobile Navigation -->
<nav id="mobile-nav" class="mobile-nav" aria-label="Mobile navigation" inert>
  <a href="{{ route('home') }}">Home</a>
  <a href="{{ request()->routeIs('home') ? '#work' : route('projects.index') }}">Work</a>
  <a href="{{ request()->routeIs('home') ? '#about' : route('about') }}">About</a>
  <a href="{{ request()->routeIs('home') ? '#expertise' : route('home') . '#expertise' }}">Expertise</a>
  <a href="{{ request()->routeIs('home') ? '#contact' : route('contact') }}">Contact</a>
  <p>WEB DEVELOPER — AVAILABLE FOR SELECT PROJECTS</p>
</nav>
