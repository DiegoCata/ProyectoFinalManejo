<?php
error_reporting(0);
session_start();
include 'acceso.php';
if ($conn->connect_errno)
{
       echo "Fallo al conectar: (" . $conn->connect_errno . ") " . $conn->connect_error;
       exit();
}
if ($_POST["USU_COR"] == null || $_POST["USU_CLA"] == null)
{
    echo "<span>Por favor complete todos los campos.</span>";
}
else
{
    $correo = mysqli_real_escape_string($_POST["USU_COR"], $conn);
    $clave = mysqli_real_escape_string($_POST["USU_CLA"], $con);
    $consulta = mysqli_query($conn, "SELECT USU_COR, USU_CLA FROM registro WHERE USU_COR = "$correo" AND USU_CLA = "$clave"");
    if (mysqli_num_rows($consulta) > 0)
    {
        $_SESSION["USU_COR"] = $correo;
        echo "<script>location.href = "inicio.php"</script>";
    }
    else
    {
        echo "<span>El correo y/o clave son incorrectas, vuelva a intentarlo.</span>";
    }
}
?>