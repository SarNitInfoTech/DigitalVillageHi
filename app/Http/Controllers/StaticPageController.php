<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function citizenCharter() {
        $breadcrumbTitle = "Citizen Charter";
        return view('pages.static.citizenCharter', compact('breadcrumbTitle'));
    }

    public function contactUs() {
        $breadcrumbTitle = "Contact Us";
        return view('pages.static.contactUs', compact('breadcrumbTitle'));
    }
}
