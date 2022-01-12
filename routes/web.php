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
Route::get('/FillForm',[AdmissionController::class,'FillForm'])->name('fillform');











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
 
 Route::get('/edit-sailor/{id}',[SailorController::class,'editSailor'])->name('edit.sailor');
 Route::put('/update-sailor/{id}',[SailorController::class,'updateSailor'])->name('update.sailor');

 Route::get('/Delete/SailorProfile/{id}',[SailorController::class,'DeleteSailorProfile'])->name('delete.sailorprofile');
//   Candidate
 
 Route::get('/CandidateList',[CandidateController::class,'CandidateList'])->name('show.candidate');
 Route::post('/StoreCandidatedata',[CandidateController::class,'StoreCandidatedata'])->name('store.candidate');
//  Route::get('/BringCandidatedata',[CandidateController::class,'BringCandidatedata'])->name('bring.candidate');
Route::get('/view/candidate/profile/{candidate_id}', [CandidateController::class, 'VIewCandidateProfile'])->name('candiate.view');
Route::get('/AddCandidate',[CandidateController::class,'AddCandidate'])->name('add.candidate');
//  ranks
 Route::get('/ShowRank',[RankController::class,'ShowRank'])->name('show.rank');
 Route::get('/CtreatRank',[RankController::class,'CreatRank'])->name('create.rank');
 Route::post('/StoreRank',[RankController::class,'StoreRank'])->name('store.rank');
 Route::get('/View/SailorRank/{id}',[RankController::class,'ViewSailorRank'])->name('view.rank');
 Route::get('/Delete/SailorRank/{id}',[RankController::class,'DeleteSailorRank'])->name('delete.sailorrank');

//  courses

Route::get('/CreatCourse',[CourseController::class,'CreatCourse'])->name('create.course');
 Route::get('/ShowBasic',[CourseController::class,'ShowBasic'])->name('show.basic');
 Route::post('/StoreBasic',[CourseController::class,'StoreBasic'])->name('store.basic');
 Route::get('/ShowSpecial',[CourseController::class,'ShowSpecial'])->name('show.special');
 Route::post('/StoreSpecial',[CourseController::class,'StoreSpecial'])->name('store.special');

//  criteria_courses

// basic
Route::get('/CreatbCriteria/{id}',[CourseController::class,'CreatbCriteria'])->name('create.bcriteria');
Route::get('/ShowbCriteria',[CourseController::class,'ShowbCriteria'])->name('show.bcriteria');
Route::post('/StorebCriteria/{id}',[CourseController::class,'StorebCriteria'])->name('store.bcriteria');
// special
Route::get('/CreatsCriteria/{id}',[CourseController::class,'CreatsCriteria'])->name('create.scriteria');
Route::get('/ShowsCriteria',[CourseController::class,'ShowsCriteria'])->name('show.scriteria');
Route::post('/StoresCriteria/{id}',[CourseController::class,'StoresCriteria'])->name('store.scriteria');
});

 

 







 



























//  Route::get('/ShowOther',[CourseController::class,'ShowOther']);
//  Route::post('/StoreOther',[CourseController::class,'StoreOther'])->name('store.other');