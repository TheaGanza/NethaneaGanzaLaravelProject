<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::get('/create', 'App\Http\Controllers\InventoryController@create');
Route::get('/inventory', 'App\Http\Controllers\InventoryController@index');
