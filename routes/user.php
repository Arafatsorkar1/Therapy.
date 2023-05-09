<?php

use App\Http\Controllers\User\AllOrderController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'user','as'=>'user.','middleware'=>['auth','user']],function (){
   Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
   Route::get('/profile',[ProfileController::class,'index'])->name('profile');
   Route::get('/profile-edit/{id}',[ProfileController::class,'edit'])->name('profile.edit');
   Route::post('/profile-update/{id}',[ProfileController::class,'update'])->name('profile.update');

   Route::get('/all-orders',[AllOrderController::class,'allOrders'])->name('all-orders');
   Route::get('/all-orders-traning',[AllOrderController::class,'allTraning'])->name('all-orders.traning');
   Route::get('/all-orders-therapy',[AllOrderController::class,'allTherapy'])->name('all-orders.therapy');
   Route::get('/all-orders-test',[AllOrderController::class,'allTest'])->name('all-orders.test');
   Route::get('/all-orders-service',[AllOrderController::class,'allService'])->name('all-orders.service');
});
