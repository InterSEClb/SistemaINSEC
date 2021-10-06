<?php  
	$contrasena = 'CONTRASEÑA BASE DE DATOS';
	$usuario = 'USUARIO BASE DE DATOS';
	$nombrebd= 'BASE DE DATOS';

	try {
		$bd = new PDO(
			'mysql:host=SERVIDOR;
			dbname='.$nombrebd,
			$usuario,
			$contrasena,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
	} catch (Exception $e) {
		echo "Error de conexión ".$e->getMessage();
	}

?>