<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EGovernanceController extends Controller
{
    public function propertyTax() {
        $breadcrumbTitle = "संपत्ति कर";
        return view('pages.eGovernance.propertyTax', compact('breadcrumbTitle'));
    }

    public function waterSewerageCharges() {
        $breadcrumbTitle = "पानी एवं सीवरेज शुल्क";
        return view('pages.eGovernance.waterSewerageCharges', compact('breadcrumbTitle'));
    }

    public function mutations() {
        $breadcrumbTitle = "नामांतरण (म्युटेशन)";
        return view('pages.eGovernance.mutations', compact('breadcrumbTitle'));
    }

    public function forIssuingLicenses() {
        $breadcrumbTitle = "लाइसेंस जारी करने हेतु";
        return view('pages.eGovernance.forIssuingLicenses', compact('breadcrumbTitle'));
    }

    public function advertisementTax() {
        $breadcrumbTitle = "विज्ञापन कर";
        return view('pages.eGovernance.advertisementTax', compact('breadcrumbTitle'));
    }

    public function birthDeathRegistration() {
        $breadcrumbTitle = "जन्म और मृत्यु पंजीकरण";
        return view('pages.eGovernance.birthDeathRegistration', compact('breadcrumbTitle'));
    }

    public function buildingPermission() {
        $breadcrumbTitle = "भवन निर्माण अनुमति";
        return view('pages.eGovernance.buildingPermission', compact('breadcrumbTitle'));
    }

    public function eProcurement() {
        $breadcrumbTitle = "ई-क्रय प्रणाली (ई-प्रोक्योरमेंट)";
        return view('pages.eGovernance.eProcurement', compact('breadcrumbTitle'));
    }

    public function grievanceRedressal() {
        $breadcrumbTitle = "शिकायत निवारण";
        return view('pages.eGovernance.grievanceRedressal', compact('breadcrumbTitle'));
    }
}
