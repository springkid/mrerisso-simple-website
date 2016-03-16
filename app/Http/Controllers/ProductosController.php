<?php

namespace App\Http\Controllers;

use  DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class ProductosController extends Controller
{
    //

    public function index() {

    	productos = DB::table('productos')->get();

    	return view('productos.index',compact('productos'));
    }
}
