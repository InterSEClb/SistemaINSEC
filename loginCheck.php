<?php 
	session_start();
	include_once 'model/conn.php';
	$usuario = $_POST['username'];
	$contrasena = $_POST['password'];

    $pass = md5($contrasena);
	$sentencia = $bd->prepare('select * from usuarios where 
								codigo_id = ? and password = ?;');
	$sentencia->execute([$usuario, $pass]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($datos);

	if ($datos === FALSE) {
		header('Location: login.php');
	}elseif($sentencia->rowCount() == 1){
		$_SESSION['codigo'] = $datos->codigo_id;
		header('Location: dashboard/index.php');
	}
?>