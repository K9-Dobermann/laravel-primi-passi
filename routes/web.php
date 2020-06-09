<?php

use Illuminate\Support\Facades\Route;


Route::get( '/primap',  function () {
    return view('welcome');
});

Route::get( '/secondap',  function () {
    return view('numbers');
});
