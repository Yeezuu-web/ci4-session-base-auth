<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}

	public function about()
	{
		return view('about');
	}

	public function dashboard()
	{
		if (!session('id')) return redirect()->route('loginForm');

		return view('profile');
	}
}
