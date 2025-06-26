<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 p-8 bg-gray-100">

  <!-- WHAT'S NEW Marquee -->
  <div class="bg-white border border-[#e6c2a2] rounded shadow-md">
    <div class="flex items-center justify-between border-b border-[#e6c2a2] relative">
      <div class="flex items-center justify-between">
      <div class="bg-[#5c2e0d] text-white text-[12px] font-bold px-3 py-1">WHAT'S NEW</div>
      <div class="text-[#5c2e0d] text-[14px] font-semibold pl-3">PRESS RELEASE</div></div>
      <button id="toggleMarquee" onclick="toggleMarquee()" class="absolute right-3 top-1.5 text-[#5c2e0d] hover:text-[#3a1c06] transition">
        <span id="marqueeIcon" class="material-icons notranslate  text-sm notranslate">pause</span>
      </button>
    </div>

    <div class="relative h-[80%] overflow-hidden">
      <ul id="marqueeList" class="absolute top-0 left-0 w-full h-[80%] animate-marquee space-y-2 text-[#5c2e0d] text-[12px] p-4 leading-snug">
        <li class="flex items-center"><span class="material-icons notranslate  text-xs mr-1 notranslate">arrow_right</span><a href="#" class="hover:underline">Gram Sabha meetings scheduled for July 10</a></li>
        <li class="flex items-center"><span class="material-icons notranslate  text-xs mr-1 notranslate">arrow_right</span><a href="#" class="hover:underline">New Primary Health Center inaugurated</a></li>
        <li class="flex items-center"><span class="material-icons notranslate  text-xs mr-1 notranslate">arrow_right</span><a href="#" class="hover:underline">Smart Village Initiative launched</a></li>
        <li class="flex items-center"><span class="material-icons notranslate  text-xs mr-1 notranslate">arrow_right</span><a href="#" class="hover:underline">Digital grievance portal now live</a></li>
      </ul>
    </div>

    <div class="p-4 pt-0 flex justify-end">
      <a href="#" class="text-[#5c2e0d] text-[12px] border border-[#5c2e0d] px-4 py-1 rounded hover:bg-[#5c2e0d] hover:text-white transition">
        READ MORE &gt;
      </a>
    </div>
  </div>

  <!-- TENDERS Marquee -->
  <div class="bg-white border border-[#e6c2a2] rounded shadow-md">
    <div class="flex items-center justify-between border-b border-[#e6c2a2] relative">
      <div class="flex items-center justify-between"><div class="bg-[#5c2e0d] text-white text-[12px] font-bold px-3 py-1">TENDERS</div>
      <div class="text-[#5c2e0d] text-[14px] font-semibold pl-3">ACTIVE LIST</div></div>
      <button id="toggleTenderMarquee" onclick="toggleTenderMarquee()" class="absolute right-3 top-1.5 text-[#5c2e0d] hover:text-[#3a1c06] transition">
        <span id="tenderMarqueeIcon" class="material-icons notranslate  text-sm notranslate">pause</span>
      </button>
    </div>

    <div class="relative h-[80%] overflow-hidden">
      <ul id="tenderMarqueeList" class="absolute top-0 left-0 w-full h-[80%] animate-marquee space-y-2 text-[#5c2e0d] text-[12px] p-4 leading-snug">
        <li class="flex items-center"><span class="material-icons notranslate  text-xs mr-1 notranslate">arrow_right</span><a href="#" class="hover:underline">eProcurement notice open till July 30</a></li>
        <li class="flex items-center"><span class="material-icons notranslate  text-xs mr-1 notranslate">arrow_right</span><a href="#" class="hover:underline">PWD road project tender announced</a></li>
        <li class="flex items-center"><span class="material-icons notranslate  text-xs mr-1 notranslate">arrow_right</span><a href="#" class="hover:underline">Vendor registration extended</a></li>
        <li class="flex items-center"><span class="material-icons notranslate  text-xs mr-1 notranslate">arrow_right</span><a href="#" class="hover:underline">Community hall construction bids invited</a></li>
      </ul>
    </div>

    <div class="p-4 pt-0 flex justify-end">
      <a href="#" class="text-[#5c2e0d] text-[12px] border border-[#5c2e0d] px-4 py-1 rounded hover:bg-[#5c2e0d] hover:text-white transition">
        READ MORE &gt;
      </a>
    </div>
  </div>

  <!-- OTHER LINKS -->
<div class="bg-white border border-[#e6c2a2] p-5 rounded-lg shadow-md">
  <h3 class="text-[14px] font-bold text-[#5c2e0d] mb-4 flex items-center gap-2 uppercase tracking-wide">
    <span class="material-icons notranslate  text-[#5c2e0d] text-[18px]">link</span>
    Other Links
  </h3>

  <div class="grid gap-4">
    <!-- Card 1 -->
    <div class="bg-[#faf8f5] hover:bg-[#f2ece5] border border-[#e6c2a2] rounded-xl p-4 shadow-sm transition-all duration-200 hover:shadow-md">
      <a href="#" class="text-[#5c2e0d] text-[12px] font-semibold flex items-center gap-2">
        <span class="material-icons notranslate  text-sm notranslate">arrow_right</span>
        District Helpline
      </a>
    </div>

    <!-- Card 2 -->
    <div class="bg-[#faf8f5] hover:bg-[#f2ece5] border border-[#e6c2a2] rounded-xl p-4 shadow-sm transition-all duration-200 hover:shadow-md">
      <a href="#" class="text-[#5c2e0d] text-[12px] font-semibold flex items-center gap-2">
        <span class="material-icons notranslate  text-sm notranslate">arrow_right</span>
        Grievance Redressal Portal
      </a>
    </div>

    <!-- Card 3 -->
    <div class="bg-[#faf8f5] hover:bg-[#f2ece5] border border-[#e6c2a2] rounded-xl p-4 shadow-sm transition-all duration-200 hover:shadow-md">
      <a href="#" class="text-[#5c2e0d] text-[12px] font-semibold flex items-center gap-2">
        <span class="material-icons notranslate  text-sm notranslate">arrow_right</span>
        Digital Certificate Services
      </a>
    </div>

    <!-- Card 4 -->
    <div class="bg-[#faf8f5] hover:bg-[#f2ece5] border border-[#e6c2a2] rounded-xl p-4 shadow-sm transition-all duration-200 hover:shadow-md">
      <a href="#" class="text-[#5c2e0d] text-[12px] font-semibold flex items-center gap-2">
        <span class="material-icons notranslate  text-sm notranslate">arrow_right</span>
        Ayushman Bharat Info
      </a>
    </div>
  </div>
</div>


  <!-- MAP -->
 <div class="bg-white border border-[#e6c2a2] p-5 rounded-xl shadow-md">
  <h3 class="text-[12px] font-semibold text-[#5c2e0d] mb-4 flex items-center gap-2 uppercase tracking-wide">
    <span class="material-icons notranslate  text-[18px]">map</span>
    Location Map
  </h3>

  <div class="rounded-lg overflow-hidden shadow-inner">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2794.803174723074!2d83.75592217129049!3d27.2116890862327!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sin!4v1750652165203!5m2!1sen!2sin"
      width="100%"
      height="250"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>

  <p class="text-[12px] text-right text-[#5c2e0d] mt-2">
    <a href="https://maps.app.goo.gl/ECTsCsPDRDoGmcUm9" style="color: #5c2e0d; font-weight: bold;" target="_blank" class="hover:underline">
      Open in Google Maps
    </a>
  </p>
</div>


</div>

<!-- Marquee Animation CSS -->
<style>
  @keyframes marquee {
    0% { transform: translateY(100%); }
    100% { transform: translateY(-100%); }
  }

  .animate-marquee {
    animation: marquee 12s linear infinite;
    animation-play-state: running;
  }
</style>

<!-- JavaScript -->
<script>
  let marqueePaused = false;
  let tenderPaused = false;

  function toggleMarquee() {
    const marquee = document.getElementById("marqueeList");
    const icon = document.getElementById("marqueeIcon");

    if (marqueePaused) {
      marquee.style.animationPlayState = "running";
      icon.textContent = "pause";
    } else {
      marquee.style.animationPlayState = "paused";
      icon.textContent = "play_arrow";
    }
    marqueePaused = !marqueePaused;
  }

  function toggleTenderMarquee() {
    const marquee = document.getElementById("tenderMarqueeList");
    const icon = document.getElementById("tenderMarqueeIcon");

    if (tenderPaused) {
      marquee.style.animationPlayState = "running";
      icon.textContent = "pause";
    } else {
      marquee.style.animationPlayState = "paused";
      icon.textContent = "play_arrow";
    }
    tenderPaused = !tenderPaused;
  }
</script>
