<?php
     $servername="localhost";
     $username="root";
     $password="";
     $dbname="universidad";
     $con = mysqli_connect($servername, $username, $password,$dbname);
     if( mysqli_connect_errno() ){
         echo "Fallo al conecatar";
         exit();
     }else{
         $usuario = $_POST['Nombre'];
         $correo =  $_POST['email'];
         $cont = $_POST['CNT'];
         mysqli_set_charset($con, "utf8");
         $insertar = "INSERT INTO prueba (NOM_USU, CON_USU, CORR_USU) VALUES ('$usuario',' $cont','$correo')";
         $resul = mysqli_query($con, $insertar); 
         if( $resul ==  false ){
            //echo "Eror no se pudo registrarse";
            header( "Location:index.html" );
         }else{
            //echo "Adelante!!!";
            session_start();
            $_SESSION['usuarioss'] = $_POST['Nombre'];
            header("Location: index2.php");  
         }  
     }
?>