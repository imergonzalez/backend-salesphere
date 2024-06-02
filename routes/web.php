<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['mensaje' => 'Probando Laravel']);
});

Route::get('/saludo', function () {
    return 'Saludo desde Laravel';
});