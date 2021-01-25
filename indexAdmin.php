<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camari</title>
    <link rel="icon" type="text/jpg" href="https://cdn.icon-icons.com/icons2/1948/PNG/512/free-30-instagram-stories-icons07_122554.png">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link href="//cdn.shopify.com/s/files/1/0465/6529/4235/t/2/assets/timber.scss.css?v=5528885854878926503" rel="stylesheet" type="text/css" media="all">
    <link href="//cdn.shopify.com/s/files/1/0465/6529/4235/t/2/assets/theme.scss.css?v=917445267727491623" rel="stylesheet" type="text/css" media="all">


</head>

</html>
<?php
require_once "controllers/adminController.php";
require_once "models/modelAdmin.php";
$mvc = new adminController();
$mvc -> plantillaAdmin();

?>

