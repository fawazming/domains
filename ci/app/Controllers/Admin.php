<?php namespace App\Controllers;

class Admin extends BaseController
{
	// Dashboard
	// Domains -Manage -Transfer
	// Billing
	// Contact Us
	// Log Out
	public function index()
	{
		return view('admin/dashboard');
	}

	public function domains()
	{
		return view('admin/domains');
	}

	public function billing()
	{
		return view('admin/billing');
	}

	public function contact()
	{
		return view('admin/contact');
	}

	public function logout()
	{
		echo ('logout');
	}

	public function login()
	{
		return view('admin/login');
	}

	public function register()
	{
		return view('admin/register');
	}

	

	//--------------------------------------------------------------------

}
