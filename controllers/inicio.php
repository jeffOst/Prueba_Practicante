<?php

class Inicio extends Controlador
{
	
	function __construct()
	{
		session_start();
	}

	function mostrarVista()
	{
		require_once ("views/inicio/index.php");
	}

}

?>