<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Basic PasswordBox - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.7/themes/bootstrap/easyui.css">
    <script type="text/javascript" src="jquery-easyui-1.9.7/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.9.7/jquery.easyui.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    
        <form id="ff" method="post" novalidate style="margin:0;padding:20px 460px" action="http://localhost/proyecto/models/acceso.php" enctype= "multipart/form-data">
        <input type="hidden" id="op" name="op" value="modificarProducto">
    <div id="dlg" class="easyui-panel" style="width:400px;padding:50px 60px">
        <div style="margin-bottom:20px;text-align: center;"> 
            <h3>Modificar Producto</h3>
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
    <div id="dlg-buttons">
        <a href="#" class="easyui-linkbutton" onclick="submitFormUpdate()" style="width:90px">Guardar</a>
        
    </div>
    </form>

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


        function destroyUser() {
            var row = $('#dg').datagrid('getSelected');
            if (row) {
                $.messager.confirm('Confirm', '¿Desea eliminar al estudiante?', function(r) {
                    if (r) {
                        $.post('models/acceso.php', {
                            op: "deleteAlumno",
                            EST_CEDULA: row["EST_CEDULA"]
                        }, function(result) {
                            if (result.success) {
                                $('#dg').datagrid('reload'); // reload the user data
                            } else {
                                $.messager.show({ // show error message
                                    title: 'Se borró correctamente',
                                    msg: result.errorMsg
                                });
                            }
                            $("#dg").datagrid("reload");
                        }, 'json');
                    }
                });
            }
        }
    </script>
</body>

</html>
      