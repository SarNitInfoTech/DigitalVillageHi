<!-- गूगल मटेरियल आइकॉन्स -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

@include('common.breadcrumb') <!-- सामान्य ब्रेडक्रम्ब शामिल करें -->

<!-- ब्राउन थीम के साथ अनुभाग आवरण -->
<div class="gap-6 p-6">

  <!-- लाइसेंस निर्गमन अनुभाग -->
  <section class="bg-white rounded-2xl shadow-md p-8 border-t-4 border-yellow-800 mt-6">
    <div class="flex items-center mb-6">
      <span class="material-icons notranslate text-yellow-800 text-4xl mr-4">workspace_premium</span>
      <h2 class="text-2xl font-bold text-yellow-900">लाइसेंस निर्गमन – व्यापार प्राधिकरण</h2>
    </div>

    <!-- विवरण -->
    <div class="mb-6">
      <p class="text-gray-700">
        नगर पंचायत क्षेत्र में कोई भी व्यापार या व्यवसाय करने के लिए संबंधित व्यक्ति को वैध व्यापार लाइसेंस प्राप्त करना अनिवार्य है। यह लाइसेंस व्यवसाय संचालन की अनुमति देता है, लेकिन यह उस संपत्ति पर स्वामित्व का अधिकार नहीं देता जहाँ व्यापार किया जा रहा है। यह केवल व्यापारिक अनुमतियों तक सीमित होता है।
      </p>
    </div>

    <!-- लाइसेंस के प्रकार -->
    <div>
      <h3 class="text-xl font-semibold text-gray-800 mb-2">व्यापार लाइसेंस के प्रकार</h3>

      <h4 class="font-medium text-gray-800 mt-4">प्रकार A – खाद्य आधारित व्यवसाय</h4>
      <ul class="list-disc list-inside text-gray-700 space-y-1">
        <li>होटल, रेस्टोरेंट</li>
        <li>चाय और कॉफी की दुकानें</li>
        <li>धर्मशालाएँ, बेकरी</li>
        <li>जनरल स्टोर आदि</li>
      </ul>

      <h4 class="font-medium text-gray-800 mt-4">प्रकार B – यंत्रीकृत प्रतिष्ठान</h4>
      <ul class="list-disc list-inside text-gray-700 space-y-1">
        <li>उद्योग और फैक्टरियाँ</li>
        <li>वर्कशॉप और आटा चक्कियाँ</li>
        <li>साइबर कैफे आदि</li>
      </ul>

      <h4 class="font-medium text-gray-800 mt-4">प्रकार C – खतरनाक और संवेदनशील व्यापार</h4>
      <ul class="list-disc list-inside text-gray-700 space-y-1">
        <li>ड्राई क्लीनर और लॉन्ड्री की दुकानें</li>
        <li>ब्यूटी पार्लर</li>
        <li>शराब की भट्ठियाँ</li>
        <li>मोमबत्ती निर्माण इकाइयाँ आदि</li>
      </ul>
    </div>
  </section>

  <!-- कॉल-टू-एक्शन बटन -->
  <div class="text-center mt-16">
    <a href="#contact" class="inline-flex items-center gap-2 bg-yellow-900 text-white px-8 py-3 rounded-full text-lg font-medium hover:bg-yellow-800 transition-shadow shadow-md">
      <span class="material-icons notranslate">connect_without_contact</span>
      ग्राम कार्यालय से संपर्क करें
    </a>
  </div>
</div>
