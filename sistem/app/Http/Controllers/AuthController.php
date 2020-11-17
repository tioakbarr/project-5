<?php

namespace App\Http\Controllers;
use Illuminate\Support\facades\Auth;

class AuthController extends Controller
{ 
	function showlogin(){
		return view('login');
	}

	function loginProccess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('user')->with('success', 'Login Berhasil');
		}else{
			return back()->with('danger', 'Login Gagal, Silahkan cek email dan password anda');
		}
	}
}