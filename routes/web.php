<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SailorController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\RankController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\admin\UserController as AdminUserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// this is for website view

Route::get('/',[HomeController::class,'viewWebsite'])->name('website');

// Login and registration

Route::post('/registration',[UserController::class,'registration'])->name('user.registration');
Route::post('/login',[UserController::class,'login'])->name('user.login');
Route::get('/logout',[UserController::class,'logout'])->name('user.logout');
//  Admission
Route::get('/FillForm',[AdmissionController::class,'FillForm']);











 //  this is for admin view


    // Route::get('/',function(){
    //     return view('master');
    // })->name('admin');
    Route::get('/login',[AdminUserController::class,'login'])->name('admin.login'); 
    Route::post('/dologin',[AdminUserController::class,'doLogin'])->name('admin.dologin'); 


    Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
        Route::get('/', function () {
                return view('master');
            })->name('backend');
 Route::get('/logout',[AdminUserController::class,'logout'])->name('admin.logout');
 Route::get('/dashboard',[AdminController::class,'Dashboard']);
 Route::get('/SignUp',[RegistrationController::class,'Registration']);
 Route::post('/GetRegister',[RegistrationController::class,'GetRegistration'])->name('get.register');
 
//  SailorProfile        
 Route::get('/SailorProfile',[SailorController::class,'SailorProfile'])->name('bring.sailor');
 Route::get('/CreatSailor',[SailorController::class,'CreatSailor'])->name('creat.sailor');
 Route::post('/StoreSailor',[SailorController::class,'StoreSailor'])->name('store.sailor');
 Route::get('/View/SailorProfile/{id}',[SailorController::class,'ViewSailorProfile'])->name('view.sailorprofile');
 Route::get('/Delete/SailorProfile/{id}',[SailorController::class,'DeleteSailorProfile'])->name('delete.sailorprofile');
//   Candidate
 
 Route::get('/CandidateList',[CandidateController::class,'CandidateList']);
 Route::post('/StoreCandidatedata',[CandidateController::class,'StoreCandidatedata'])->name('store.candidate');

//  ranks
 Route::get('/ShowRank',[RankController::class,'ShowRank']);
 Route::get('/CtreatRank',[RankController::class,'CreatRank']);
 Route::post('/StoreRank',[RankController::class,'StoreRank'])->name('store.rank');
 Route::get('/View/SailorRank/{id}',[RankController::class,'ViewSailorRank'])->name('view.rank');

//  courses

Route::get('/CreatCourse',[CourseController::class,'CreatCourse']);
 Route::get('/ShowBasic',[CourseController::class,'ShowBasic']);
 Route::post('/StoreBasic',[CourseController::class,'StoreBasic'])->name('store.basic');
 Route::get('/ShowSpecial',[CourseController::class,'ShowSpecial']);
 Route::post('/StoreSpecial',[CourseController::class,'StoreSpecial'])->name('store.special');
 Route::get('/ShowOther',[CourseController::class,'ShowOther']);
 Route::post('/StoreOther',[CourseController::class,'StoreOther'])->name('store.other');
//  criteria_courses

// basic
Route::get('/CreatbCriteria',[CourseController::class,'CreatbCriteria']);
Route::get('/ShowbCriteria',[CourseController::class,'ShowbCriteria']);
Route::post('/StorebCriteria',[CourseController::class,'StorebCriteria'])->name('store.bcriteria');
// special
Route::get('/CreatsCriteria',[CourseController::class,'CreatsCriteria']);
Route::get('/ShowsCriteria',[CourseController::class,'ShowsCriteria']);
Route::post('/StoresCriteria',[CourseController::class,'StoresCriteria'])->name('store.scriteria');
});

 

 







 



























