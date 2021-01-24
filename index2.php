<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Web</title>
    <link href="//cdn.shopify.com/s/files/1/0465/6529/4235/t/2/assets/timber.scss.css?v=5528885854878926503" rel="stylesheet" type="text/css" media="all">
    <link href="//cdn.shopify.com/s/files/1/0465/6529/4235/t/2/assets/theme.scss.css?v=917445267727491623" rel="stylesheet" type="text/css" media="all">
</head>
    <body>
     </body>
</html>
<?php
    require_once "controllers/controller.php";
    require_once "models/model.php";
    $mvc = new MvcController();
    $mvc -> plantilla();

?>