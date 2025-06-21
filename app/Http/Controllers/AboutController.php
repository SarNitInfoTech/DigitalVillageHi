<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    

    // Root About pages
    public function about() {
        return view('pages.about.aboutVillage');
    }

    public function history() {
        return view('components.about.history');
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

