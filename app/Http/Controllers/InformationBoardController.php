<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationBoardController extends Controller
{
    public function tenderList() {
        $breadcrumbTitle = "निविदा सूची";
        return view('pages.informationBoard.tenderList', compact('breadcrumbTitle'));
    }

    public function announcements() {
        $breadcrumbTitle = "घोषणाएं";
        return view('pages.informationBoard.announcements', compact('breadcrumbTitle'));
    }

    public function eNewsletter() {
        $breadcrumbTitle = "ई-न्यूज़लेटर";
        return view('pages.informationBoard.eNewsletter', compact('breadcrumbTitle'));
    }

    public function newsEvents() {
        $breadcrumbTitle = "समाचार और कार्यक्रम";
        return view('pages.informationBoard.newsEvents', compact('breadcrumbTitle'));
    }

    public function downloadForms() {
        $breadcrumbTitle = "फॉर्म डाउनलोड करें";
        return view('pages.informationBoard.downloadForms', compact('breadcrumbTitle'));
    }
}
