<?php

namespace App\Http\Controllers;

class HomeController extends Controller {

		function showBase(){
			return view('base');
		}
		function showDasboard(){
			return view('dasboard');
		}
		function showData(){
			return view('data');
		}
		function showHeader(){
			return view('header');
		}
		function showLogin(){
			return view('login');
		}
		function showProduct(){
			return view('product');
		}
		function showUser(){
			return view('user');
		}
}