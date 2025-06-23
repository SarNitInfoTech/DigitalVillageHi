<header>
  <div id="topBar" class="wrapper make-accessible-header">
    <div class="container">
      <div aria-label="Primary">
        <div id="accessibility">
          <ul id="accessibilityMenu">
            <li>
              <a href="#SkipContent" class="skip-to-content" title="Skip to main content">
                <span class="icon-skip-to-main responsive-show"></span>
                <strong class="responsive-hide">SKIP TO MAIN CONTENT</strong>
              </a>
            </li>
            <li>
              <a lang="hi" href="http://up.gov.in/" target="_blank" title="उत्तर प्रदेश सरकार">
                उत्तर प्रदेश सरकार
              </a>
            </li>
            <li>
              <a lang="en" href="http://up.gov.in/" target="_blank">Government of Uttar Pradesh</a>
            </li>
            <li class="searchbox">
              <a href="#" title="Site Search" aria-label="Site Search">
                <img class="show-con" src="images/search-icon.png" title="Search Icon" alt="Search Icon">
              </a>
              <div class="goiSearch">
                <form onsubmit="return search_validation()" action="https://siddharthnagar.nic.in/" method="get">
                  <label for="search" class="hide">Search</label>
                  <input type="hidden" name="csrf_nonce" value="1d38c56e4e">
                  <input type="hidden" name="_wp_http_referer" value="/">
                  <input type="search" name="s" id="search" placeholder="Search..." title="Enter Text">
                  <button type="submit" title="Search">
                    <small class="tcon">Search</small>
                    <span class="icon-search" aria-hidden="true"></span>
                  </button>
                </form>
              </div>
            </li>
            <li>
              <a href="#" title="Social Media Links" class="show-social-links">
                <img class="show-con" src="images/social-icon.png" title="Social Icon" alt="Social Icon">
                <span class="off-css">Social Media Links</span>
              </a>
              <ul class="socialIcons">
                <li><a href="https://www.facebook.com/dmsdr" target="_blank">
                    <img src="images/ico-facebook.png" alt="Facebook"></a></li>
                <li><a href="https://twitter.com/login" target="_blank">
                    <img src="images/ico-twitter.png" alt="Twitter"></a></li>
                <li><a href="https://www.youtube.com/watch?v=aH21BZMt5sc" target="_blank">
                    <img src="images/ico-youtube.png" alt="Youtube"></a></li>
              </ul>
            </li>
            <li>
              <a href="https://siddharthnagar.nic.in/site-map/" title="Sitemap">
                <img class="show-con" src="images/sitemap-icon.png" alt="Sitemap Icon">
                <span class="off-css">Site Map</span>
              </a>
            </li>
            <li>
              <a href="#" title="Accessibility Links" class="accessible-icon">
                <img class="show-con" src="images/accessibility.png" alt="Accessibility Icon">
                <span class="off-css">Accessibility Links</span>
              </a>
              <ul class="accessiblelinks textSizing">
                <li class="fontSizeEvent"><a data-event-type="increase" href="#">A+<span class="off-css"> Font Size
                      Increase</span></a></li>
                <li class="fontSizeEvent"><a data-event-type="normal" href="#">A<span class="off-css"> Normal
                      Font</span></a></li>
                <li class="fontSizeEvent"><a data-event-type="decrease" href="#">A-<span class="off-css"> Font Size
                      Decrease</span></a></li>
                <li class="highContrast dark"><a href="#">A <span class="tcon">High Contrast</span></a></li>
                <li class="highContrast light"><a class="link-selected" href="#">A <span class="tcon">Normal
                      Contrast</span></a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="change-language link-selected" title="English">English</a>
              <ul class="socialIcons select-lang">
                <li class="lang-item lang-item-hi mFocus"><a lang="hi" href="https://siddharthnagar.nic.in/hi/"
                    title="हिन्दी">हिन्दी</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="wrapper header-wrapper">
    <div class="container header-container">
      <div class="logo flex items-center gap-4">
  <!-- Logo/Image Section -->
  <div>
    <a href="https://siddharthnagar.nic.in/" title="Go to home" class="emblem block">
      <img class="site_logo h-28 w-auto" id="logo" src="{{ url('images/2018022493.png') }}"
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



      <div class="header-right">
        <div class="float-element">
          <a href="http://www.digitalindia.gov.in/" target="_blank" title="Digital India">
            <img class="sw-logo" height="95" src="{{('images/2018062262.png')}}" alt="Digital India">
          </a>
        </div>
      </div>
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