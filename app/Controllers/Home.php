<?php

namespace App\Controllers;

use App\Models\JobModel;

class Home extends BaseController
{
	public function index()
	{
		// Call Model
		$jobModel = new JobModel();

		// Query to get feature job
		$feature_jobs = $jobModel->where('feature_job', true)->orderBy('id', 'DESC')->limit(3)->get();

		$recent_jobs = $jobModel->orderBy('id', 'DESC')->get();

		// Return view with query result
		return view('index', [
			'feature_jobs' => $feature_jobs->getResult(),
			'recent_jobs' => $recent_jobs->getResult()
		]);
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
