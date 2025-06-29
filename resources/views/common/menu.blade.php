<nav class="menu">
  <ul id="menu-header-hi" class="nav clearfix">

    <li class="menu-item {{ request()->routeIs('home') ? 'active current-menu-item' : '' }}">
      <a href="{{ route('home') }}">मुखपृष्ठ</a>
    </li>

    <li class="menu-item menu-item-has-children {{ request()->routeIs('about*') ? 'active current-menu-item' : '' }}">
      <a href="#">हमारे बारे में</a>
      <ul class="sub-menu">
        <li class="menu-item {{ request()->routeIs('about') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('about') }}">पकड़ी भरतखंड के बारे में</a>
        </li>
        <li class="menu-item {{ request()->routeIs('about.objective') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('about.objective') }}">उद्देश्य</a>
        </li>
        <li class="menu-item {{ request()->routeIs('about.overview') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('about.overview') }}">सामान्य जानकारी</a>
        </li>
        <li class="menu-item {{ request()->routeIs('about.visionAndMission') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('about.visionAndMission') }}">दृष्टिकोण और मिशन</a>
        </li>
        <li class="menu-item {{ request()->routeIs('about.organizational') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('about.organizational') }}">संगठनात्मक संरचना</a>
        </li>
      </ul>
    </li>

    <li class="menu-item menu-item-has-children {{ request()->routeIs('departments*') ? 'active current-menu-item' : '' }}">
      <a href="#">विभाग</a>
      <ul class="sub-menu">
        <li class="{{ request()->routeIs('departments.publicWorks') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('departments.publicWorks') }}">लोक निर्माण विभाग</a>
        </li>
        <li class="{{ request()->routeIs('departments.publicHealth') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('departments.publicHealth') }}">सार्वजनिक स्वास्थ्य विभाग</a>
        </li>
        <li class="{{ request()->routeIs('departments.tax') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('departments.tax') }}">कर विभाग</a>
        </li>
        <li class="{{ request()->routeIs('departments.majorActivities') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('departments.majorActivities') }}">प्रमुख गतिविधियाँ विभाग</a>
        </li>
        <li class="{{ request()->routeIs('departments.streetLighting') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('departments.streetLighting') }}">सड़क प्रकाश</a>
        </li>
        <li class="{{ request()->routeIs('departments.townPlanning') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('departments.townPlanning') }}">नगर नियोजन</a>
        </li>
        <li class="{{ request()->routeIs('departments.urbanDevelopment') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('departments.urbanDevelopment') }}">शहरी विकास</a>
        </li>
        <li class="{{ request()->routeIs('departments.drainage') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('departments.drainage') }}">जल निकासी</a>
        </li>
        <li class="{{ request()->routeIs('departments.hydraulic') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('departments.hydraulic') }}">जल यांत्रिक विभाग</a>
        </li>
      </ul>
    </li>

    <li class="menu-item menu-item-has-children {{ request()->routeIs('services*') ? 'active current-menu-item' : '' }}">
      <a href="#">सेवाएं</a>
      <ul class="sub-menu">
        <li class="{{ request()->routeIs('services.propertyTax') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('services.propertyTax') }}">संपत्ति कर</a>
        </li>
        <li class="{{ request()->routeIs('services.waterSupply') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('services.waterSupply') }}">जल आपूर्ति</a>
        </li>
        <li class="{{ request()->routeIs('services.licenseTax') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('services.licenseTax') }}">लाइसेंस कर</a>
        </li>
        <li class="{{ request()->routeIs('services.birthDeathRegistration') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('services.birthDeathRegistration') }}">जन्म/मृत्यु पंजीकरण</a>
        </li>
        <li class="{{ request()->routeIs('services.roadConstruction') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('services.roadConstruction') }}">सड़क निर्माण</a>
        </li>
      </ul>
    </li>

    <li class="menu-item menu-item-has-children {{ request()->routeIs('finance*') ? 'active current-menu-item' : '' }}">
      <a href="#">लेखा एवं वित्त</a>
      <ul class="sub-menu">
        <li class="{{ request()->routeIs('finance.budget') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('finance.budget') }}">बजट</a>
        </li>
        <li class="{{ request()->routeIs('finance.auditBalanceSheet') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('finance.auditBalanceSheet') }}">ऑडिट बैलेंस शीट</a>
        </li>
      </ul>
    </li>

    <li class="menu-item menu-item-has-children {{ request()->routeIs('schemes*') ? 'active current-menu-item' : '' }}">
      <a href="#">योजनाएं</a>
      <ul class="sub-menu">
        <li class="{{ request()->routeIs('schemes.amrutMission') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('schemes.amrutMission') }}">अमृत मिशन</a>
        </li>
        <li class="{{ request()->routeIs('schemes.swachhBharatMission') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('schemes.swachhBharatMission') }}">स्वच्छ भारत मिशन</a>
        </li>
      </ul>
    </li>

    <li class="menu-item menu-item-has-children {{ request()->routeIs('eGovernance*') ? 'active current-menu-item' : '' }}">
      <a href="#">ई-गवर्नेंस</a>
      <ul class="sub-menu">
        <li class="{{ request()->routeIs('eGovernance.mutations') ? 'active current-menu-item' : '' }}">
          <a href="https://e-nagarsewaup.gov.in/ulbappsmain/home">नामांतरण</a>
        </li>
        <li class="{{ request()->routeIs('eGovernance.forIssuingLicenses') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('eGovernance.forIssuingLicenses') }}">लाइसेंस जारी करने हेतु</a>
        </li>
        <li class="{{ request()->routeIs('eGovernance.advertisementTax') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('eGovernance.advertisementTax') }}">विज्ञापन कर</a>
        </li>
        <li class="{{ request()->routeIs('eGovernance.birthDeathRegistration') ? 'active current-menu-item' : '' }}">
          <a href="https://dc.crsorgi.gov.in/">जन्म एवं मृत्यु पंजीकरण</a>
        </li>
        <li class="{{ request()->routeIs('eGovernance.eProcurement') ? 'active current-menu-item' : '' }}">
          <a href="https://etender.up.nic.in/nicgep/app">ई-प्रोक्योरमेंट</a>
        </li>
      </ul>
    </li>

    <li class="menu-item {{ request()->routeIs('citizen.charter') ? 'active current-menu-item' : '' }}">
      <a href="{{ route('citizen.charter') }}">नागरिक चार्टर</a>
    </li>

    <li class="menu-item menu-item-has-children {{ request()->routeIs('informationBoard*') ? 'active current-menu-item' : '' }}">
      <a href="#">सूचना पट्ट</a>
      <ul class="sub-menu">
        <li class="{{ request()->routeIs('informationBoard.tenderList') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('informationBoard.tenderList') }}">निविदा सूची</a>
        </li>
        <li class="{{ request()->routeIs('informationBoard.announcements') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('informationBoard.announcements') }}">घोषणाएं</a>
        </li>
        <li class="{{ request()->routeIs('informationBoard.eNewsletter') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('informationBoard.eNewsletter') }}">ई-न्यूज़लेटर</a>
        </li>
        <li class="{{ request()->routeIs('informationBoard.newsEvents') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('informationBoard.newsEvents') }}">समाचार एवं आयोजन</a>
        </li>
        <li class="{{ request()->routeIs('informationBoard.downloadForms') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('informationBoard.downloadForms') }}">फॉर्म डाउनलोड करें</a>
        </li>
      </ul>
    </li>

    <li class="menu-item {{ request()->routeIs('contact.us') ? 'active current-menu-item' : '' }}">
      <a href="{{ route('contact.us') }}">संपर्क करें</a>
    </li>

  </ul>
</nav>
