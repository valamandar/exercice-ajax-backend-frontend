<?php

use App\Route;

require_once '../vendor/autoload.php';

header('Access-Control-Allow-Origin: *');

Route::get('/user/info', 'App\User::info');

Route::post('/user/create', 'App\User::create');

Route::get('/user/all', 'App\User::all');
