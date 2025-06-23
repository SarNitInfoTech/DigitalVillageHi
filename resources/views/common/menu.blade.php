<nav class="menu">
  <ul id="menu-header-en" class="nav clearfix">

    <li class="menu-item {{ request()->routeIs('home') ? 'active current-menu-item' : '' }}">
      <a href="{{ route('home') }}">HOME</a>
    </li>

    <li class="menu-item menu-item-has-children {{ request()->routeIs('about*') ? 'active current-menu-item' : '' }}">
      <a href="#">About Us</a>
      <ul class="sub-menu">
        <li class="menu-item {{ request()->routeIs('about') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('about') }}">About Pakadi Bharat Khand</a>
        </li>
        <li class="menu-item {{ request()->routeIs('about.objective') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('about.objective') }}">Objectives</a>
        </li>
        <li class="menu-item {{ request()->routeIs('about.overview') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('about.overview') }}">Overview</a>
        </li>
        <li class="menu-item {{ request()->routeIs('about.visionAndMission') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('about.visionAndMission') }}">Vision and Mission</a>
        </li>
        <li class="menu-item {{ request()->routeIs('about.organizational') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('about.organizational') }}">Organizational Structure</a>
        </li>
      </ul>
    </li>

    <li class="menu-item menu-item-has-children {{ request()->routeIs('departments*') ? 'active current-menu-item' : '' }}">
      <a href="#">Departments</a>
      <ul class="sub-menu">
        <li class="{{ request()->routeIs('departments.publicWorks') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('departments.publicWorks') }}">Public Works Department</a>
        </li>
        <li class="{{ request()->routeIs('departments.publicHealth') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('departments.publicHealth') }}">Public Health Department</a>
        </li>
        <li class="{{ request()->routeIs('departments.tax') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('departments.tax') }}">Tax Department</a>
        </li>
        <li class="{{ request()->routeIs('departments.majorActivities') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('departments.majorActivities') }}">Major Activities Department</a>
        </li>
        <li class="{{ request()->routeIs('departments.streetLighting') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('departments.streetLighting') }}">Street Lighting</a>
        </li>
        <li class="{{ request()->routeIs('departments.townPlanning') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('departments.townPlanning') }}">Town Planning</a>
        </li>
        <li class="{{ request()->routeIs('departments.urbanDevelopment') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('departments.urbanDevelopment') }}">Urban Development</a>
        </li>
        <li class="{{ request()->routeIs('departments.drainage') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('departments.drainage') }}">Drainage</a>
        </li>
        <li class="{{ request()->routeIs('departments.hydraulic') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('departments.hydraulic') }}">Hydraulic Department</a>
        </li>
      </ul>
    </li>

    <li class="menu-item menu-item-has-children {{ request()->routeIs('services*') ? 'active current-menu-item' : '' }}">
      <a href="#">Services</a>
      <ul class="sub-menu">
        <li class="{{ request()->routeIs('services.propertyTax') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('services.propertyTax') }}">Property Tax</a>
        </li>
        <li class="{{ request()->routeIs('services.waterSupply') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('services.waterSupply') }}">Water Supply</a>
        </li>
        <li class="{{ request()->routeIs('services.licenseTax') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('services.licenseTax') }}">License Tax</a>
        </li>
        <li class="{{ request()->routeIs('services.birthDeathRegistration') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('services.birthDeathRegistration') }}">Birth/Death Registration</a>
        </li>
        <li class="{{ request()->routeIs('services.roadConstruction') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('services.roadConstruction') }}">Road Construction</a>
        </li>
      </ul>
    </li>

    <li class="menu-item menu-item-has-children {{ request()->routeIs('finance*') ? 'active current-menu-item' : '' }}">
      <a href="#">Accounts & Finance</a>
      <ul class="sub-menu">
        <li class="{{ request()->routeIs('finance.budget') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('finance.budget') }}">Budget</a>
        </li>
        <li class="{{ request()->routeIs('finance.auditBalanceSheet') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('finance.auditBalanceSheet') }}">Audit Balance Sheet</a>
        </li>
      </ul>
    </li>

    <li class="menu-item menu-item-has-children {{ request()->routeIs('schemes*') ? 'active current-menu-item' : '' }}">
      <a href="#">Schemes</a>
      <ul class="sub-menu">
        <li class="{{ request()->routeIs('schemes.amrutMission') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('schemes.amrutMission') }}">AMRUT Mission</a>
        </li>
        <li class="{{ request()->routeIs('schemes.swachhBharatMission') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('schemes.swachhBharatMission') }}">Swachh Bharat Mission</a>
        </li>
      </ul>
    </li>

    <li class="menu-item menu-item-has-children {{ request()->routeIs('eGovernance*') ? 'active current-menu-item' : '' }}">
      <a href="#">E-Governance</a>
      <ul class="sub-menu">
        <li class="{{ request()->routeIs('eGovernance.propertyTax') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('eGovernance.propertyTax') }}">Property Tax</a>
        </li>
        <li class="{{ request()->routeIs('eGovernance.waterSewerageCharges') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('eGovernance.waterSewerageCharges') }}">Water & Sewerage Charges</a>
        </li>
        <li class="{{ request()->routeIs('eGovernance.mutations') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('eGovernance.mutations') }}">Mutations</a>
        </li>
        <li class="{{ request()->routeIs('eGovernance.forIssuingLicenses') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('eGovernance.forIssuingLicenses') }}">For Issuing Licenses</a>
        </li>
        <li class="{{ request()->routeIs('eGovernance.advertisementTax') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('eGovernance.advertisementTax') }}">Advertisement Tax</a>
        </li>
        <li class="{{ request()->routeIs('eGovernance.birthDeathRegistration') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('eGovernance.birthDeathRegistration') }}">Birth and Death Registration</a>
        </li>
        <li class="{{ request()->routeIs('eGovernance.buildingPermission') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('eGovernance.buildingPermission') }}">Building Permission</a>
        </li>
        <li class="{{ request()->routeIs('eGovernance.eProcurement') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('eGovernance.eProcurement') }}">E-Procurement</a>
        </li>
        <li class="{{ request()->routeIs('eGovernance.grievanceRedressal') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('eGovernance.grievanceRedressal') }}">Grievance Redressal</a>
        </li>
      </ul>
    </li>

    <li class="menu-item {{ request()->routeIs('citizen.charter') ? 'active current-menu-item' : '' }}">
      <a href="{{ route('citizen.charter') }}">Citizen Charter</a>
    </li>

    <li class="menu-item menu-item-has-children {{ request()->routeIs('informationBoard*') ? 'active current-menu-item' : '' }}">
      <a href="#">Information Board</a>
      <ul class="sub-menu">
        <li class="{{ request()->routeIs('informationBoard.tenderList') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('informationBoard.tenderList') }}">Tender List</a>
        </li>
        <li class="{{ request()->routeIs('informationBoard.announcements') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('informationBoard.announcements') }}">Announcements</a>
        </li>
        <li class="{{ request()->routeIs('informationBoard.eNewsletter') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('informationBoard.eNewsletter') }}">E-Newsletter</a>
        </li>
        <li class="{{ request()->routeIs('informationBoard.newsEvents') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('informationBoard.newsEvents') }}">News & Events</a>
        </li>
        <li class="{{ request()->routeIs('informationBoard.downloadForms') ? 'active current-menu-item' : '' }}">
          <a href="{{ route('informationBoard.downloadForms') }}">Download Forms</a>
        </li>
      </ul>
    </li>

    <li class="menu-item {{ request()->routeIs('contact.us') ? 'active current-menu-item' : '' }}">
      <a href="{{ route('contact.us') }}">Contact Us</a>
    </li>

  </ul>
</nav>
