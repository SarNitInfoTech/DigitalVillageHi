<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $breadcrumbTitle = "पकड़ी भरत खंड के बारे में";
        return view('pages.about.about.aboutVillage', compact('breadcrumbTitle'));
    }

    // Root About pages
    public function about() {
        $breadcrumbTitle = "पकड़ी भरत खंड के बारे में";
        return view('pages.about.about.aboutVillage', compact('breadcrumbTitle'));
    }

    public function objective() {
        $breadcrumbTitle = "उद्देश्य एवं सार्वजनिक सेवाएं – पकड़ी भरत खंड";
        return view('pages.about.villageObjective.villageObjective', compact('breadcrumbTitle'));
    }

    public function overview() {
        $breadcrumbTitle = "संक्षिप्त विवरण – पकड़ी भरत खंड";
        return view('pages.about.villageOverview.overview', compact('breadcrumbTitle'));
    }

    public function visionAndMission() {
        $breadcrumbTitle = "दृष्टि और मिशन";
        return view('pages.about.visionAndMission.visionAndMission', compact('breadcrumbTitle'));
    }

    public function organizational() {
        $breadcrumbTitle = "संगठनात्मक संरचना";
        return view('pages.about.organizational.organizational', compact('breadcrumbTitle'));
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
