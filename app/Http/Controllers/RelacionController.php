<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Tienda;

use Illuminate\Http\Request;

class RelacionController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return view('welcome', compact('productos'));
}
}