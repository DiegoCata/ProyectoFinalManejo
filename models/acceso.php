<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET');
header('Access-Control-Allow-Headers: token, Content-Type');
header('Access-Control-Max-Age: 1728000');
header('Content-Length: 0');
header('Content-Type: application/json');
include 'conexion.php';
$op=$_POST['op'];
if($op===null)
{
    echo "Error";
}
else{
switch($op)
{
        case 'crearCuenta':
            header('Content-Type: application/json');
            $nombre=$_POST['USU_NOM'];
            $apellido=$_POST['USU_APE'];
            $correo=$_POST['USU_COR'];
            $clave=$_POST['USU_CLA'];
            $clave_cifrada=password_hash($clave, PASSWORD_DEFAULT);
            $sqlInsert="INSERT INTO registro(USU_NOM,USU_APE,USU_COR,USU_CLA) 
                        VALUES ('$nombre','$apellido','$correo','$clave_cifrada')";
            $sqlInsertUsu="INSERT INTO usuarios(USU_COR,USU_CLA) 
            VALUES ('$correo','$clave_cifrada')";
            if($mysqli->query($sqlInsert)===TRUE && $mysqli->query($sqlInsertUsu)===TRUE)
            {
            echo json_encode("Se guardo correctamente");
            }
            else
            {
            echo "Error...".$sqlInsert."<br>".$mysqli->error;
            }
            $mysqli->close();
        break;


}
}

?>
