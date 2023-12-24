<?php

use App\Route;

Route::get(['/', 'App\Controllers\HomeController@index'])->name('app_index');
Route::get(['/api/test', 'App\Controllers\HomeController@apiExemple'])->name('api_exemple');