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

Route::get('/', function () {
    return view('master');
    // return view('admin.pages.homepage');
});

 Route::get('/dashboard',[AdminController::class,'Dashboard']);
 Route::get('/SignUp',[RegistrationController::class,'Registration']);
 Route::post('/GetRegister',[RegistrationController::class,'GetRegistration'])->name('get.register');
 Route::get('/login',[LoginController::class,'Login']);         
 Route::get('/SailorProfile',[SailorController::class,'SailorProfile']);
 Route::get('/CreatSailor',[SailorController::class,'CreatSailor']);
 Route::post('/StoreSailor',[SailorController::class,'StoreSailor'])->name('store.sailor');
 Route::get('/FillForm',[AdmissionController::class,'FillForm']);
 Route::get('/CandidateList',[CandidateController::class,'CandidateList']);
 Route::post('/StoreCandidatedata',[CandidateController::class,'StoreCandidatedata'])->name('store.candidate');
 Route::get('/ShowRank',[RankController::class,'ShowRank']);
 Route::get('/CtreatRank',[RankController::class,'CreatRank']);
 Route::post('/StoreRank',[RankController::class,'StoreRank'])->name('store.rank');
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


 


// this is for website view
// Route::get('/', function () {
//     return view('website.master');

// });




























// Route::get('/test', function () {
//     return view('admin.pages.test');
//     // return view('admin.pages.homepage');
// });