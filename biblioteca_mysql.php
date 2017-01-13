<?php 
function conectaDb()
{
	define ("MYSQL_USUARIO","root");
	define ("MYSQL_PASSWORD","123");
    try {
        $db = new PDO('mysql:host=localhost;dbname=prius', MYSQL_USUARIO, MYSQL_PASSWORD);
        $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        $db->exec("set names utf8mb4");
        return($db);
    } catch(PDOException $e) {
        print "  <p>Error: No puede conectarse con la base de datos.</p>\n\n";
        print "  <p>Error: " . $e->getMessage() . "</p>\n";
        pie();
        exit();
    }
}
 ?>