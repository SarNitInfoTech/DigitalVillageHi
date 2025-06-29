<!-- Google Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

@include('common.breadcrumb')

<!-- ब्राउन थीम के साथ सेक्शन रैपर -->
<div class="gap-6 p-6">

  <!-- जन्म/मृत्यु पंजीकरण अनुभाग -->
  <section class="bg-white rounded-2xl shadow-md p-8 border-t-4 border-yellow-700 mt-6">
    <div class="flex items-center mb-6">
      <span class="material-icons notranslate text-yellow-700 text-4xl mr-4">assignment_ind</span>
      <h2 class="text-2xl font-bold text-yellow-900">जन्म और मृत्यु पंजीकरण – कानूनी पहचान सेवाएं</h2>
    </div>

    <!-- अवलोकन -->
    <div class="mb-6">
      <p class="text-gray-700">
        जन्म पंजीकरण एक बच्चे की कानूनी पहचान की शुरुआत करता है, जबकि मृत्यु पंजीकरण कानूनी और वित्तीय जिम्मेदारियों के समापन को सुनिश्चित करता है। जन्म प्रमाणपत्र व्यक्ति के अस्तित्व और नागरिकता को प्रमाणित करता है, जबकि मृत्यु प्रमाणपत्र संपत्ति, पेंशन और कानूनी मामलों के निपटारे में आवश्यक होता है।
      </p>
    </div>

    <!-- जन्म पंजीकरण का महत्व -->
    <div class="mb-6">
      <h3 class="text-xl font-semibold text-gray-800 mb-2">जन्म पंजीकरण का महत्व</h3>
      <ul class="list-disc list-inside text-gray-700 space-y-2">
        <li>नागरिक स्थिति, आयु, पारिवारिक निर्भरता और पहचान स्थापित करता है।</li>
        <li>शिक्षा, स्वास्थ्य सेवाएं, टीकाकरण और कल्याण योजनाओं का लाभ पाने के लिए प्रमाण के रूप में कार्य करता है।</li>
        <li>RBD अधिनियम (जन्म और मृत्यु पंजीकरण अधिनियम) के तहत जन्म प्रमाणपत्र के लिए अनिवार्य।</li>
        <li>जन्म के 21 दिनों के भीतर नगर पंचायत कार्यालय में पंजीकरण कराना आवश्यक है।</li>
      </ul>
    </div>

    <!-- मृत्यु पंजीकरण का महत्व -->
    <div class="mb-6">
      <h3 class="text-xl font-semibold text-gray-800 mb-2">मृत्यु पंजीकरण का महत्व</h3>
      <ul class="list-disc list-inside text-gray-700 space-y-2">
        <li>विरासत और पेंशन दावों के निपटारे के लिए कानूनी रूप से आवश्यक।</li>
        <li>बीमा कंपनियों और कल्याणकारी योजनाओं से लाभ प्राप्त करने हेतु आवश्यक।</li>
        <li>दुर्घटना या आपराधिक मामलों में मृतक की कानूनी पहचान के रूप में कार्य करता है।</li>
      </ul>
    </div>

    <!-- प्रमाणपत्र जारी करना और शुल्क -->
    <div>
      <h3 class="text-xl font-semibold text-gray-800 mb-2">प्रमाणपत्र जारी करना</h3>
      <p class="text-gray-700">
        RBD अधिनियम के अनुसार, नामित रजिस्ट्रार (जैसे नगर स्वास्थ्य अधिकारी या आयुक्त) जन्म और मृत्यु प्रमाणपत्र जारी करने के लिए अधिकृत होते हैं। नागरिकों को अपने संबंधित नगर पंचायत कार्यालय में आवेदन करना होता है। अधिनियम के अनुसार यह सेवा निशुल्क हो सकती है, हालांकि स्थानीय निकाय ₹10–₹20 का नाममात्र शुल्क ले सकते हैं।
      </p>
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
