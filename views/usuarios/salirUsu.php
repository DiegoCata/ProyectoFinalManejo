<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.7/themes/bootstrap/easyui.css">
    <script type="text/javascript" src="jquery-easyui-1.9.7/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.9.7/jquery.easyui.min.js"></script>
    <STYLE type="text/css"> </STYLE>
    <title>Ingreso</title>
</head>
<body>
    
</body>
</html>

<?php
    session_start();
    session_unset();
    session_destroy();
    header("location: index.php");
?>