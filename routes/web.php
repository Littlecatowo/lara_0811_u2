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
    return view("welcome");
});

Route::get("/", function() {
    return "welcome";
});

Route::get("r1", function() {
    return redirect(("r2"));
});

Route::get("r2", function() {
    return view("welcome");
});

Route::get("hello/{name?}", function($name= "Everyone") {
    return "Hello, " . $name;
}) -> name("hello.index");

Route::get("dashboard", function() {
    return 'dashboard';
});

Route::group(["prefix" => "admin"], function() {
    Route::get("dashboard", function() {
        return 'admin dashboard';
    });
});