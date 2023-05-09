<?php

use App\Http\Controllers\Backend\AllOrderController;
use App\Http\Controllers\Backend\AnswerController;
use App\Http\Controllers\Backend\AnswerGroupController;
use App\Http\Controllers\Backend\AssessmentOrderController;
use App\Http\Controllers\Backend\BusinessSettingController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CategoryTypeContoller;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DonnerController;
use App\Http\Controllers\Backend\LanguageCategoryController;
use App\Http\Controllers\Backend\LanguageTherapyController;
use App\Http\Controllers\Backend\QuestionController;
use App\Http\Controllers\Backend\ReportGenerateController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\SubscriberController;
use App\Http\Controllers\Backend\TestController;
use App\Http\Controllers\Backend\TraningCategoryController;
use App\Http\Controllers\Backend\TraningController;
use App\Http\Controllers\Backend\TraningOrderController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>['auth','admin']],function (){
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::resource('/category-type',CategoryTypeContoller::class);
    Route::resource('/category',CategoryController::class);
    Route::resource('/sub-category',SubCategoryController::class);

    //Traning Category
    Route::resource('/traning-category',TraningCategoryController::class);
    Route::resource('/traning',TraningController::class);
    Route::resource('/traning-order',TraningOrderController::class);

    //Answer
    Route::resource('/answer',AnswerController::class);

    //Question
    Route::resource('/question',QuestionController::class);
    Route::post('/get-sub-category',[QuestionController::class,'getSubCategory'])->name('getSubCategory');
    //Assessment orders
    Route::resource('/assessment-order',AssessmentOrderController::class);
    Route::get('/assessment-order-verifi/{id}',[AssessmentOrderController::class,'assessmentOrderVerifi'])->name('assessment-order-verifi');

    Route::resource('/subscriber',SubscriberController::class);

    //user
    Route::resource('/user',UserController::class);

    //Home Page Setting
    Route::get('/home-page',[BusinessSettingController::class,'homePageSetting'])->name('homepage.setting');
    Route::get('/footer-setting',[BusinessSettingController::class,'footerSetting'])->name('footer.setting');

    // Report Generation
    Route::get('/generate-report/{id}',[ReportGenerateController::class,'index'])->name('generate-report.index');
    Route::post('/submit-report',[ReportGenerateController::class,'store'])->name('submit-report.store');
    Route::get('/report-show/{id}',[ReportGenerateController::class,'show'])->name('report.show');
    Route::get('/report-download/{id}',[ReportGenerateController::class,'reportDownload'])->name('report.download');

    //Tests
    Route::resource('/test',TestController::class);

    //Language Therapy Category
    Route::resource('/language-therapy-category',LanguageCategoryController::class);
    //Language Therapy
    Route::resource('/language-therapy',LanguageTherapyController::class);
    //Service
    Route::resource('/service',ServiceController::class);

    //Manage All Orders
    Route::resource('/all-order',AllOrderController::class);
    Route::get('/all-traning-order',[AllOrderController::class,'allTraningOrder'])->name('all-traning-order.index');
    Route::get('/all-therapy-order',[AllOrderController::class,'allTherapyOrder'])->name('all-therapy-order.index');
    Route::get('/all-test-order',[AllOrderController::class,'allTestOrder'])->name('all-test-order.index');
    Route::get('/all-service-order',[AllOrderController::class,'allServiceOrder'])->name('all-service-order.index');
    //Donner List
    Route::resource('donner',DonnerController::class);









    //Setting
    Route::post('/setting',[BusinessSettingController::class,'update'])->name('setting.update');
    Route::post('/setting-heorimage',[BusinessSettingController::class,'settingHeorimage'])->name('homepage.setting.heorimage');
    Route::post('/setting-aboutimage',[BusinessSettingController::class,'settingAboutimage'])->name('homepage.setting.aboutimage');

    //Institute Setting
    Route::get('/setting-institute',[BusinessSettingController::class,'instituteSetting'])->name('setting.institute');
    Route::view('/website-setting','backend.admin.pages.setting.website_setting')->name('setting.website');

    Route::post('/setting-website-icon',[BusinessSettingController::class,'websiteIcon'])->name('setting.website-icon');
    Route::post('/setting-website-logo',[BusinessSettingController::class,'websiteLogo'])->name('setting.website-logo');
    Route::view('/setting-all-others','backend.admin.pages.setting.all_others')->name('setting.all-others');
});

