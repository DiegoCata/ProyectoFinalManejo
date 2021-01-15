<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Basic PasswordBox - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.7/themes/bootstrap/easyui.css">
    <script type="text/javascript" src="jquery-easyui-1.9.7/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.9.7/jquery.easyui.min.js"></script>
</head>
<body>
<div style="  width:100%;text-align:center ;color:black; padding: 25px;font-size: 25px;font-weight: bold;">
    <h1>¡Bienvenido, registra tu cuenta!</h1>
</div>
    <div style="margin:20px 0;"></div>
    <div class="easyui-panel" title="" style="width:70%;max-width:400px;padding:30px 60px;">
        <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px" action="models/acceso.php" >
         <input type="hidden" id="op" name="op" value="crearCuenta">  
            <h3>Información de Usuario</h3>

            <div style="margin-bottom:10px">
                <input name="USU_NOM" class="easyui-textbox" required="true" label="Nombre:" style="width:150%">
            </div>  
            <div style="margin-bottom:10px">
                <input name="USU_APE" class="easyui-textbox" required="true" label="Apellido:" style="width:150%">
            </div>
            <div style="margin-bottom:10px">
                <input name="USU_COR" class="easyui-textbox" required="true" label="Correo:" style="width:150%">
            </div>
            <div style="margin-bottom:20px">
            <input name="USU_CLA" class="easyui-passwordbox" required="true" label="Clave:" prompt="Password" iconWidth="28" style="width:150%;height:34px;padding:10px">
        </div>
        <div style="text-align:center" id="dlg-buttons">
        <a href="#" class="easyui-linkbutton" onclick="guardarCuenta()" style="width:80px">Registrar</a>
    </div>
</div>
<br>
    
<br>
<div style="  width:100%;text-align:center;">

    <a href="index.php?action=inicio">Volver a la tienda</a>
    </div>
    
    <script type="text/javascript">
        function guardarCuenta(){
                $('#fm').form('submit');
                $('#fm').form({
                    success: function(data){
                       $("#dg").datagrid("reload");
                       $('#dlg').dialog('close');

                        console.log(data);
                        if(data.indexOf("Error")!==-1)
                        $.messager.alert('Error', data,'error');
                        else
                        $.messager.alert(data);
                    }

                });
                document.getElementById("fm").reset();
            }
    </script>
</body>

</html>