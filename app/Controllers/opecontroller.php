<?php namespace App\Controllers;

class opecontroller extends BaseController
{
	public function index()
	{

		$datos = [
                    "nombre" => "Janeth Castillo Muratalla",
                    
					"correo" => "ofresita25@gmail.com",
					"escuela" => "Tecnologico 1"
				];

		return view('persona', $datos);
	}

	public function persona()
	{

		$datos = [
            "nombre" => "Janeth Castillo Muratalla",
                    
            "correo" => "ofresita25@gmail.com",
            "escuela" => "Tecnologico 1"
				];

		return view('persona', $datos);
	}

	public function direccionObtenida($direccion, $p2) {
		echo $direccion.$p2;
    }
    

    public function operaciones() {
		return view('operaciones');
	}



    public function pasarPost() {// metodo para hacer la funcion de las operaciones


        $num1=$_POST['num1'];//recupero valores de operaciones
        $num2=$_POST['num2'];//recupero valores de operaciones
    
        $operacion=$_POST['operaciones'];//recupero datos de operaciones
        $resultado=0; //almaceno mis operaciones
    
        if($operacion=="+"){
            $resultado=$num1+$num2;
            echo "el resultado de la suma es:".$resultado;
    
    
        }else if ($operacion=="-"){
            $resultado=$num1-$num2;
            echo "el resultado de la resta es:".$resultado;
    
        }
    
        else if ($operacion=="*"){
            $resultado=$num1*$num2;
            echo "el resultado de la multiplicacion es:".$resultado;
    
        }
        else if ($operacion=="/"){
            $resultado=$num1/$num2;
    
            echo "el resultado de la division es:".$resultado;
    
        }
    
    
            }
                
            }
    