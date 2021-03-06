<?php 


namespace App\Http\Controllers;
use Auth;
use App\Models\User;
/**
 * 
 */
class AuthController extends Controller
{
	 
	function showLogin()
	{
		return view('loginAdmin');	
	}
	
	function prosesLogin()
	{
		if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
			return redirect('dashboard')->with('success', 'Login berhasil');
		} else {
			return back()->with('danger', 'Login anda gagal, mohon periksa email atau password anda!');
		}
	}
	
	function logout()
	{
		Auth::logout();
		return redirect('/');
	}
	
	function registrasi()
	{
		return view('registration');
	}

	function store()
	{
		$user = new User;
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		$user->save();

		return view('LoginAdmin')->with('success', 'Selamat! Anda Berhasil Mendaftar. Silahkan Login');
	}
	
	function forgotPassword()
	{
		
	}

}