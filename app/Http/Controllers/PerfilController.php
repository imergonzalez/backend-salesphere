<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function login(Request $request) {
        return response()->json($request->all());
    }
}
