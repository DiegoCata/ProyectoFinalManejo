<?php
     $servername="localhost";
     $username="root";
     $password="";
     $dbname="universidad2";
     $con = mysqli_connect($servername, $username, $password,$dbname);
     if( mysqli_connect_errno() ){
         echo "Fallo al conecatar";
         exit();
     }else{
         $usuario = $_POST['Nombre'];
         $correo =  $_POST['email'];
         $cont = $_POST['CNT'];
         mysqli_set_charset($con, "utf8");
         $insertar = "INSERT INTO usuarios (NOM_USU, CORR_USU ,CON_USU) VALUES ('$usuario',' $correo','$cont')";
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