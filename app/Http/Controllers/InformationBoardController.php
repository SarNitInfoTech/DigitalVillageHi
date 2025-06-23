<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationBoardController extends Controller
{
    public function tenderList() {
        $breadcrumbTitle = "Tender List";
        return view('pages.informationBoard.tenderList', compact('breadcrumbTitle'));
    }

    public function announcements() {
        $breadcrumbTitle = "Announcements";
        return view('pages.informationBoard.announcements', compact('breadcrumbTitle'));
    }

    public function eNewsletter() {
        $breadcrumbTitle = "E-Newsletter";
        return view('pages.informationBoard.eNewsletter', compact('breadcrumbTitle'));
    }

    public function newsEvents() {
        $breadcrumbTitle = "News & Events";
        return view('pages.informationBoard.newsEvents', compact('breadcrumbTitle'));
    }

    public function downloadForms() {
        $breadcrumbTitle = "Download Forms";
        return view('pages.informationBoard.downloadForms', compact('breadcrumbTitle'));
    }
}
