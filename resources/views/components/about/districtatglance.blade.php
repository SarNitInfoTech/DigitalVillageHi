@extends('layouts.layout')
@section('bodyContent')
@include('partials.banner')


<div class="wrapper bodyWrapper ">
    <div class="container ">
        <div class="row breadcrumb-outer">
        <div class="left-content push-left">
            <div id="breadcam" role="navigation" aria-label="breadcrumb">
                <ul class="breadcrumbs"><li><a href="https://siddharthnagar.nic.in/" class="home"><span>Home</span></a></li><li><a href="https://siddharthnagar.nic.in/about-district/">About District</a></li>  <li class="current">District at a Glance</li></ul>            </div>
        </div>
        <div class="right-content push-right">
            <div class="printShare">
                <ul class="">
                    <li><a href="#" id="print" title="Print Page Content" aria-label="Print Page Content"><span class="icon-printer"></span> <span class="off-css">Print</span></a></li>
                    <li>
                                                <span class="share-text"><em class="icon-share"></em><span class="off-css">Share</span></span>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://siddharthnagar.nic.in/about-district/district-at-a-glance/&amp;t=District+at+a+Glance" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook" aria-label="Facebook that opens in a new window" rel="noopener noreferrer"><span class="icon-facebook"></span><span class="off-css">Facebook</span></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/share?url=https://siddharthnagar.nic.in/about-district/district-at-a-glance/&amp;via=TWITTER_HANDLE&amp;text=District+at+a+Glance" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter" aria-label="Twitter that opens in a new window" rel="noopener noreferrer"><span class="icon-twitter"></span><span class="off-css">Twitter</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="SkipContent" tabindex="-1"></div>
    <div class="row" id="row-content">
      <div class="col-12">
                  
            <h1>District at a Glance</h1><div id="post-22436" class="post-22436 page type-page status-publish hentry">
		<p>This Page provides statistical information about the district from Census 2011 Survey.</p>
<p><a href="https://cdn.s3waas.gov.in/s385d8ce590ad8981ca2c8286f79f59954/uploads/2018/02/2018022049.pdf" target="_blank" rel="noopener noreferrer">District at a Glance (PDF 44 KB) <span class="icon-pdf pdf-icon"></span> </a></p>

</div>
                    <!-- end of the loop -->
          
              </div>
          </div>
  </div>
</div>

@endsection