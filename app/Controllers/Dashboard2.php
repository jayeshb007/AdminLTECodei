<?php namespace App\Controllers;

class Dashboard2 extends BaseController
{
	public function index()
	{
		
		$data['tittle'] = 'Dashboard2';
		
		echo view('includes/header', $data);
		echo view('includes/sidebar');
		echo view('dashboard2', $data);
		echo view('includes/footer');
	}

}