<!-- Google Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

@include('common.breadcrumb')

<!-- Contact Page Wrapper -->
<div class="gap-6 p-6 bg-gray-50">

  <!-- Section Title -->
  <div class="text-center mb-10">
    <h2 class="text-3xl font-bold text-yellow-900">Contact Village Office – Pakadi Bharat Khand</h2>
    <p class="text-gray-700 mt-2">Feel free to reach out to us for any assistance or information.</p>
  </div>

  <!-- Grid: Contact Form + Map -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

    <!-- Contact Form -->
    <div class="bg-white rounded-2xl shadow-md p-8 border-t-4 border-yellow-800">
      <h3 class="text-xl font-semibold text-yellow-900 mb-6">Send Us a Message</h3>
      <form method="POST" action="#">
        <div class="mb-4">
          <label class="block mb-1 font-medium text-gray-700">Full Name</label>
          <input type="text" name="name" required class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-800" />
        </div>
        <div class="mb-4">
          <label class="block mb-1 font-medium text-gray-700">Email Address</label>
          <input type="email" name="email" required class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-800" />
        </div>
        <div class="mb-4">
          <label class="block mb-1 font-medium text-gray-700">Subject</label>
          <input type="text" name="subject" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-800" />
        </div>
        <div class="mb-6">
          <label class="block mb-1 font-medium text-gray-700">Message</label>
          <textarea name="message" rows="5" required class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-800"></textarea>
        </div>
        <button type="submit" class="w-full bg-yellow-900 text-white font-semibold py-2 rounded-md hover:bg-yellow-800 transition">Submit</button>
      </form>
    </div>

    <!-- Map -->
    <div class="overflow-hidden rounded-2xl shadow-md border-t-4 border-yellow-800">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2794.803174723074!2d83.75592217129049!3d27.2116890862327!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sin!4v1750652165203!5m2!1sen!2sin"
        width="100%"
        height="100%"
        style="border:0; min-height: 400px;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>

  </div>
</div>
