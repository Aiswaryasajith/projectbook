<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controllerlogin;
use App\Http\Controllers\controllerregistration;
use App\Http\Controllers\controllerabout;
use App\Http\Controllers\controlleradmin;
use App\Http\Controllers\controllercategory;
use App\Http\Controllers\controllercontact;
use App\Http\Controllers\controllercustomerview;
use App\Http\Controllers\controllerhome;
use App\Http\Controllers\controlleritem;
use App\Http\Controllers\controllerorder;
use App\Http\Controllers\controllerreview;
use App\Http\Controllers\controllersubcategory;
use App\Http\Controllers\controllertrack;
use App\Http\Controllers\controllerwelcome;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\controllerpayment;











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




Route::get("/about",[controllerabout::class,'create']);
Route::get("/admin",[controlleradmin::class,'create']);
Route::get("/categorydetails",[controllercategory::class,'create']);
Route::get("/contact",[controllercontact::class,'create']);
Route::get("/customerview",[controllercustomerview::class,'create']);
Route::get("/home",[controllerhome::class,'create']);
Route::get("/itemdetails",[controlleritem::class,'create']);
Route::get("/login",[controllerlogin::class,'create']);
Route::get("/order",[controllerorder::class,'create']);
Route::get("/registration",[controllerregistration::class,'create']);
Route::get("/review",[controllerreview::class,'create']);
Route::get("/subcategorydetails",[controllersubcategory::class,'create']);
Route::get("/track",[controllertrack::class,'create']);
Route::get("/",[controllerwelcome::class,'create']);
Route::get("/payment",[controllerpayment::class,'create']);


Route::post("/aboutread",[controllerabout::class,'store']);
Route::post("/adminread",[controlleradmin::class,'store']);

Route::post("/categoryread",[controllercategory::class,'store']);

Route::post("/contactread",[controllercontact::class,'store']);

Route::post("/homeread",[controllerhome::class,'store']);
Route::post("/itemread",[controlleritem::class,'store']);
Route::post("/loginread",[controllerlogin::class,'store']);
Route::post("/orderread",[controllerorder::class,'store']);
Route::post("/customerread",[controllerregistration::class,'store']);
Route::post("/reviewread",[controllerreview::class,'store']);
Route::post("/subcategoryread",[controllersubcategory::class,'store']);
Route::post("/trackread",[controllertrack::class,'store']);
Route::post("/welcomeread",[controllerwelcome::class,'store']);

Route::get("/categoryview",[controllercategory::class,'index']);
Route::get("/subcategoryview",[controllersubcategory::class,'index']);
Route::get("/itemview",[controlleritem::class,'index']);
Route::get("/customerview",[controllerregistration::class,'index']);



Route::post("/categoryeditprocess/{id}",[controllercategory::class,'update']);
Route::get("/category/{id}/edit",[controllercategory::class,'edit']);









