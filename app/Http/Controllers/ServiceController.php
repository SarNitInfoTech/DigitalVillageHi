<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function propertyTax() {
    $breadcrumbTitle = "Property Tax";
    return view('pages.services.propertyTax', compact('breadcrumbTitle'));
}

public function waterSupply() {
    $breadcrumbTitle = "Water Supply";
    return view('pages.services.waterSupply', compact('breadcrumbTitle'));
}

public function licenseTax() {
    $breadcrumbTitle = "License Tax";
    return view('pages.services.licenseTax', compact('breadcrumbTitle'));
}

public function birthDeathRegistration() {
    $breadcrumbTitle = "Birth/Death Registration";
    return view('pages.services.birthDeathRegistration', compact('breadcrumbTitle'));
}

public function roadConstruction() {
    $breadcrumbTitle = "Road Construction";
    return view('pages.services.roadConstruction', compact('breadcrumbTitle'));
}

}
