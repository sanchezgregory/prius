<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

	require_once "conexion.php";
	$db = conectaDB();

	$usuario = "ooo";
	$password = "www";
	$nivel = "s";
	$id_persona= "3";
	echo $usuario;

	try {

		// ---- CON PARAMETROS----

		/*$consulta = "insert into usuario (usuario,password,nivel,id_persona)values(:Usuario,:Password,:Nivel,:Id)";
		$result = $db->prepare($consulta);
		$result->execute(array("Usuario"=>$usuario,"Password"=>$password,"Nivel"=>$nivel,"Id"=>$id_persona));*/

		// ----- CON SIGNOS DE INTERROGACION ----
		$consulta = "insert into usuario (usuario,password,nivel,id_persona) values (?,?,?,?)";
		$result = $db->prepare($consulta);
		$result->execute(array('ppp','yoyoyo','4','2'));

	} catch (PDOException $e) {
		if ($e->getCode() == 1062) {
			echo "1062";
		} else {
				throw $e;
				echo "error";
		}

	}
	

 ?>