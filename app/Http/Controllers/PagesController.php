<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PagesController extends Controller
{
    // home
	public function home() {
		 return view('welcome');
	}

	public function productos() {
		return 'Productos page here';
	}

}
