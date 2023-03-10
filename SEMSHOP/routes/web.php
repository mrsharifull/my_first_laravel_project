<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\SubCatController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'home']);
Route::get('dashboard',[AdminController::class,'admin']);
Route::get('category',[AdminController::class,'Category']);

Route::resource('category', CatController::class);
Route::resource('sub_category', SubCatController::class);