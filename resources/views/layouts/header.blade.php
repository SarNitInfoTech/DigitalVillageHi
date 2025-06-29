<header>
  <div id="topBar" class="wrapper make-accessible-header">
    <div class="container">
      <div aria-label="Primary">
        <div id="accessibility">
          <ul id="accessibilityMenu">
  <li>
     <a href="#SkipContent" class="skip-to-content" title="Skip to main content">
  <strong class="responsive-hide" style="display: inline-flex; align-items: center;">
    <span class="material-icons" style="margin-right: 4px;">keyboard_double_arrow_down</span>
    SKIP TO MAIN CONTENT
  </strong>
</a>
  </li>
  <li class="searchbox">
    <a href="#" title="Site Search" aria-label="Site Search">
      <span class="material-icons">search</span>
    </a>
    <div class="goiSearch">
      <form onsubmit="return search_validation()" action="" method="get">
        <label for="search" class="hide">Search</label>
        <input type="hidden" name="csrf_nonce" value="1d38c56e4e">
        <input type="hidden" name="_wp_http_referer" value="/">
        <input type="search" name="s" id="search" placeholder="Search..." title="Enter Text">
        <button type="submit" title="Search">
          <small class="tcon">Search</small>
          <span class="material-icons" aria-hidden="true">search</span>
        </button>
      </form>
    </div>
  </li>
  <li>
    <a href="#" title="Social Media Links" class="show-social-links">
      <span class="material-icons">share</span>
      <span class="off-css">Social Media Links</span>
    </a>
    <ul class="socialIcons">
      <li><a href="https://www.facebook.com/" target="_blank"><span class="material-icons">facebook</span></a></li>
      <li><a href="https://twitter.com/login" target="_blank"><span class="material-icons">close</span></a></li>
      <li><a href="https://www.youtube.com/" target="_blank"><span class="material-icons">smart_display</span></a></li>
    </ul>
  </li>
  <li>
    <a href="site-map/" title="Sitemap">
      <span class="material-icons">map</span>
      <span class="off-css">Site Map</span>
    </a>
  </li>
  <li>
    <a href="#" title="Accessibility Links" class="accessible-icon">
      <span class="material-icons">accessibility</span>
      <span class="off-css">Accessibility Links</span>
    </a>
    <ul class="accessiblelinks textSizing">
      <li class="fontSizeEvent"><a data-event-type="increase" href="#">A+<span class="off-css"> Font Size Increase</span></a></li>
      <li class="fontSizeEvent"><a data-event-type="normal" href="#">A<span class="off-css"> Normal Font</span></a></li>
      <li class="fontSizeEvent"><a data-event-type="decrease" href="#">A-<span class="off-css"> Font Size Decrease</span></a></li>
      <li class="highContrast dark"><a href="#">A <span class="tcon">High Contrast</span></a></li>
      <li class="highContrast light"><a class="link-selected" href="#">A <span class="tcon">Normal Contrast</span></a></li>
    </ul>
  </li>

  <!-- Language Switcher -->
  <li class="language-switch">
    <a href="#" class="change-language link-selected" title="English">English</a>
    <ul class="socialIcons select-lang">
      <li class="lang-item lang-item-hi mFocus">
        <a href="https://preview.sarnitthemes.com/sndv25/digitalvillagehi/public" onclick="doGTranslate('en|hi'); return false;" lang="hi" title="हिन्दी">हिन्दी</a>
      </li>
      <li class="lang-item lang-item-en">
        <a href="https://preview.sarnitthemes.com/sndv25/digitalvillage/public" onclick="doGTranslate('hi|en'); return false;" lang="en" title="English">English</a>
      </li>
    </ul>
  </li>

  <!-- Google Translate Container and Scripts (unchanged) -->
  <div id="google_translate_element" style="display: none;"></div>
</ul>

<!-- Ensure Material Icons CDN is linked -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

        </div>
      </div>
    </div>
  </div>
<link rel="icon" type="image/x-icon" href="{{ url('images/favicon.ico') }}">

  <div class="wrapper header-wrapper">
    <div class="container header-container">
      <div class="logo flex items-center gap-4">
  <!-- Logo/Image Section -->
  <div>
    <a href="" title="Go to home" class="emblem block">
      <img class="site_logo h-28 w-auto" id="logo" src="{{ url('images/logo.png') }}"
        alt="Siddharthnagar Logo">
    </a>
  </div>

  <!-- Text Section -->
  <div class="logo-text">
    <strong lang="hi" class="site_name_regional block text-3xl font-extrabold leading-snug">
      पकड़ी भारत खंड
    </strong>
    <h1 class="site_name_english text-2xl font-bold leading-snug">
      Pakadi Bharat Khand
    </h1>
  </div>
</div>



      {{-- <div class="header-right">
        <div class="float-element">
          <a href="http://www.digitalindia.gov.in/" target="_blank" title="Digital India">
            <img class="sw-logo" height="95" src="{{('images/2018062262.png')}}" alt="Digital India">
          </a>
        </div>
      </div> --}}
      <a class="menuToggle" href="#" title="Mobile Menu">
        <span class="icon-menu"></span><span class="tcon">Menu Toggle</span>
      </a>
    </div>
  </div>

  <div class="menuWrapper">
    <div class="menuMoreText hide">More</div>
    <div class="container">
      @include('common.menu') {{-- Assuming you're rendering menu here --}}
    </div>
  </div>

  <div class="clearfix"></div>
  <div id="overflowMenu">
    <div class="ofMenu">
      <ul></ul>
    </div>
    <a title="Close" href="#" class="closeMenu"><span class="icon-close"></span> Close</a>
  </div>
</header>