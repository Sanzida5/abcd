<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

Route::get("/",[HomeController::class,"index"])->name("home.index");
Route::get("/admin",[AdminController::class,"dashboard"])->name("admin.dashboard");
Route::match(["get","post"],"/admin/category",[CategoryController::class,"manageCategory"])->name("admin.category");