<!-- Google Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

@include('common.breadcrumb')

<!-- ब्राउन थीम के साथ सेक्शन रैपर -->
<div class="gap-6 p-6">

  <!-- ऑडिट रिपोर्ट अनुभाग -->
  <section class="bg-white rounded-2xl shadow-md p-8 border-t-4 border-yellow-800 mt-6">
    <div class="flex items-center mb-6">
      <span class="material-icons notranslate text-yellow-800 text-4xl mr-4">fact_check</span>
      <h2 class="text-2xl font-bold text-yellow-900">लेखा परीक्षण रिपोर्ट – पकरडी भारत खंड</h2>
    </div>

    <!-- अवलोकन -->
    <div class="mb-4">
      <h3 class="text-xl font-semibold text-gray-800 mb-2">लेखा परीक्षण सारांश (वित्तीय वर्ष 2023–24)</h3>
      <ul class="list-disc list-inside text-gray-700 space-y-2">
        <li><strong>कुल ऑडिट बजट:</strong> ₹18,50,000</li>
        <li><strong>उपयोग की गई राशि:</strong> ₹17,90,000</li>
        <li><strong>अप्रयुक्त धनराशि:</strong> ₹60,000</li>
        <li><strong>उपयोग दक्षता:</strong> 96.76%</li>
      </ul>
    </div>

    <!-- प्रमुख अवलोकन -->
    <div class="mb-4">
      <h3 class="text-xl font-semibold text-gray-800 mb-2">प्रमुख अवलोकन</h3>
      <ul class="list-disc list-inside text-gray-700 space-y-2">
        <li>सभी व्यय अनुमोदित विकास कार्यों के अनुरूप पाए गए।</li>
        <li>ड्रेनेज परियोजना फेज-II के बिलिंग में मामूली विलंब दर्ज किया गया।</li>
        <li>सभी खरीद की प्रक्रियाओं के लिए उचित दस्तावेजीकरण किया गया।</li>
        <li>कोई अनियमितता या धन की गड़बड़ी नहीं पाई गई।</li>
      </ul>
    </div>

    <!-- सिफारिशें -->
    <div>
      <h3 class="text-xl font-semibold text-gray-800 mb-2">सिफारिशें</h3>
      <ul class="list-disc list-inside text-gray-700 space-y-2">
        <li>प्रत्येक विभाग से मासिक प्रगति रिपोर्ट प्राप्त की जाए।</li>
        <li>दस्तावेजों का डिजिटलीकरण किया जाए ताकि ऑडिट ट्रैकिंग आसान हो।</li>
        <li>जल टैंकर तैनाती की आवृत्ति की समीक्षा की जाए ताकि अधिक कुशल व्यवस्था बनाई जा सके।</li>
      </ul>
    </div>
  </section>

  <!-- CTA बटन -->
  <div class="text-center mt-16">
    <a href="#contact" class="inline-flex items-center gap-2 bg-yellow-900 text-white px-8 py-3 rounded-full text-lg font-medium hover:bg-yellow-800 transition-shadow shadow-md">
      <span class="material-icons notranslate">connect_without_contact</span>
      ग्राम कार्यालय से संपर्क करें
    </a>
  </div>
</div>
