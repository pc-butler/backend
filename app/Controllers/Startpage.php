<?php namespace App\Controllers;

class Startpage extends BaseController
{
	public function index()
	{
		$data['hideTitle'] = "true";
		$data['title'] = "Startpage";
		echo view('templates/header', $data);
		echo view('startpage');
		echo view('templates/footer', $data);
		//return view('startpage');
	}

	//--------------------------------------------------------------------

}
