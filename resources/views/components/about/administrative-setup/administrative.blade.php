@extends('layouts.layout')
@section('bodyContent')
@include('common.banner')


<div class="wrapper bodyWrapper ">
    <div class="container ">
        <div class="row breadcrumb-outer">
        <div class="left-content push-left">
            <div id="breadcam" role="navigation" aria-label="breadcrumb">
                <ul class="breadcrumbs"><li><a href="" class="home"><span>Home</span></a></li><li><a href="about-district/">About District</a></li> <li class="current">Administrative Setup</li></ul>            </div>
        </div>
        <div class="right-content push-right">
            <div class="printShare">
                <ul class="">
                    <li><a href="#" id="print" title="Print Page Content" aria-label="Print Page Content"><span class="icon-printer"></span> <span class="off-css">Print</span></a></li>
                    <li>
                                                <span class="share-text"><em class="icon-share"></em><span class="off-css">Share</span></span>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=administrative-setup/&amp;t=Administrative+Setup" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook" aria-label="Facebook that opens in a new window" rel="noopener noreferrer"><span class="icon-facebook"></span><span class="off-css">Facebook</span></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/share?url=administrative-setup/&amp;via=TWITTER_HANDLE&amp;text=Administrative+Setup" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter" aria-label="Twitter that opens in a new window" rel="noopener noreferrer"><span class="icon-twitter"></span><span class="off-css">Twitter</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="SkipContent" tabindex="-1"></div>
    <div class="row" id="row-content">
      <div class="col-12">
                  
            <h1>Administrative Setup</h1><div id="post-21869" class="post-21869 page type-page status-publish hentry">
		<p>Please see the submenu for the administrative setup.</p>

</div>
                    <!-- end of the loop -->
          
              </div>
          </div>
  </div>
</div>

@endsection