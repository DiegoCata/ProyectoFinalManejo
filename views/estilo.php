<html>
    <head>
        <title>Camari</title>
        <link rel = StyleSheet href="css/template.css" typr="text/css">
    </head>
    <body>
        <?php
            include "administrado/navigationAdmin.php";
        ?>
        <section>
            <?php
                
                $mvc = new adminController();
                $mvc -> enlacesPaginasController();
            ?>
        </section>
    </body>
</html>