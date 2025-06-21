@extends('layouts.layout')
@section('bodyContent')
@include('partials.banner')

<div class="wrapper bodyWrapper">
    <div class="container">
        <div class="row breadcrumb-outer">
            <div class="left-content push-left">
                <div id="breadcam" role="navigation" aria-label="breadcrumb">
                    <ul class="breadcrumbs">
                        <li><a href="https://siddharthnagar.nic.in/" class="home"><span>Home</span></a></li>
                        <li><a href="https://siddharthnagar.nic.in/about-district/">About District</a></li>
                        <li class="current">Map of District</li>
                    </ul>
                </div>
            </div>
            <div class="right-content push-right">
                <div class="printShare">
                    <ul>
                        <li><a href="#" id="print" title="Print Page Content" aria-label="Print Page Content"><span class="icon-printer"></span> <span class="off-css">Print</span></a></li>
                        <li><span class="share-text"><em class="icon-share"></em><span class="off-css">Share</span></span></li>
                        <li>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" title="Share on Facebook" rel="noopener noreferrer">
                                <span class="icon-facebook"></span><span class="off-css">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/share?url={{ url()->current() }}&text=Map+of+Siddharthnagar" target="_blank" title="Share on Twitter" rel="noopener noreferrer">
                                <span class="icon-twitter"></span><span class="off-css">Twitter</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="SkipContent" tabindex="-1"></div>
        <div class="row" id="row-content">
            <div class="col-12">
                <h1>Map of District</h1>
                <div class="map-container" style="position: relative; overflow: hidden; padding-top: 0%;">
                   <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28449.67999724003!2d83.06183640685236!3d27.288671594951705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39941e3c7b75aedd%3A0x947ba3ab48a987e0!2sSiddharthnagar%2C%20Uttar%20Pradesh%20272020!5e0!3m2!1sen!2sin!4v1718792935011!5m2!1sen!2sin" 
    width="50%" 
    height="100" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade" 
    title="Map of District">
</iframe>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
