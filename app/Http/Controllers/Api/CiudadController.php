<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ciudad;

class CiudadController extends Controller
{
    public function index()
    {
        $ciudades = Ciudad::all();
        return response()->json($ciudades);
    }
}
