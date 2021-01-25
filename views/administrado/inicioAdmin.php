<?php

	require_once ("models/conexion.php");
	$query_empresa=mysqli_query($conn,"select * from administrador where NOM_USU='Day20'");
	$row=mysqli_fetch_array($query_empresa);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Basic PasswordBox - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.7/themes/bootstrap/easyui.css">
    <script type="text/javascript" src="jquery-easyui-1.9.7/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.9.7/jquery.easyui.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  	
	  <link rel=icon href='img/vida.png' sizes="32x32" type="image/png">
  </head>
  <?php
    session_start();
    if( !isset($_SESSION['usu'] ) ){
      header("Location: index.html");
    }
  ?>
<body>
<h1 style="text-align:center" class="animate__animated animate__backInLeft">Bienvenida a tu cuenta</h1>
<h1 style="text-align:center" class="animate__animated animate__backInLeft">
<?php echo $_SESSION['usu']  ?>
</h1>
	<div class="container">
    <div class="row">
    <form id="ff" method="post" novalidate style="margin:0;padding:20px 100px" action="http://localhost/proyecto/models/acceso.php" enctype= "multipart/form-data">
      <input type="hidden" id="op" name="op" value="modificarPerfil">
        <div id = "dlg" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 toppad" >
          <div class="panel panel-success"><br>
              <h2 class="panel-title"><center><font size="5">PERFIL</font></center></h2>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> 
				          <div id="USU_FOTO">
					          <img class="img-responsive" src="<?php echo $row['USU_FOTO'];?>" alt="Fotografía">
				          </div>
				          <br>				
					        <div class="row">
  						      <div class="col-md-12">
							        <div class="form-group">
								        <input class='filestyle' data-buttonText="Logo" type="file" name="USU_FOTO" id="USU_FOTO" onchange="upload_image();">
							        </div>
						        </div>
					        </div>
				        </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-condensed">
                    <tbody>
                      <tr>
                        <td class='col-md-3'>Nombre:</td>
                        <td><div style="margin-bottom:10px">
                          <input type="text" name="USU_NOM" class="easyui-textbox" value="<?php echo $row['USU_NOM']?>" required="true" style="width:100%">
                        </div></td>
                      </tr>
                      <tr>
                        <td class='col-md-3'>Apellido:</td>
                        <td><div style="margin-bottom:10px">
                          <input type="text" name="USU_APE" class="easyui-textbox" value="<?php echo $row['USU_APE']?>" required="true" style="width:100%">
                        </div></td>
                      </tr>
                      <tr>
                        <td class='col-md-3'>Teléfono:</td>
                        <td><div style="margin-bottom:10px">
                          <input type="text" name="USU_TEL" class="easyui-textbox" value="<?php echo $row['USU_TEL']?>" required="true" style="width:100%">
                        </div></td>
                      </tr>
                      <tr>
                        <td class='col-md-3'>Nombre de usuario:</td>
                        <td><div style="margin-bottom:10px">
                          <input type="text" name="NOM_USU" class="easyui-textbox" value="<?php echo $row['NOM_USU']?>" required="true" style="width:100%">
                        </div></td>
                      </tr>
                      <tr>
                        <td class='col-md-3'>E-mail:</td>
                        <td><div style="margin-bottom:10px">
                          <input type="text" name="USU_COR" class="easyui-textbox" value="<?php echo $row['USU_COR']?>" required="true" style="width:100%">
                        </div></td>
                      </tr>
                      <tr>
                        <td class='col-md-3'>Clave:</td>
                        <td><div style="margin-bottom:10px">
                          <input type="text" name="USU_CLA" class="easyui-passwordbox" value="<?php echo $row['USU_CLA']?>" required="true" style="width:100%">
                        </div></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
				<div class='col-md-12' id="resultados"></div>
              </div>
            </div>
            <div id="dlg-buttons" class="panel-footer text-center">
              <a href="#" class="easyui-linkbutton" onclick="submitFormUpdate()" style="width:90px">Guardar</a>   
            </div>
          </div>
        </div>
        
		</form>
      </div>
  </body>
</html>
  <script type="text/javascript">
        function submitFormUpdate() {
            $('#ff').form('submit');
            $('#ff').form({
                success: function(data) {
                    $("#dg").datagrid("reload");
                    $.messager.alert(data);
                    $('#dlgm').dialog('close');
                } 
            });
        }
  </script>


<script type="text/javascript"> </script>

<script>
		function upload_image(){	
				var inputFileImage = document.getElementById("USU_FOTO");
				var file = inputFileImage.files[0];
				if( (typeof file === "object") && (file !== null) )
				{
					$("#USU_FOTO").text('Cargando...');	
					var data = new FormData();
					data.append('USU_FOTO',file);
					
					$.ajax({
						url: "perfilAdmin/editarPerfil.php",        // Url to which the request is send
						type: "POST",             // Type of request to be send, called as method
						data: data, 			  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
						contentType: false,       // The content type used when sending data to the server.
						cache: false,             // To unable request pages to be cached
						processData:false,        // To send DOMDocument or non processed data file it is set to false
						success: function(data)   // A function to be called if request succeeds
						{
							$("#USU_FOTO").html(data);
							
						}
					});	
				}
				
				
			}
    </script>
