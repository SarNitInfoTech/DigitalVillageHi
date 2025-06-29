<!-- गूगल मटेरियल आइकॉन्स -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

@include('common.breadcrumb')

<!-- संपर्क पृष्ठ आवरण -->
<div class="gap-6 p-6 bg-gray-50">

  <!-- अनुभाग शीर्षक -->
  <div class="text-center mb-10">
    <h2 class="text-3xl font-bold text-yellow-900">ग्राम कार्यालय से संपर्क करें – पकड़ी भरतखंड</h2>
    <p class="text-gray-700 mt-2">किसी भी सहायता या जानकारी के लिए हमसे बेहिचक संपर्क करें।</p>
  </div>

  <!-- ग्रिड: संपर्क फॉर्म + मानचित्र -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

    <!-- संपर्क फॉर्म -->
    <div class="bg-white rounded-2xl shadow-md p-8 border-t-4 border-yellow-800">
      <h3 class="text-xl font-semibold text-yellow-900 mb-6">हमें संदेश भेजें</h3>
      <form method="POST" action="#">
        <div class="mb-4">
          <label class="block mb-1 font-medium text-gray-700">पूरा नाम</label>
          <input type="text" name="name" required class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-800" />
        </div>
        <div class="mb-4">
          <label class="block mb-1 font-medium text-gray-700">ईमेल पता</label>
          <input type="email" name="email" required class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-800" />
        </div>
        <div class="mb-4">
          <label class="block mb-1 font-medium text-gray-700">विषय</label>
          <input type="text" name="subject" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-800" />
        </div>
        <div class="mb-6">
          <label class="block mb-1 font-medium text-gray-700">संदेश</label>
          <textarea name="message" rows="5" required class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-800"></textarea>
        </div>
        <button type="submit" class="w-full bg-yellow-900 text-white font-semibold py-2 rounded-md hover:bg-yellow-800 transition">प्रस्तुत करें</button>
      </form>
    </div>

    <!-- नक्शा -->
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
