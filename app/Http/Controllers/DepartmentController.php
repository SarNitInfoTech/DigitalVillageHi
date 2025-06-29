<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function publicWorks() {
        $breadcrumbTitle = "लोक निर्माण विभाग";
        return view('pages.departments.publicWorks', compact('breadcrumbTitle'));
    }

    public function publicHealth() {
        $breadcrumbTitle = "सार्वजनिक स्वास्थ्य विभाग";
        return view('pages.departments.publicHealth', compact('breadcrumbTitle'));
    }

    public function tax() {
        $breadcrumbTitle = "कर विभाग";
        return view('pages.departments.tax', compact('breadcrumbTitle'));
    }

    public function majorActivities() {
        $breadcrumbTitle = "मुख्य गतिविधियाँ विभाग";
        return view('pages.departments.majorActivities', compact('breadcrumbTitle'));
    }

    public function streetLighting() {
        $breadcrumbTitle = "स्ट्रीट लाइटिंग";
        return view('pages.departments.streetLighting', compact('breadcrumbTitle'));
    }

    public function townPlanning() {
        $breadcrumbTitle = "नगर नियोजन विभाग";
        return view('pages.departments.townPlanning', compact('breadcrumbTitle'));
    }

    public function urbanDevelopment() {
        $breadcrumbTitle = "शहरी विकास विभाग";
        return view('pages.departments.urbanDevelopment', compact('breadcrumbTitle'));
    }

    public function drainage() {
        $breadcrumbTitle = "जल निकासी विभाग";
        return view('pages.departments.drainage', compact('breadcrumbTitle'));
    }

    public function hydraulic() {
        $breadcrumbTitle = "जल विभाग (हाइड्रॉलिक)";
        return view('pages.departments.hydraulic', compact('breadcrumbTitle'));
    }
}
