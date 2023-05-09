<?php

use App\Http\Controllers\Frontend\AssessmentController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LanguageTherapyController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\SubscriberController;
use App\Http\Controllers\Frontend\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController  ::class,'home'])->name('home');
Route::get('/about-us',[HomeController::class,'aboutUs'])->name('about-us');

Route::get('/category-traning/{slug}',[HomeController::class,'categoryTraning'])->name('category-traning');
Route::get('/single-traning/{slug}',[HomeController::class,'singleTraning'])->name('single-traning');
Route::get('/buy-now/{slgu}',[HomeController::class,'buyNow'])->name('buy-now');
Route::post('/traning-buy',[HomeController::class,'traningBuy'])->name('traning-buy');

Route::get('/contract',[HomeController::class,'contract'])->name('contract');


// Assessment

Route::get('/assessment-category/{slug}',[AssessmentController::class,'singleAssisment'])->name('assessment-category');
Route::post('/submit-assessment',[AssessmentController::class,'submitAssessment'])->name('submit-assessment');
Route::post('/assessment-buy',[AssessmentController::class,'assessmentBuy'])->name('assessment-buy');



//Subscribe Newsletter
Route::post('/subscribe',[SubscriberController::class,'subscribe'])->name('subscribe');

//Audiological Tests
Route::get('/audiological-test',[TestController::class,'audiologicalTest'])->name('audiological-test');
Route::get('/single-test/{slug}',[TestController::class,'singleTest'])->name('single-test');
Route::get('/order-test/{slug}',[TestController::class,'orderTest'])->name('order-test');
Route::post('/test-order',[TestController::class,'order'])->name('test-order');


//Language Therapy
Route::get('/all-language-therapy',[LanguageTherapyController::class,'allLanguageTherapy'])->name('all-language-therapy');
Route::get('/therapy/{slug}',[LanguageTherapyController::class,'therapy'])->name('therapy');
Route::get('/single-therapy/{slug}',[LanguageTherapyController::class,'singleTherapy'])->name('single-therapy');
Route::get('/order-therapy/{slug}',[LanguageTherapyController::class,'orderTherapy'])->name('order-therapy');
Route::post('/therapy-order',[LanguageTherapyController::class,'therapyOrder'])->name('therapy-order');


//SErvice
Route::get('/single-service/{slug}',[ServiceController::class,'singleService'])->name('single-service');
Route::get('/order-service/{slug}',[ServiceController::class,'orderService'])->name('order-service');
Route::post('/service-order',[ServiceController::class,'serviceOrder'])->name('service-order');

//All Order Success Message
Route::get('/order-success/{id}',[AssessmentController::class,'orderSuccess'])->name('order-success');
//Donner
Route::view('/donner','frontend.pages.donner.donner')->name('donner');
//Donner List
Route::view('/donner-list','frontend.pages.donner.donner_list')->name('donner-list');

Route::get('free-service',[ServiceController::class,'freeService'])->name('free-service');
Route::post('/free-service-store',[ServiceController::class,'freeServiceStore'])->name('free-service.store');

