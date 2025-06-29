<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function propertyTax() {
        $breadcrumbTitle = "संपत्ति कर";
        return view('pages.services.propertyTax', compact('breadcrumbTitle'));
    }

    public function waterSupply() {
        $breadcrumbTitle = "जल आपूर्ति";
        return view('pages.services.waterSupply', compact('breadcrumbTitle'));
    }

    public function licenseTax() {
        $breadcrumbTitle = "लाइसेंस कर";
        return view('pages.services.licenseTax', compact('breadcrumbTitle'));
    }

    public function birthDeathRegistration() {
        $breadcrumbTitle = "जन्म/मृत्यु पंजीकरण";
        return view('pages.services.birthDeathRegistration', compact('breadcrumbTitle'));
    }

    public function roadConstruction() {
        $breadcrumbTitle = "सड़क निर्माण";
        return view('pages.services.roadConstruction', compact('breadcrumbTitle'));
    }
}
