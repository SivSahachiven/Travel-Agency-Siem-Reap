<?php

use App\Http\Controllers\FrontPageController;
use Illuminate\Support\Facades\Route;

Route::get('front_agency',Function (){
    return view ('Tourism_business/front_agency');
    
}); 

Route::get('about',Function (){
    return view ('Tourism_business/front_about');
});

Route::get('home', function () {
    return view('Tourism_business/front_home');     
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







