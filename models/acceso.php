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
            $clave_cifrada=hash('sha512', $clave);
            $sqlInsert="INSERT INTO registro(USU_NOM,USU_APE,USU_COR,USU_CLA) 
                        VALUES ('$nombre','$apellido','$correo','$clave_cifrada')";
            if($mysqli->query($sqlInsert)===TRUE)
            {
            echo json_encode("Se guardo correctamente");
            }
            else
            {
            echo "Error...".$sqlInsert."<br>".$mysqli->error;
            }
            $mysqli->close();
        break;
        case 'ingresarCuenta':
            header('Content-Type: application/json');
            session_start();
            $correo = $_POST['USU_COR'];
            $clave = $_POST['USU_CLA'];
            $clave_cifrada=hash('sha512', $clave);
            $query= mysqli_query($conn, "SELECT * FROM registro WHERE USU_COR = '".$correo."' AND USU_CLA = '".$clave_cifrada."'");
            $nf = mysqli_num_rows($query);
            if ($nf === 1) {
                header("location: ../index.php?action=inicio");
            }else if ($nf === 0) {
                header("location: ../index.php?action=ingreso");
            }
        break;
        case 'crearProducto':
            header('Content-Type: application/json');
            $codigo=$_POST['COD_PRO'];
            $nombre=$_POST['NOM_PRO'];
            $precio=$_POST['PRE_PRO'];
            $cantidad=$_POST['CAN_PRO'];
            $foto=addslashes(file_get_contents($_FILES['FOTO_PRO']['tmp_name']));
            $sqlInsert="INSERT INTO registroProductos(COD_PRO,NOM_PRO,PRE_PRO,CAN_PRO,FOTO_PRO) 
                        VALUES ('$codigo','$nombre','$precio','$cantidad','$foto')";
            if($mysqli->query($sqlInsert)===TRUE)
            {
            echo json_encode("Se guardo correctamente");
            }
            else
            {
            echo "Error...".$sqlInsert."<br>".$mysqli->error;
            }
            $mysqli->close();
        break;

        case 'ingresarCuentaAdmin':
            header('Content-Type: application/json');
            session_start();
            $correo = $_POST['USU_COR'];
            $clave = $_POST['USU_CLA'];
            $clave_cifrada=hash('sha512', $clave);
            $query= mysqli_query($conn, "SELECT * FROM usuarios WHERE USU_COR = '".$correo."' AND USU_CLA = '".$clave."'");
            $nf = mysqli_num_rows($query);
            if ($nf === 1) {
                header("location: ../indexAdmin.php?action=inicioAdmin");
            }else if ($nf === 0) {
                header("location: ../index.php?action=ingreso");
            }
        break;

}
}

?>
