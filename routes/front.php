<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\Admin\ServiceController;

Route::get('front_agency',Function (){
    return view ('Tourism_business/front_agency');
    
}); 

Route::get('about',Function (){
    return view ('Tourism_business/front_about');
});

Route::get('home', function () {
    return view('Tourism_business/front_home');     
});

//for switching language route
Route::get('/lang/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
  });

// Route::get('/auth', function () {
//     return view('layouts.auth_app');
// });

Route::get('/admin-test', function () {
    // return view('layouts.master_app');
    return view('admin.services.index');
});

Route::get('/',[FrontPageController::class,'index'])->name('front.home');
Route::get('/about',[FrontPageController::class,'about'])->name('front.about');
Route::get('/service',[FrontPageController::class,'service'])->name('front.service');
Route::get('/package',[FrontPageController::class,'package'])->name('front.package');
Route::get('/contact',[FrontPageController::class,'contact'])->name('front.contact');
Route::get('/destination',[FrontPageController::class,'destination'])->name('front.destination');
Route::get('/booking',[FrontPageController::class,'booking'])->name('front.booking');
Route::get('/guide',[FrontPageController::class,'travel_guide'])->name('front.travel_guide');
Route::get('/testimonail',[FrontPageController::class,'testimonail'])->name('front.testimonail');

Route::get('/admin.Services',[ServiceController::class,'index'])->name('admin.services');
Route::get('admin/services',[ServiceController::class,'index'])->name('admin.services');
Route::get('admin/services/create',[ServiceController::class,'create'])->name('admin.services.create');
Route::post('admin/services/store',[ServiceController::class,'store'])->name('admin.services.store');
Route::get('admin/services/edit/{id}',[ServiceController::class,'edit'])->name('admin.services.edit');
Route::get('admin/services/show/{id}',[ServiceController::class,'show'])->name('admin.services.show');
Route::post('admin/services/update/{id}',[ServiceController::class,'update'])->name('admin.services.update');
Route::post('admin/services/destroy/{id}',[ServiceController::class,'destroy'])->name('admin.services.destroy');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







