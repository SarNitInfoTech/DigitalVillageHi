<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    public function index(){
         $breadcrumbTitle="About Pakadi Bharat Khand";
        return view('pages.about.aboutVillage', compact('breadcrumbTitle'));
    }
    // Root About pages
    public function about() {
        $breadcrumbTitle="About Pakadi Bharat Khand";

        return view('pages.about.aboutVillage', compact('breadcrumbTitle'));
    }

    public function objective() {
        $breadcrumbTitle="Objectives & Public Services – Pakadi Bharat Khand";
        return view('pages.about.villageObjective.villageObjective' ,compact('breadcrumbTitle'));
    }
    
    public function overview() {
        $breadcrumbTitle="Overview – Pakadi Bharat Khand";
        return view('pages.about.villageOverview.overview' ,compact('breadcrumbTitle'));
    }

     public function visionAndMission() {
        $breadcrumbTitle="Vision and Mission";
        return view('pages.about.visionAndMission.visionAndMission' ,compact('breadcrumbTitle'));
    }
    
     public function organizational() {
        $breadcrumbTitle="Organizational Structure";
        return view('pages.about.organizational.organizational' ,compact('breadcrumbTitle'));
    }
    public function whoiswho() {
        return view('components.about.whoiswho');
    }

    public function mapOfDistrict() {
        return view('components.about.mapofdistrict');
    }

    public function districtAtGlance() {
        return view('components.about.districtatglance');
    }

    // Administrative Setup pages
    public function administrative() {
        return view('components.about.administrative-setup.administrative');
    }

    public function development() {
        return view('components.about.administrative-setup.development');
    }

    public function education() {
        return view('components.about.administrative-setup.education');
    }

    public function police() {
        return view('components.about.administrative-setup.police');
    }

    public function policeStation() {
        return view('components.about.administrative-setup.police-station');
    }

    public function tahsil() {
        return view('components.about.administrative-setup.tahsil');
    }

    public function block() {
        return view('components.about.administrative-setup.block');
    }

    // Directory
    public function directory() {
        return view('components.about.directory.directory');
    }
}

