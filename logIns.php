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
         $usuario = $_POST['Usuario'];
         $cont = $_POST['Password'];
         mysqli_set_charset($con, "utf8");
         $consulta = "SELECT * FROM usuarios WHERE NOM_USU= '$usuario' AND CON_USU ='$cont' ";
         $resul = mysqli_query($con, $consulta); 
         if( $fila=mysqli_fetch_row($resul) ){
            //echo "Adelante!!!";
            session_start();
            $_SESSION['usuarioss'] = $_POST['Usuario'];
            header("Location: index2.php");
         }else{
            //echo "Eror el user no existe";
            header( "Location:index.html" );
         }  
     }
?>