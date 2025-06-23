<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EGovernanceController extends Controller
{
    public function propertyTax() {
    $breadcrumbTitle = "Property Tax";
    return view('pages.eGovernance.propertyTax', compact('breadcrumbTitle'));
}

public function waterSewerageCharges() {
    $breadcrumbTitle = "Water & Sewerage Charges";
    return view('pages.eGovernance.waterSewerageCharges', compact('breadcrumbTitle'));
}

public function mutations() {
    $breadcrumbTitle = "Mutations";
    return view('pages.eGovernance.mutations', compact('breadcrumbTitle'));
}

public function forIssuingLicenses() {
    $breadcrumbTitle = "For Issuing Licenses";
    return view('pages.eGovernance.forIssuingLicenses', compact('breadcrumbTitle'));
}

public function advertisementTax() {
    $breadcrumbTitle = "Advertisement Tax";
    return view('pages.eGovernance.advertisementTax', compact('breadcrumbTitle'));
}

public function birthDeathRegistration() {
    $breadcrumbTitle = "Birth and Death Registration";
    return view('pages.eGovernance.birthDeathRegistration', compact('breadcrumbTitle'));
}

public function buildingPermission() {
    $breadcrumbTitle = "Building Permission";
    return view('pages.eGovernance.buildingPermission', compact('breadcrumbTitle'));
}

public function eProcurement() {
    $breadcrumbTitle = "E-Procurement";
    return view('pages.eGovernance.eProcurement', compact('breadcrumbTitle'));
}

public function grievanceRedressal() {
    $breadcrumbTitle = "Grievance Redressal";
    return view('pages.eGovernance.grievanceRedressal', compact('breadcrumbTitle'));
}

}
