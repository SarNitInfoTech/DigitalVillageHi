<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function citizenCharter() {
        $breadcrumbTitle = "नागरिक चार्टर";
        return view('pages.static.citizenCharter', compact('breadcrumbTitle'));
    }

    public function contactUs() {
        $breadcrumbTitle = "संपर्क करें";
        return view('pages.static.contactUs', compact('breadcrumbTitle'));
    }
}
