<?php  
	session_start();
	if (!isset($_SESSION['codigo'])) {
		header('Location: ../login.php');
	}elseif(isset($_SESSION['codigo'])){
		include '../model/conn.php';
		$sentencia = $bd->query("SELECT * FROM usuarios;");
		$usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
		//print_r($alumnos);
	}else{
		echo "Error en el sistema";
	}
		$session_id = $_SESSION['codigo'];
		$session_query = $bd->query("select * from usuarios where codigo_id = '$session_id'");
		$user_row = $session_query->fetch();
		$codigoUS = $user_row['codigo_id'];

		$meta_sistema = $bd->query("select * from sismeta");
		$sis_row = $meta_sistema->fetch();
		$nombreSis = $sis_row['nombre_sistema'];
		$verSis = $sis_row['version'];

        $totalUS = $bd->query("select count(1) from usuarios");

		$consulta = "SELECT * FROM usuarios";
		$resultado = $bd->prepare($consulta);
		$resultado->execute();
		$usuarios=$resultado->fetchAll(PDO::FETCH_ASSOC)

	
?>