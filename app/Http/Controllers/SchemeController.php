<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchemeController extends Controller
{
    public function amrutMission() {
        $breadcrumbTitle = "अमृत मिशन";
        return view('pages.schemes.amrutMission', compact('breadcrumbTitle'));
    }

    public function swachhBharatMission() {
        $breadcrumbTitle = "स्वच्छ भारत मिशन";
        return view('pages.schemes.swachhBharatMission', compact('breadcrumbTitle'));
    }
}
