<?php namespace App\Controllers;

class Demopage extends BaseController
{
	public function index()
	{
		
		$data['tittle'] = 'Demo Page';
		
		echo view('includes/header', $data);
		echo view('includes/sidebar');
		echo view('demopage', $data);
		echo view('includes/footer');
	}

}