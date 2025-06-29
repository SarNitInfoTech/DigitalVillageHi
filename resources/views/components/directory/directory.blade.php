@extends('layouts.layout')
@section('bodyContent')
@include('common.banner')

<div class="wrapper bodyWrapper">
  <div class="container">
    <div class="row breadcrumb-outer">
      <div class="left-content push-left">
        <div id="breadcam" role="navigation" aria-label="breadcrumb">
          <ul class="breadcrumbs">
            <li>
              <a href="https://siddharthnagar.nic.in/" class="home"><span>होम</span></a>
            </li>
            <li class="current">निर्देशिका</li>
          </ul>
        </div>
      </div>
      <div class="right-content push-right">
        <div class="printShare">
          <ul>
            <li>
              <a href="#" id="print" title="पृष्ठ सामग्री प्रिंट करें" aria-label="पृष्ठ सामग्री प्रिंट करें">
                <span class="icon-printer"></span>
                <span class="off-css">प्रिंट करें</span>
              </a>
            </li>
            <li>
              <span class="share-text">
                <em class="icon-share"></em>
                <span class="off-css">साझा करें</span>
              </span>
            </li>
            <li>
              <a href="https://www.facebook.com/sharer/sharer.php?u=https://siddharthnagar.nic.in/directory/&amp;t=Directory"
                onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                target="_blank" title="फेसबुक पर साझा करें" aria-label="फेसबुक पर साझा करें (नई विंडो में खुलेगा)" rel="noopener noreferrer">
                <span class="icon-facebook"></span>
                <span class="off-css">फेसबुक</span>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/share?url=https://siddharthnagar.nic.in/directory/&amp;via=TWITTER_HANDLE&amp;text=Directory"
                onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                target="_blank" title="ट्विटर पर साझा करें" aria-label="ट्विटर पर साझा करें (नई विंडो में खुलेगा)" rel="noopener noreferrer">
                <span class="icon-twitter"></span>
                <span class="off-css">ट्विटर</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div id="SkipContent" tabindex="-1"></div>

    <div class="row" id="row-content">
      <div class="col-12">
        <h1>निर्देशिका</h1>
        <div id="post-2775" class="post-2775 page type-page status-publish hentry">
          <p>
            यह विकल्प जिला स्तर के अधिकारियों, हेल्पलाइन नंबरों और सार्वजनिक उपयोगिताओं जैसे (बैंक, कॉलेज/विश्वविद्यालय आदि) की टेलीफोन निर्देशिका प्रदान करता है।
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
