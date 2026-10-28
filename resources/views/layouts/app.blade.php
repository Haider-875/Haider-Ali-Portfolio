<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#080808">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'Haider Ali® — Creative Web Developer | Laravel & PHP')</title>
  <meta name="description" content="@yield('meta_description', 'Haider Ali — Laravel & PHP Developer and UI/UX Designer. Selected work, skills and creative digital experiences.')">

  <meta property="og:title" content="@yield('title', 'Haider Ali® — Creative Web Developer')">
  <meta property="og:description" content="@yield('meta_description', 'Laravel & PHP Developer crafting modern, responsive, and engaging web experiences.')">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('images/portrait/haider-portrait.jpg') }}">

  <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220%22%20%22100%22%20%22100%22><text y=%22.9em%22 font-size=%2290%22>⚡</text></svg>">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <a href="#main" class="skip-link">Skip to content</a>

  <!-- Page Loader -->
  <div class="page-loader" aria-hidden="true">
    <span>H.A<span class="light-dot">.</span></span>
    <div class="loader-line"></div>
  </div>

  <!-- Header -->
  @include('partials.navbar')

  <!-- Main Content -->
  <main id="main">
    @yield('content')
  </main>

  <!-- Footer -->
  @include('partials.footer')

  @stack('scripts')
</body>
</html>
