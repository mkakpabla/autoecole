<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Admin\MessagesController;
use App\Http\Controllers\Admin\PackagesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TemoignagesController;
use App\Http\Controllers\Admin\UtilisateursController;







Route::get("/login", LoginController::class)->name("admin.login")->middleware("guest");

Route::group(["middleware" => "auth"], function() {


    Route::get("/", [DashboardController::class, "index"])->name("admin.index");

    Route::get("/logout", LogoutController::class)->name("admin.logout");

    // Admin package routes
    Route::get("/packages", [PackagesController::class, "index"])->name("admin.packages");
    Route::get("/packages/create", [PackagesController::class, "create"])->name("admin.packages.create");
    Route::get("/packages/{package}/edit", [PackagesController::class, "edit"])->name("admin.packages.edit");
    Route::delete("/packages/{package}/delete", [PackagesController::class, "delete"])->name("admin.packages.delete");

    // Admin messages routes
    Route::get("/messages", MessagesController::class)->name("admin.messages");

    // Admin temoignages routes
    Route::get("/temoignages", [TemoignagesController::class, "index"])->name("admin.temoignages");
    Route::get("/temoignages/create", [TemoignagesController::class, "create"])->name("admin.temoignages.create");
    Route::get("/temoignages/{temoignage}/edit", [TemoignagesController::class, "edit"])->name("admin.temoignages.edit");
    Route::delete("/temoignages/{temoignage}/delete", [TemoignagesController::class, "delete"])->name("admin.temoignages.delete");


    // Admin utilisateurs routes
    Route::get("/utilisateurs", [UtilisateursController::class, "index"])->name("admin.users.index");
    Route::get("/utilisateurs/create", [UtilisateursController::class, "create"])->name("admin.users.create");
    Route::get("/utilisateurs/{user}/edit", [UtilisateursController::class, "edit"])->name("admin.users.edit");
    Route::delete("/utilisateurs/{user}/delete", [UtilisateursController::class, "delete"])->name("admin.users.delete");
    Route::get("/utilisateurs/{user}/reset-password", [UtilisateursController::class, "resetPassword"])->name("admin.users.reset-password");
});
