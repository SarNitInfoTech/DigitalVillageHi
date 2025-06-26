@php
  $galleryImages = [
    'images/gallery/1.png',
    'images/gallery/2.jpeg',
    'images/gallery/2.jpeg',
    'images/gallery/1.png',
    'images/gallery/2.jpeg',
  ];
@endphp

<div class="grid grid-cols-1 lg:grid-cols-4 gap-6 p-6 bg-gray-100">
  <!-- Photo Gallery -->
  <div class="lg:col-span-3 bg-white border border-[#e6c2a2] rounded-lg shadow-md">
    <div class="flex items-center justify-between px-4 py-2 border-b border-[#e6c2a2]">
      <div class="bg-[#5c2e0d] text-white text-[12px] font-bold px-3 py-1">PHOTO GALLERY</div>
      <div class="flex items-center gap-2">
        <button onclick="prevImage()" class="material-icons notranslate  text-[#5c2e0d] text-[20px] hover:text-black">chevron_left</button>
        <button onclick="nextImage()" class="material-icons notranslate  text-[#5c2e0d] text-[20px] hover:text-black">chevron_right</button>
        <a href="#" class="text-white bg-black text-[12px] font-semibold px-3 py-1 rounded hover:bg-gray-800 transition">VIEW ALL</a>
      </div>
    </div>

   <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 p-4">
  <!-- Main Image -->
  <div class="lg:col-span-3">
    <img id="mainImage" src="{{ asset($galleryImages[0]) }}" alt="Main Gallery" class="w-full h-[420px] object-cover rounded-lg transition duration-300">
  </div>

  <!-- Thumbnails -->
  <div class="grid grid-cols-3 lg:grid-cols-1 gap-3">
    @foreach ($galleryImages as $index => $img)
      <img src="{{ asset($img) }}" class="w-full h-[78px] object-cover rounded cursor-pointer hover:opacity-80" onclick="changeImage({{ $index }})">
    @endforeach
  </div>
</div>

  </div>

 <!-- About Pradhan -->
<div class="bg-white border border-[#e6c2a2] rounded-lg shadow-md p-6 text-center">
  <!-- Profile Image: 50% Width -->
  <div class="flex justify-center mb-4">
    <img src="images/user/1.jpeg" alt="Pradhan Profile"
         class="w-1/2 max-w-[300px] h-auto aspect-square rounded-[6px] object-cover shadow-md">
  </div>

  <!-- Name & Title -->
  <h3 class="text-[#5c2e0d] text-[16px] font-bold uppercase tracking-wide mb-1">Mr. Pradhan Kumar</h3>
  <p class="text-[13px] text-gray-700 font-semibold mb-3">Village Head, Pakdi Gram Panchayat</p>

  <!-- Personal Details -->
  <div class="text-[12px] text-gray-600 leading-relaxed space-y-2 text-left px-2">
    <p><span class="font-bold text-[#5c2e0d]">Tenure:</span> Serving since April 2021</p>
    <p><span class="font-bold text-[#5c2e0d]">Education:</span> Bachelor of Arts in Rural Development</p>
    <p><span class="font-bold text-[#5c2e0d]">Contact:</span> +91-9876543210</p>
    <p><span class="font-bold text-[#5c2e0d]">Email:</span> pradhan.kumar@pakdigram.in</p>
  </div>

</div>

</div>

<!-- JS for Image Rotation & Manual Controls -->
<script>
  const images = @json($galleryImages);
  let current = 0;
  const mainImage = document.getElementById('mainImage');

  function changeImage(index) {
    current = index;
    mainImage.src = images[current];
  }

  function nextImage() {
    current = (current + 1) % images.length;
    mainImage.src = images[current];
  }

  function prevImage() {
    current = (current - 1 + images.length) % images.length;
    mainImage.src = images[current];
  }

  setInterval(() => {
    nextImage();
  }, 3000);
</script>
