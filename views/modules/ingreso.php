<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Basic PasswordBox - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.7/themes/bootstrap/easyui.css">
    <script type="text/javascript" src="jquery-easyui-1.9.7/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.9.7/jquery.easyui.min.js"></script>
    <STYLE type="text/css"> </STYLE>
</head>
<body>
<form id="fm" method="post" novalidate style="margin:0;padding:20px 460px" action="models/acceso.php" >
<input type="hidden" id="op" name="op" value="ingresarCuenta">
    <div id="dlg" class="easyui-panel" style="width:400px;padding:50px 60px">
        <div style="margin-bottom:20px;text-align: center;">
            <h1>Ingrese su correo</h1>
        </div>

        <div style="margin-bottom:20px">
            <input name="USU_COR" class="easyui-textbox" required="true" prompt="Correo electrónico" style="width:100%">
        </div>
        <div style="margin-bottom:20px">
            <input name="USU_CLA" class="easyui-passwordbox" required="true" prompt="Password" iconWidth="28" style="width:100%;height:34px;padding:10px">
        </div>
        <div style="text-align:center" id="dlg-buscar">
            <button type = "submit" name = "buscar" class="easyui-linkbutton" style="width:80px">Ingresar</button>
        </div>

    </div>
</form>

    <div style="  width:100%;text-align:center;">
        <a href="index.php?action=registro">¿Olvido su contraseña?</a>
    <br></br>
        <a href="index.php?action=registro">Crear cuenta</a>
    <br></br>
        <a href="index.php?action=inicio">Volver a la tienda</a>
    </div>

</body>
</html>