<!-- Google Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

@include('common.breadcrumb')

<!-- ब्राउन थीम के साथ सेक्शन रैपर -->
<div class="gap-6 p-6">

  <!-- नगर विकास विभाग अनुभाग -->
  <section class="bg-white rounded-2xl shadow-md p-8 border-t-4 border-yellow-800 mt-6">
    <div class="flex items-center mb-6">
      <span class="material-icons notranslate text-yellow-800 text-4xl mr-4">apartment</span>
      <h2 class="text-2xl font-bold text-yellow-900">नगर विकास विभाग – कार्य</h2>
    </div>

    <!-- परिचय -->
    <div class="mb-6">
      <h3 class="text-xl font-semibold text-gray-800 mb-2">परिचय</h3>
      <p class="text-gray-700">
        नगर विकास विभाग, पकरडी भारत खंड (महराजगंज) में नगर स्तर के बुनियादी ढांचे और निर्माण की निगरानी, नियमन और संरचित विकास के लिए जिम्मेदार है।
      </p>
    </div>

    <!-- केंद्रीकृत कार्य -->
    <div class="mb-6">
      <h3 class="text-xl font-semibold text-gray-800 mb-2">केंद्रीकृत कार्य</h3>
      <ul class="list-disc list-inside text-gray-700 space-y-2">
        <li>ऊँची इमारतों और वाणिज्यिक लेआउट के विकास की अनुमति देना</li>
        <li>ऊँची इमारतों और वाणिज्यिक भवनों की निगरानी</li>
        <li>निजी संपत्तियों पर होर्डिंग्स की अनुमति देना</li>
        <li>विकास नियंत्रण विनियम (DCR) के अनुसार वास्तुविदों, अभियंताओं और संरचनात्मक डिजाइनरों का पंजीकरण</li>
        <li>विभाग से संबंधित नीतियों का निर्माण</li>
      </ul>
    </div>

    <!-- विकेंद्रीकृत कार्य -->
    <div>
      <h3 class="text-xl font-semibold text-gray-800 mb-2">विकेंद्रीकृत कार्य</h3>
      <ul class="list-disc list-inside text-gray-700 space-y-2">
        <li>कम ऊँचाई वाले गैर-वाणिज्यिक भवनों के विकास की अनुमति देना</li>
        <li>ऊँची या वाणिज्यिक इमारतों के अलावा सभी विकास गतिविधियों की निगरानी</li>
        <li>मेलों, प्रदर्शनों आदि में अस्थायी ढांचों की स्वीकृति</li>
        <li>दूरसंचार टावरों से संबंधित अनुमतियाँ</li>
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
