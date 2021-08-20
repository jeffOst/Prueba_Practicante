<?php

//INICIAR SESION

class Login extends Controlador
{
	
	function __construct()
	{
		
		//error_reporting(0);	
		session_start();	
	
		if(isset($_POST['action']) && !empty($_POST['action'])) 
		{
    	
    	$action = $_POST['action'];
    		switch($action) 
    		{	
        		case 'autenticar' : $this->iniciar();break;
    		}

    		die();
		}
		
		if (isset($_SESSION['usuario'])) 
		{
			header("Location: ".constant('URL')."inicio");
		}

		
	}

	function mostrarVista()
	{
		//Variable con el nombre de la VISTA
		$nombre = "login/index";
		//Nombre del archivo 
		$fileName = "views/" . $nombre . ".php";
		require_once($fileName);
	}

	function iniciar()
	{
		
		$modelo = $this->cargarModelo("login_model");
		
		$modelo->usuario=$_POST["txtUser"];
		$modelo->clave=$_POST["txtPass"];

			
		$fila=$modelo->buscar();
		//Esto me devolvera los resultados de una fila.
		//var_dump($fila);

		if ($fila>0) 
		{
			//INICIA SESION
			//session_start();
			$_SESSION['usuario']=$_POST["txtUser"];
			$_SESSION['rol']= $fila['id_rol'];
			
			echo json_encode(true);
		}
		else
		{
			//ERROR AL INICIAR SESION
			echo json_encode(false);
		}
				
	}

}

?>