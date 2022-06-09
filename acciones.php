<?php
include("modelo.php");
$obj = new modelo();
switch($_POST['action']){

	case 'listarProgramacion':
	
		$obj->listarProgramacion($_POST['idDia'],$_POST['idCiudad']);
	break;
	case 'listarProgramacionMovil':
		$obj->listarProgramacionMovil($_POST['idDia'],$_POST['idCiudad']);
	break;
	case 'mostrarHeroPrincipal':
		$obj->mostrarHeroPrincipal($_POST['idCiudad']);
	break;
	case 'mostrarStreaming':
		$obj->mostrarStreaming($_POST['idCiudad']);
	break;
	case 'verVideoPop':
		$obj->verVideoPop($_POST['idPopChart']);
	break;
	case 'verTituloVideoPop':
		$obj->verTituloVideoPop($_POST['idPopChart']);
	break;
	
	
	
	
}