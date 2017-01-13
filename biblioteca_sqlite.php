<?php 

	function conectaDb() {

		global $dbDb;

		try {
			$db = new PDO("SQLITE" . $dbDb);
			return $db;
		} catch (PDOException $e) {
			cabecera ("Error grave ", MENU_PRINCIPAL);
			print "<p>Error, No puede conectarse con la base de datos. </p>";
			print "<p>Error ". $e->getMessage()."</p>";
			pie();
			exit;
		}

	}

 ?>