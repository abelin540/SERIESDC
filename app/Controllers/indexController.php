<?php namespace App\Controllers;

class indexController extends BaseController
{
	public function index()
	{
		
	

		return view('index');
		//echo "<h1>Esta en el area de contacto</h1>";
	}


    public function flash() {
		return view('flash');
	}


	public function smallville() {
		return view('smallville');
	}


	
	public function arrow() {
		return view('arrow');
	}

	public function acerca() {
		return view('acerca');
	}


	
	//--------------------------------------------------------------------

}
