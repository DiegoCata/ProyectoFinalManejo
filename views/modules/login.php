<?php 

	session_start();
	require_once "models/conexion.php";

	$conn=conexion();

		$correo=$_POST['USU_COR'];
		$clave=sha1($_POST['USU_CLA']);

		$sql="SELECT * from registro where USU_COR='$correo' and USU_CLA='$clave'";
		$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result) > 0){
			$_SESSION['USU_CLA']=$correo;
			echo 1;
		

		}else{
			echo 0;
		}
 ?>