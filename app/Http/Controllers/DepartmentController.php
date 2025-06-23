<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function publicWorks() {
    $breadcrumbTitle = "Public Works Department";
    return view('pages.departments.publicWorks', compact('breadcrumbTitle'));
}

public function publicHealth() {
    $breadcrumbTitle = "Public Health Department";
    return view('pages.departments.publicHealth', compact('breadcrumbTitle'));
}

public function tax() {
    $breadcrumbTitle = "Tax Department";
    return view('pages.departments.tax', compact('breadcrumbTitle'));
}

public function majorActivities() {
    $breadcrumbTitle = "Major Activities Department";
    return view('pages.departments.majorActivities', compact('breadcrumbTitle'));
}

public function streetLighting() {
    $breadcrumbTitle = "Street Lighting";
    return view('pages.departments.streetLighting', compact('breadcrumbTitle'));
}

public function townPlanning() {
    $breadcrumbTitle = "Town Planning";
    return view('pages.departments.townPlanning', compact('breadcrumbTitle'));
}

public function urbanDevelopment() {
    $breadcrumbTitle = "Urban Development";
    return view('pages.departments.urbanDevelopment', compact('breadcrumbTitle'));
}

public function drainage() {
    $breadcrumbTitle = "Drainage Department";
    return view('pages.departments.drainage', compact('breadcrumbTitle'));
}

public function hydraulic() {
    $breadcrumbTitle = "Hydraulic Department";
    return view('pages.departments.hydraulic', compact('breadcrumbTitle'));
}

}
