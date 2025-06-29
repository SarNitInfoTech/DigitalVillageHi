<div id="slide" class="home-slider flexslider relative overflow-hidden shadow-lg w-full rounded-xl">
  <ul class="slides">
    <!-- Slide 1 -->
    <li class="relative group">
      <a href="https://www.sarnitinfotech.com/" target="_blank" class="block">
        <img src="{{ url('images/slider/4.jpg') }}" alt="CBPS MyGov" class="w-full h-[500px] object-cover rounded-xl transition-transform duration-500 group-hover:scale-105" />
        <div class="absolute bottom-0 left-0 w-full bg-black/60 p-4 text-white text-center">
          <p class="text-[20px] font-bold">CBPS MyGov</p>
        </div>
      </a>
    </li>

    <!-- Slide 2 -->
    <li class="relative group">
      <a href="https://www.sarnitinfotech.com/" target="_blank" class="block">
        <img src="{{ url('images/slider/1.jpg') }}" alt="Janjatiya Gaurav Diwas" class="w-full h-[500px] object-cover rounded-xl transition-transform duration-500 group-hover:scale-105" />
        <div class="absolute bottom-0 left-0 w-full bg-black/60 p-4 text-white text-center">
          <p class="text-[20px] font-bold">Janjatiya Gaurav Diwas</p>
        </div>
      </a>
    </li>

    <!-- Slide 3 -->
    <li class="relative group">
      <a href="https://www.sarnitinfotech.com/" target="_blank" class="block">
        <img src="{{ url('images/slider/2.jpg') }}" alt="Har Ghar Tiranga" class="w-full h-[500px] object-cover rounded-xl transition-transform duration-500 group-hover:scale-105" />
        <div class="absolute bottom-0 left-0 w-full bg-black/60 p-4 text-white text-center">
          <p class="text-[20px] font-bold">Har Ghar Tiranga</p>
        </div>
      </a>
    </li>

    <!-- Slide 4 -->
    <li class="relative group">
      <a href="https://www.sarnitinfotech.com/" target="_blank" class="block">
        <img src="{{ url('images/slider/3.jpg') }}" alt="District Magistrate Office" class="w-full h-[500px] object-cover rounded-xl transition-transform duration-500 group-hover:scale-105" />
        <div class="absolute bottom-0 left-0 w-full bg-black/60 p-4 text-white text-center">
          <p class="text-[20px] font-bold">District Magistrate Office</p>
        </div>
      </a>
    </li>
  </ul>
</div>
<script>
  jQuery(document).ready(function ($) {
    $('.home-slider').flexslider({
      animation: ($('body').hasClass('rtl')) ? "fade" : "slide",
      directionNav: true,
      prevText: "<span class='hide'>Previous</span>",
      nextText: "<span class='hide'>Next</span>",
      pausePlay: true,
      pauseText: "<span class='hide'>Pause</span>",
      playText: "<span class='hide'>Play</span>",
      controlNav: false,
      start: function (slider) {
        $('body').find('.flexslider').resize();
        if (slider.count === 1) {
          slider.pausePlay.parent().remove();
        }
        $('.home-slider ul.slides li.clone a').each(function () {
          $(this).replaceWith($(this).html());
        });
      }
    });
  });
</script>
