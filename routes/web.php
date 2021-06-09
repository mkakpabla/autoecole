<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PackagesController;

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

Route::get("/", HomeController::class)->name("home");
Route::get("/nos-packages", PackagesController::class)->name("packages");
Route::get("/a-propos", AboutController::class)->name("about");
Route::get("/nous-contacter", ContactController::class)->name("contact");
