<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchemeController extends Controller
{
    public function amrutMission() {
    $breadcrumbTitle = "AMRUT Mission";
    return view('pages.schemes.amrutMission', compact('breadcrumbTitle'));
}

public function swachhBharatMission() {
    $breadcrumbTitle = "Swachh Bharat Mission";
    return view('pages.schemes.swachhBharatMission', compact('breadcrumbTitle'));
}

}
