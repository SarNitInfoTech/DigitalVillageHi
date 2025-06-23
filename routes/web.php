<?php 

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\SchemeController;
use App\Http\Controllers\EGovernanceController;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\InformationBoardController;




//Home
    Route::get('/', [HomeController::class, 'index'])->name('home');
//About
    Route::get('about', [AboutController::class, 'index'])->name('about');
    Route::get('objective', [AboutController::class, 'objective'])->name('about.objective');
    Route::get('overview', [AboutController::class, 'overview'])->name('about.overview');
    Route::get('vision&mission', [AboutController::class, 'visionAndMission'])->name('about.visionAndMission');
    Route::get('organizational', [AboutController::class, 'organizational'])->name('about.organizational');
// Department
Route::get('public-works', [DepartmentController::class, 'publicWorks'])->name('departments.publicWorks');
Route::get('public-health', [DepartmentController::class, 'publicHealth'])->name('departments.publicHealth');
Route::get('tax', [DepartmentController::class, 'tax'])->name('departments.tax');
Route::get('major-activities', [DepartmentController::class, 'majorActivities'])->name('departments.majorActivities');
Route::get('street-lighting', [DepartmentController::class, 'streetLighting'])->name('departments.streetLighting');
Route::get('town-planning', [DepartmentController::class, 'townPlanning'])->name('departments.townPlanning');
Route::get('urban-development', [DepartmentController::class, 'urbanDevelopment'])->name('departments.urbanDevelopment');
Route::get('drainage', [DepartmentController::class, 'drainage'])->name('departments.drainage');
Route::get('hydraulic', [DepartmentController::class, 'hydraulic'])->name('departments.hydraulic');

//Services 
Route::get('services-property-tax', [ServiceController::class, 'propertyTax'])->name('services.propertyTax');
Route::get('services-water-supply', [ServiceController::class, 'waterSupply'])->name('services.waterSupply');
Route::get('services-license-tax', [ServiceController::class, 'licenseTax'])->name('services.licenseTax');
Route::get('services-birth-death-registration', [ServiceController::class, 'birthDeathRegistration'])->name('services.birthDeathRegistration');
Route::get('services-road-construction', [ServiceController::class, 'roadConstruction'])->name('services.roadConstruction');

//Finance
Route::get('budget', [FinanceController::class, 'budget'])->name('finance.budget');
Route::get('audit-balance-sheet', [FinanceController::class, 'auditBalanceSheet'])->name('finance.auditBalanceSheet');

// Scheme
Route::get('amrut-mission', [SchemeController::class, 'amrutMission'])->name('schemes.amrutMission');
Route::get('swachh-bharat-mission', [SchemeController::class, 'swachhBharatMission'])->name('schemes.swachhBharatMission');

//eGovernance
Route::get('property-tax', [EGovernanceController::class, 'propertyTax'])->name('eGovernance.propertyTax');
Route::get('water-sewerage-charges', [EGovernanceController::class, 'waterSewerageCharges'])->name('eGovernance.waterSewerageCharges');
Route::get('mutations', [EGovernanceController::class, 'mutations'])->name('eGovernance.mutations');
Route::get('issuing-licenses', [EGovernanceController::class, 'forIssuingLicenses'])->name('eGovernance.forIssuingLicenses');
Route::get('advertisement-tax', [EGovernanceController::class, 'advertisementTax'])->name('eGovernance.advertisementTax');
Route::get('birth-death-registration', [EGovernanceController::class, 'birthDeathRegistration'])->name('eGovernance.birthDeathRegistration');
Route::get('building-permission', [EGovernanceController::class, 'buildingPermission'])->name('eGovernance.buildingPermission');
Route::get('e-procurement', [EGovernanceController::class, 'eProcurement'])->name('eGovernance.eProcurement');
Route::get('grievance-redressal', [EGovernanceController::class, 'grievanceRedressal'])->name('eGovernance.grievanceRedressal');

//StaticPageController
Route::get('citizen-charter', [StaticPageController::class, 'citizenCharter'])->name('citizen.charter');
Route::get('contact-us', [StaticPageController::class, 'contactUs'])->name('contact.us');

//InformationBoardController
Route::get('tender-list', [InformationBoardController::class, 'tenderList'])->name('informationBoard.tenderList');
Route::get('announcements', [InformationBoardController::class, 'announcements'])->name('informationBoard.announcements');
Route::get('e-newsletter', [InformationBoardController::class, 'eNewsletter'])->name('informationBoard.eNewsletter');
Route::get('news-events', [InformationBoardController::class, 'newsEvents'])->name('informationBoard.newsEvents');
Route::get('download-forms', [InformationBoardController::class, 'downloadForms'])->name('informationBoard.downloadForms');
Route::prefix('about')->group(function () {
    Route::get('/village', [AboutController::class, 'about'])->name('about.district');
    Route::get('/whoiswho', [AboutController::class, 'whoiswho'])->name('about.whoiswho');
    Route::get('/mapofdistrict', [AboutController::class, 'mapOfDistrict'])->name('about.mapofdistrict');
    Route::get('/districtatglance', [AboutController::class, 'districtAtGlance'])->name('about.districtatglance');

    Route::prefix('administrative-setup')->group(function () {
        Route::get('/administrative', [AboutController::class, 'administrative'])->name('about.administrative');
        Route::get('/development', [AboutController::class, 'development'])->name('about.development');
        Route::get('/education', [AboutController::class, 'education'])->name('about.education');
        Route::get('/police', [AboutController::class, 'police'])->name('about.police');
        Route::get('/police-station', [AboutController::class, 'policeStation'])->name('about.policeStation');
        Route::get('/tahsil', [AboutController::class, 'tahsil'])->name('about.tahsil');
        Route::get('/block', [AboutController::class, 'block'])->name('about.block');
    });

    Route::get('/directory', [AboutController::class, 'directory'])->name('about.directory');
});
