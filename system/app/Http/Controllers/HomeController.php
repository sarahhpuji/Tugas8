<?php 

namespace App\Http\Controllers;
use App\Models\Artikel;

/**
 * 
 */
class HomeController extends Controller
{	
	function index(){
		$data['list_artikel'] = Artikel::all();
		return view('artikel.index', $data);
	}

	function showHome(){
		return view('home');
	}

	function showBlog(){
		$data['list_artikel'] = Artikel::all();
		return view('blog',$data);
	}
	function showDashboard(){
		return view('dashboard');
	}
	function showContact(){
		return view('contact');
	}
}