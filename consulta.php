<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "conexion.php";
$db = conectaDB();

$usuario = "juan";
$clave = "qwe";
// -------------------------------------- CONSULTA PREPARADA
$consulta = "SELECT * FROM usuario where usuario = :Xx and password = :Yy";
print "<p>Consulta: $consulta</p>\n";
$result = $db->prepare($consulta);
$result->execute(array(':Xx' => $usuario, ':Yy' => $clave));
$datos=$result->fetch();
print $datos[1];
//echo "Usuario: ".$result[usuario];

/*if (!$result) {
    print "  <p>Error en la consulta.</p>\n";
} else {
    foreach ($result as $valor) {
        print "  <p>$valor[usuario] $valor[password]</p>\n";
    }
}*/

$db = null;

 ?>