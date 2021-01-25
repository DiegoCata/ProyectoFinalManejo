<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">


    <meta charset="UTF-8">
    <title>Basic PasswordBox - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.7/themes/bootstrap/easyui.css">
    <script type="text/javascript" src="jquery-easyui-1.9.7/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.9.7/jquery.easyui.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<a style="  width:100%;text-align:center ;color:red; padding: 50px;font-size: 15px;font-weight: bold;"><h1>Listado de productos de "Camari"</h1></a>
<form id="fm" method="post" novalidate style="margin:0;padding:20px 160px" >
<div id="dlg" class="easyui-panel" style="width:900px;padding:50px 60px">   
  <div class="todo">
    <div id="contenido">
      <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
        <thead>
          <th>COD_PRO</th>
          <th>NOM_PRO</th>
          <th>PRE_PRO</th>
          <th>CAN_PRO</th>
          <th>FOTO_PRO</th> 
        </thead>

        <?php
        $servername="localhost:33065";
        $username="root";
        $password="";
        $dbname="camaribd";
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
              echo "<td><a href='indexAdmin.php?action=modificarProducto'> <button type='button' class='btn btn-success'>Modificar</button> </a></td>";
                echo "</tr>";
          }
        ?>
      </table>
    </div>
    
  </div>
  </form>
</body>
</html>