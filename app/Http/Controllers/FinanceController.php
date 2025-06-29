<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function budget() {
        $breadcrumbTitle = "बजट";
        return view('pages.finance.budget', compact('breadcrumbTitle'));
    }

    public function auditBalanceSheet() {
        $breadcrumbTitle = "लेखा परीक्षण और बैलेंस शीट";
        return view('pages.finance.auditBalanceSheet', compact('breadcrumbTitle'));
    }
}
