<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
 public function budget() {
    $breadcrumbTitle = "Budget";
    return view('pages.finance.budget', compact('breadcrumbTitle'));
}

public function auditBalanceSheet() {
    $breadcrumbTitle = "Audit Balance Sheet";
    return view('pages.finance.auditBalanceSheet', compact('breadcrumbTitle'));
}
}
