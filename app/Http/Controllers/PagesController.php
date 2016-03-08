<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PagesController extends Controller
{
    // home
	public function home() {
		 return view('pages.welcome');
	}

	public function productos() {
		return view('pages.productos');
	}

}
