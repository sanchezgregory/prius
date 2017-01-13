<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "conexion.php";
$db = conectaDB();

$usuario= $_POST["usuario"];
$password= $_POST["password"];
// -------------------------------------- CONSULTA PREPARADA
$consulta = "SELECT count(id),usuario,password,nivel,id_persona FROM usuario where usuario = :Xx and password = :Yy";
$result = $db->prepare($consulta);
$result->execute(array(':Xx' => $usuario, ':Yy' => $password));


if (!$result) {
    print "  <p>Error en la consulta.</p>\n";
    
} else {
    foreach ($result as $valor) {
        if ($valor[0]>0) {
        	$_SESSION["aut"]='si';
			$_SESSION["usuario"]=$valor[usuario];
			$_SESSION["idp"]=$valor[id_persona];
			header("Location: admin/index.php");
        } else {
        	header("Location: index.html");
    	}
	}
}

$db = null;
	
?>	