<html>
    <head>
        <title>Camari</title>
        <link rel = StyleSheet href="css/template.css" typr="text/css">
    </head>
    <body>
        <?php
            include "usuarios/navigationUsu.php";
        ?>
        <section>
            <?php
                
                $mvc = new usuController();
                $mvc -> enlacesPaginasControllerUsu();
            ?>
        </section>
    </body>
</html>