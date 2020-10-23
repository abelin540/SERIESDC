<?php namespace App\Controllers;

class ContactoController extends BaseController
{
	public function index()
	{
		
		$data = [
			"nombre" =>  "roldan",
			"correo" => "roldan@gmail.com"
		];

		$vistas = view('plantilla/header').
				  view('plantilla/menu').
				  view('contacto/index',$data).
				  view('plantilla/footer');

		return $vistas;
		//echo "<h1>Esta en el area de contacto</h1>";
	}

	
	//--------------------------------------------------------------------

}
