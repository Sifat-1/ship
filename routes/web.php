<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SailorController;
use App\Http\Controllers\RegistrationController;

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
 Route::get('/login',[LoginController::class,'Login']);         
 Route::get('/SailorProfile',[SailorController::class,'SailorProfile']);
 Route::get('/CreatSailor',[SailorController::class,'CreatSailor']);
 Route::post('/StoreSailor',[SailorController::class,'StoreSailor'])->name('store.sailor');