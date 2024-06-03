<?php

use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Route;

  
Route::post('/login', [PerfilController::class, 'login']);