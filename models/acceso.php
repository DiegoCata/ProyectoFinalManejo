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
            $usuario=$_POST['NOM_USU'];
            $nombre=$_POST['USU_NOM'];
            $apellido=$_POST['USU_APE'];
            $correo=$_POST['USU_COR'];
            $clave=$_POST['USU_CLA'];
            $clave_cifrada=hash('sha512', $clave);
            $sqlInsert="INSERT INTO usuarios(NOM_USU,USU_NOM,USU_APE,USU_COR,USU_CLA) 
                        VALUES ('$usuario','$nombre','$apellido','$correo','$clave_cifrada')";
            if($mysqli->query($sqlInsert)===TRUE)
            {
            session_start();
            $_SESSION['usu'] = $_POST['NOM_USU'];
            header("Location: ../index.php?action=inicio");  
            echo json_encode("Se guardo correctamente");
            }
            else
            {
            header( "Location:index.html" );
            }
            $mysqli->close();
            
        break;
     
        case 'ingresarCuenta':
            header('Content-Type: application/json');
            session_start();
            $usuario = $_POST['NOM_USU'];
            $clave = $_POST['USU_CLA'];
            $clave_cifrada=hash('sha512', $clave);
            $query= mysqli_query($conn, "SELECT * FROM usuarios WHERE NOM_USU = '".$usuario."' AND USU_CLA = '".$clave_cifrada."'");
            $nf = mysqli_num_rows($query);
            if ($nf === 1) {
                session_start();
                $_SESSION['usu'] = $_POST['NOM_USU'];
                header("location: ../index.php?action=inicio");
            }else if ($nf === 0) {
                header("location: ../index.html");
            }
        break;

        case 'crearProducto':
            header('Content-Type: application/json');
            $codigo=$_POST['COD_PRO'];
            $nombre=$_POST['NOM_PRO'];
            $precio=$_POST['PRE_PRO'];
            $cantidad=$_POST['CAN_PRO'];
            $archivo=$_FILES['FOTO_PRO']['name'];
            $foto=$_FILES['FOTO_PRO']['tmp_name'];
            $ruta="imagenes/dos/".$archivo;

            $sqlInsert="INSERT INTO registroProductos(COD_PRO,NOM_PRO,PRE_PRO,CAN_PRO,FOTO_PRO) 
                        VALUES ('$codigo','$nombre','$precio','$cantidad','$ruta')";
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
            $usuario = $_POST['NOM_USU'];
            $clave = $_POST['USU_CLA'];
            $clave_cifrada=hash('sha512', $clave);
            $query= mysqli_query($conn, "SELECT * FROM administrador WHERE NOM_USU = '".$usuario."' AND USU_CLA = '".$clave."'");
            $nf = mysqli_num_rows($query);
            if ($nf === 1) {
                session_start();
                $_SESSION['usu'] = $_POST['NOM_USU'];
                header("location: ../indexAdmin.php?action=inicioAdmin");
            }else if ($nf === 0) {
                header("location: ../loginAdmin.html");
            }
        
        break;

        case 'modificarProducto':
            header('Content-Type: application/json');
            $codigo=$_POST['COD_PRO'];
            $nombre=$_POST['NOM_PRO'];
            $precio=$_POST['PRE_PRO'];
            $cantidad=$_POST['CAN_PRO'];
            $archivo=$_FILES['FOTO_PRO']['name'];
            $foto=$_FILES['FOTO_PRO']['tmp_name'];
            $ruta="imagenes/dos/".$archivo;
            $sqlUpdate="UPDATE registroproductos SET NOM_PRO = '$nombre',PRE_PRO='$precio',CAN_PRO='$cantidad',
            FOTO_PRO='$ruta' WHERE COD_PRO = '$codigo'";
            if($mysqli->query($sqlUpdate)===TRUE)
            {
            echo json_encode("Se actualizo ");
            }
            else
            {
            echo "Error:".$sqlUpdate."<br>".$mysqli->error;
            }
            $mysqli->close();
        break;
        case 'modificarPerfil':
            header('Content-Type: application/json');
            $nombre=$_POST['USU_NOM'];
            $apellido=$_POST['USU_APE'];
            $archivo=$_FILES['FOTO_PRO']['name'];
            $foto=$_FILES['FOTO_PRO']['tmp_name'];
            $ruta="imagenes/dos/".$archivo;
            $correo=$_POST['USU_COR'];
            $clave=$_POST['USU_CLA'];
            $sqlUpdate="UPDATE usuarios SET USU_NOM = '$nombre',USU_APE='$apellido',USU_FOTO='$ruta',
            USU_COR='$correo' WHERE USU_ID = '1'";
            if($mysqli->query($sqlUpdate)===TRUE)
            {
            echo json_encode("Se actualizo ");
            }
            else
            {
            echo "Error:".$sqlUpdate."<br>".$mysqli->error;
            }
            $mysqli->close();
        break;

}
}

?>