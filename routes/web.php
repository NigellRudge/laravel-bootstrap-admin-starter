<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class, 'authenticate'])->name('authenticate');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');




Route::group(['middleware' => ['custom_auth','language']],function(){
    Route::post('/changeLang', [AuthController::class,'changeLanguage'])->name('change_language');

    Route::get('',[DashboardController::class,'index'])->name('dashboard');
});
