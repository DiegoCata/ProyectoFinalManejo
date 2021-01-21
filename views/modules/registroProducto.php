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
    <form id="fm" method="post" novalidate style="margin:0;padding:20px 460px" action="models/acceso.php" enctype= "multipart/form-data">
        <input type="hidden" id="op" name="op" value="crearProducto">
    <div id="dlg" class="easyui-panel" style="width:400px;padding:50px 60px">
        <div style="margin-bottom:20px;text-align: center;"> 
            <h3>Registro Producto</h3>
        </div>
            <div style="margin-bottom:10px">
                <input name="COD_PRO" class="easyui-textbox" required="true" label="Codigo:" style="width:130%">
            </div>  
            <div style="margin-bottom:10px">
                <input name="NOM_PRO" class="easyui-textbox" required="true" label="Nombre:" style="width:130%">
            </div>
            <div style="margin-bottom:10px">
                <input type = "number" class="easyui-textbox" name="PRE_PRO" required="true" label="Precio:" style="width:130%">
            </div>
            <div style="margin-bottom:20px">
                <input type = "number" class="easyui-textbox" name="CAN_PRO"  required="true" label="Cantidad:" style="width:130%;height:34px;padding:10px">
            </div>

            <div class="photo">
                <label for="foto">Foto</label>
                    <div class="prevPhoto">
                        <span class = "Foto del producto"></span>
                    <label for = "Foto"></label>
                    </div>
                <div class="upImagen">
                    
                    <input type = "file" name = "FOTO_PRO" id = "FOTO_PRO" required="true">
                    <div id = "form_alert"></div>
                </div>
                
            </div>
            <div style="text-align:center" id="dlg-buttons">
                <a href="#" class="easyui-linkbutton" onclick = "guardarProducto()" style="width:80px">Registrar</a>
            </div>
    </form>
</div>
<br> 
<br>
    <div style="  width:100%;text-align:center;">
        <a href="index.php?action=inicio">Volver a la tienda</a>
    </div>
    
    <script type="text/javascript">
        function guardarProducto(){
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