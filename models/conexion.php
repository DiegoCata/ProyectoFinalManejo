<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="universidad";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    $mysqli = new mysqli($servername,$username,$password,$dbname);
    if(!$mysqli)
    {
        die("Error en la conexion".mysqli_connect_error());
    }

?>
