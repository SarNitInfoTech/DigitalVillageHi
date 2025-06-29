<!-- Google Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

@include('common.breadcrumb')

<!-- Section Wrapper with Brown Theme -->
<div class="gap-6 p-6">

  <!-- Public Works Department Section -->
  <section class="bg-white rounded-2xl shadow-md p-8 border-t-4 border-yellow-800">
    <div class="flex items-center mb-6">
      <span class="material-icons notranslate  text-yellow-800 text-4xl mr-4">engineering</span>
      <h2 class="text-2xl font-bold text-yellow-900"> लोक निर्माण विभाग – मुख्य गतिविधियां</h2>
    </div>
    <ul class="list-disc list-inside text-gray-700 space-y-3">
      <li><strong>सड़क निर्माण एवं संपर्क सुविधा:</strong> आसपास के क्षेत्रों से जोड़ने वाली नई गांव की सड़कों और संपर्क मार्गों का निर्माण।.</li>
      <li><strong>मरम्मत और रखरखाव:</strong> नियमित पैच मरम्मत, गड्ढों को भरना, तथा सीसी सड़क/इंटरलॉकिंग का रखरखाव।.</li>
      <li><strong>नाली निर्माण:</strong> जलभराव रोकने के लिए ढंकी और खुली ढालू नालियों का निर्माण।.</li>
      <li><strong> पुल एवं पुलिया कार्य:</strong> मौसमी जल प्रवाह को पार करने हेतु छोटे पुल और पुलियों का निर्माण।.</li>
      <li><strong>पैदल पथ का विकास:</strong>स्कूलों, बाजारों और सामुदायिक स्थलों तक ईंट और टाइलों के पैदल मार्गों का निर्माण।.</li>
      <li><strong>सार्वजनिक उपयोगिताएं:</strong>सड़क प्रकाश व्यवस्था, संकेतक बोर्डों की स्थापना, और सड़क किनारे की मजबूतीकरण।.</li>
    </ul>
  </section>

  <!-- Suggested Plan Section -->
  <section class="bg-gray-50 rounded-2xl shadow-md p-8 border-l-4 border-yellow-700 mt-10">
    <div class="flex items-center mb-6">
      <span class="material-icons notranslate  text-yellow-700 text-3xl mr-3">task_alt</span>
      <h3 class="text-xl font-semibold text-yellow-800">पकड़ी भारत खंड के लिए प्रस्तावित कार्य योजना</h3>
    </div>
    <div class="overflow-x-auto">
      <table class="min-w-full text-left text-gray-700 border border-gray-200">
        <thead class="bg-yellow-100 text-yellow-900">
          <tr>
            <th class="px-4 py-2 border">क्रम संख्या</th>
            <th class="px-4 py-2 border">गतिविधि</th>
            <th class="px-4 py-2 border"> विवरण</th>
          </tr>
        </thead>
        <tbody class="bg-white">
          <tr class="hover:bg-yellow-50">
            <td class="px-4 py-2 border">1</td>
            <td class="px-4 py-2 border">सड़क निर्माण एवं चौड़ीकरण</td>
            <td class="px-4 py-2 border">गांव को मुख्य ब्लॉक सड़कों से जोड़ना</td>
          </tr>
          <tr class="hover:bg-yellow-50">
            <td class="px-4 py-2 border">2</td>
            <td class="px-4 py-2 border">स्थानीय मरम्मत कार्य</td>
            <td class="px-4 py-2 border">पैच मरम्मत, गड्ढों को भरना, इंटरलॉकिंग, सीसी कार्य।
.</td>
          </tr>
          <tr class="hover:bg-yellow-50">
            <td class="px-4 py-2 border">3</td>
            <td class="px-4 py-2 border"> नाली सुधार कार्य</td>
            <td class="px-4 py-2 border">बारिश के पानी के प्रबंधन हेतु खुली और ढंकी नालियों का निर्माण।</td>
          </tr>
          <tr class="hover:bg-yellow-50">
            <td class="px-4 py-2 border">4</td>
            <td class="px-4 py-2 border">पुलिया एवं पुल निर्माण कार्य</td>
            <td class="px-4 py-2 border">मौसमी नालों और जल धाराओं पर सुरक्षित पार मार्गों का निर्माण।</td>
          </tr>
          <tr class="hover:bg-yellow-50">
            <td class="px-4 py-2 border">5</td>
            <td class="px-4 py-2 border">पैदल पथ का विकास</td>
            <td class="px-4 py-2 border">स्कूलों, मंदिरों और बाजारों तक पहुंच के लिए पैदल मार्गों का निर्माण।.</td>
          </tr>
          <tr class="hover:bg-yellow-50">
            <td class="px-4 py-2 border">6</td>
            <td class="px-4 py-2 border">उपयोगिता उन्नयन</td>
            <td class="px-4 py-2 border">प्रकाश व्यवस्था, संकेतक बोर्ड, और सड़क किनारों का सुदृढ़ीकरण।.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- CTA Button -->
  <div class="text-center mt-16">
    <a href="#contact" class="inline-flex items-center gap-2 bg-yellow-900 text-white px-8 py-3 rounded-full text-lg font-medium hover:bg-yellow-800 transition-shadow shadow-md">
      <span class="material-icons notranslate  notranslate">connect_without_contact</span>
      Contact Village Office
    </a>
  </div>

</div>
