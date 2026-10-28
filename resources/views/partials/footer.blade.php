<footer class="footer section-wrap">
  <div class="footer-top">
    <a class="brand" href="{{ route('home') }}">H.A<span class="light-dot">.</span></a>
    <div>
      <a href="{{ config('portfolio.owner.github', 'https://github.com/haider-875') }}" target="_blank" rel="noopener noreferrer">GITHUB</a>
      <a href="mailto:{{ config('portfolio.owner.email', 'Hadihnd0@gmail.com') }}">EMAIL</a>
      <a href="#site-header">BACK TO TOP</a>
    </div>
  </div>
  <div class="footer-bottom">
    <span>&copy; <span id="year">{{ date('Y') }}</span> HAIDER ALI. ALL RIGHTS RESERVED.</span>
    <span>DESIGNED WITH PURPOSE. BUILT WITH CODE.</span>
  </div>
</footer>
