<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "welcome by Test";
});

Route::get("/", function () {
    return view("welcome");
});

Route::get("r1", function () {
    return redirect("r2");
});

Route::get("r2", function () {
    return view("welcome");
});

Route::get("home/{name?}", function ($name="MyFriend") {
    return "Hello, " .$name;
}) -> name("hello.index");