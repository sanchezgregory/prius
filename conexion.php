<?php
error_reporting(E_ALL);
ini_set("display_errors", 1); 

define ("MYSQL", 	"MYSQL"); 	//BASE DE DATOS MYSQL
define ("SQLITE",	"SQLITE");

$dbMotor = MYSQL;

if ($dbMotor == MYSQL) {
	require_once "biblioteca_mysql.php";
} elseif ($dbMotor == SQLITE) {
	require_once "biblioteca_sqlite.php";
}
?>