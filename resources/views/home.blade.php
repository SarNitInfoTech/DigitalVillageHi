@extends('layouts.layout')
@section('bodyContent')

<div class="wrapper bodyWrapper no_padding">
  <div class="container home-1">
    <div id="SkipContent"></div>
    <div class="row">
      <div class="col-12">
        <div id="post-2609" class="post-2609 page type-page status-publish hentry">

          @include('components.home.slider')
          @include('components.home.aboutVillage')
          @include('components.home.gallery')
          @include('components.home.news')
          @include('components.home.servicesUtilities')
          <script src="https://mib.gov.in/sites/all/themes/mib/js/mib-banner.js"></script>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
