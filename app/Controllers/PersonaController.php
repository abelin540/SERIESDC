<?php namespace App\Controllers;

class PersonaController extends BaseController
{
	public function index()
	{
		
		$data = [
			"nombre" =>  "Ofelia Janeth CM",
			"correo" => "ofresita25@gmail.com",
			"escuela"=>  "php"

		];

		$vistas = view('plantilla/header').
				  view('plantilla/menu').
				  view('persona/Persona',$data).
				  view('plantilla/footer');

		return $vistas;
		//echo "<h1>Esta en el area de contacto</h1>";
	}

	public function persona()
	{

		$datos = [
			"nombre" =>  "Ofelia Janeth CM",
			"correo" => "ofresita25@gmail.com",
			"escuela"=>  "php"

				];

				$vistas = view('plantilla/header').
				  view('plantilla/menu').
				  view('contacto/index',$data).
				  view('plantilla/footer');



		return view($vistas, $datos);
	}

	public function direccionObtenida($direccion, $p2) {
		echo $direccion.$p2;
	}

	public function contacto() {
		return view('contacto');
	}

	public function pasarPost() {
		echo $_POST['valor1'];
	}
	//--------------------------------------------------------------------

}
