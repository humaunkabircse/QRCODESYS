<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('/');
});

Auth::routes([

    'register' => true, // Register Routes...

    'reset' => false, // Reset Password Routes...

    'verify' => false, // Email Verification Routes...

  ]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Frontend Route
Route::get('/', [App\Http\Controllers\Frontend\IndexController::class, 'index']);
Route::get('/scanner', [App\Http\Controllers\Frontend\IndexController::class, 'scanner'])->name('apply.scanner');
Route::post('/scan', [App\Http\Controllers\Frontend\IndexController::class, 'ScanDataStore'])->name('apply.store');








//Admin Route
Route::prefix('admin')->middleware(['auth','IsAdmin'])->group(function(){
    //Dashboard Rute
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);


    //__Service Route__//
    Route::get('service', [App\Http\Controllers\Admin\ServiceController::class, 'index']);
    Route::get('service/create', [App\Http\Controllers\Admin\ServiceController::class, 'create']);
    Route::post('service/store', [App\Http\Controllers\Admin\ServiceController::class, 'store']);
    // Route::get('category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    // Route::put('category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    // Route::get('category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'delete']);



    //__ContactDetails Route FOR DR__//
    Route::get('contactdetails/index', [App\Http\Controllers\Admin\AboutController::class, 'ContactDetailsIndex']);
    Route::get('contactdetails/edit/{id}', [App\Http\Controllers\Admin\AboutController::class, 'ContactDetailsEdit']);
    Route::post('contactdetails/update/{id}', [App\Http\Controllers\Admin\AboutController::class, 'ContactDetailsUpdate']);





});
