<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Basic PasswordBox - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.7/themes/bootstrap/easyui.css">
    <script type="text/javascript" src="jquery-easyui-1.9.7/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.9.7/jquery.easyui.min.js"></script>
    <STYLE type="text/css">
  BODY {text-align: center}
 </STYLE>
<BODY>
</head>
<body>
    <div id="dlg" class="easyui-panel" style="width:400px;padding:50px 60px">
        <div style="margin-bottom:20px;text-align: center;">
            <h1>Ingrese su correo</h1>
        </div>
        <form action="" method="POST">
        <div style="margin-bottom:20px">
                <input name="USU_COR" class="easyui-textbox" required="true" prompt="Correo electrónico" style="width:100%">
            </div>
            <div style="margin-bottom:20px">
            <input name="USU_CLA" class="easyui-passwordbox" required="true" prompt="Password" iconWidth="28" style="width:100%;height:34px;padding:10px">
        </div>
            <div class="alert" style="margin-bottom:20px;text-align: center;">
                
            </div>
            <div style="text-align: center;">
                <input value="Ingresar" id="ingresar" type="submit" style="width:120px;height:34px;padding:10px">
            </div>
        </form>
        
    </div>
    <div style="text-align: 30%;">
        <a href="index.php?action=registro">¿Olvido su contraseña?</a>
    <br></br>
    <a href="index.php?action=registro">Crear cuenta</a>
    <br></br>
    <a href="index.php?action=inicio">Volver a la tienda</a>
    </div>
        


</body>

</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#ingresar').click(function(){
			if($('#USU_COR').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#USU_CLA').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="USU_COR=" + $('#USU_COR').val() + 
					"&USU_CLA=" + $('#USU_CLA').val();

					$.ajax({
						type:"POST",
						url:"login.php",
						data:cadena,
						success:function(r){

							if(r==1){
								alert('Bienvenido '+ $('#USU_COR').val()+' Al Sistema Gracias Por Acceder');
								window.location="inicio.php";
							}else{
								alertify.alert("Fallo al entrar :(");
							}
						}
					});
		});	
	});
    </script>