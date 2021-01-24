<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="todo">
    <div id="contenido">
      <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
        <thead>
          <th>COD_PRO</th>
          <th>NOM_PRO</th>
          <th>PRE_PRO</th>
          <th>CAN_PRO</th>
          <th>FOTO_PRO</th>
          <th> <a href="indexAdmin.php?action=registroProductos"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
        </thead>

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
          
          $sentecia="SELECT * FROM registroproductos";
          $resultado= $conn->query($sentecia) or die (mysqli_error($conn));
          while($fila=$resultado->fetch_assoc())
          {
            echo "<tr>";
              echo "<td>"; echo $fila['COD_PRO']; echo "</td>";
              echo "<td>"; echo $fila['NOM_PRO']; echo "</td>";
              echo "<td>"; echo $fila['PRE_PRO']; echo "</td>";
              echo "<td>"; echo $fila['CAN_PRO']; echo "</td>";
              echo "<td>"; echo "<img src='".$fila['FOTO_PRO']."' width='50' >"; echo "</td>";
              echo "<td><a href='modif_prod1.php?COD_PRO=".$fila['COD_PRO']."'> <button type='button' class='btn btn-success'>Modificar</button> </a></td>";
              echo " <td><a href='eliminar_prod.php?COD_PRO=".$fila['COD_PRO']."'> <button type='button' class='btn btn-danger'>Eliminar</button> </a></td>";
          echo "</tr>";
          }
        ?>
      </table>
    </div>
  </div>
</body>
</html>