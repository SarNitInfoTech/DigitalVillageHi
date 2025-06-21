<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;

Route::prefix('about')->group(function () {
    Route::get('/village', [AboutController::class, 'about'])->name('about.district');
    Route::get('/history', [AboutController::class, 'history'])->name('about.history');
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
