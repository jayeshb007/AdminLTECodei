<?php namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		
		$data['tittle'] = 'Dashboard';
		
		echo view('includes/header', $data);
		echo view('includes/sidebar');
		echo view('dashboard', $data);
		echo view('includes/footer');
	}

}