<?php namespace App\Controllers;

class Dashboard3 extends BaseController
{
	public function index()
	{
		
		$data['tittle'] = 'Dashboard3';
		
		echo view('includes/header', $data);
		echo view('includes/sidebar');
		echo view('dashboard', $data);
		echo view('includes/footer');
	}

}