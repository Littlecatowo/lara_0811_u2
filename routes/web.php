<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", function() {
    return view("welcome"); #retun welcome page
});

Route::get("/", function() {
    return "welcome"; #return welcome string
});

Route::get("r1", function() {
    return redirect(("r2")); #redirect to r2 route
});

Route::get("r2", function() {
    return view("welcome"); #return welcome page
});

Route::get("hello/{name?}", function($name= "Everyone") {
    return "Hello, " . $name; #return "Hello, XXX" string
}) -> name("hello.index"); #named route to hello.index

Route::get("dashboard", function() {
    return 'dashboard'; #return dashboard string 
});

Route::group(["prefix" => "admin"], function() {
    Route::get("dashboard", function() {
        return 'admin dashboard'; #return admin dashboard string
    });
});

use App\Http\Controllers\HomeController;

Route::get('home', [HomeController::class, 'index'])->name('home.index');