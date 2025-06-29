<section id="footerScrollbarWrapper" class="footerlogocarousel withbg withborder " aria-label="Other Important Links">
  <div class="footerlogocarousel-outer item-count-7">
    <div id="footerScrollbar" class="flexslider">
      <ul class="slides" aria-label="Important Sites">
        <li>
          <a href="https://data.gov.in/" target="_blank" title="Open Government Data (OGD)  Platform India">
            <img decoding="async" src="{{ url('images/2017053014.png') }}" alt="data.gov.in">
          </a>
        </li>
        <li>
          <a href="https://www.incredibleindia.org/" target="_blank" title="Incredible India">
            <img decoding="async" src="{{ url('images/2017053094.png') }}" alt="Incredible India Site">
          </a>
        </li>
        <li>
          <a href="https://www.mygov.in/" target="_blank" title="My Government">
            <img decoding="async" src="{{ url('images/2017053017.png') }}" alt="mygov">
          </a>
        </li>
        <li>
          <a href="https://www.pmnrf.gov.in/" target="_blank" title="Prime Minister’s National Relief Fund">
            <img decoding="async" src="{{ url('images/2017053039.png') }}" alt="PMNRF">
          </a>
        </li>
        <li>
          <a href="http://www.pmindia.gov.in/en/" target="_blank" title="Prime Minister of India">
            <img decoding="async" src="{{ url('images/2017110781.png') }}" alt="pmindia">
          </a>
        </li>
        <li>
          <a href="https://www.india.gov.in/" target="_blank" title="Indian Government Portal">
            <img decoding="async" src="{{ url('images/2017053023.png') }}" alt="india.gov.in">
          </a>
        </li>
        <li>
          <a href="http://www.digitalindia.gov.in/" target="_blank" title="Digital India">
            <img decoding="async" src="{{ url('images/2017072418.png') }}" alt="digital-india">
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>

<script type="text/javascript">
  jQuery(document).ready(function () {
    jQuery("#footerScrollbar").flexslider({
      animation: "slide",
      animationLoop: true,
      itemWidth: 201,
      minItems: 2,
      slideshow: 1,
      move: 1,
      controlNav: false,
      pausePlay: true,
      prevText: "<span class='hide'>Previous</span>",
      nextText: "<span class='hide'>Next</span>",
      pauseText: "<span class='hide'>Pause</span>",
      playText: "<span class='hide'>Play</span>"
    });
  });
</script>
