<html>
    <head>
        <title> Proyecto Web </title>
        <link rel = StyleSheet href="css/template.css" typr="text/css">
    </head>
    <body>
        <?php
            include "modules/navigation.php";
        ?>
        <section>
            <?php
                
                $mvc = new MvcController();
                $mvc -> enlacesPaginasController();
            ?>
        </section>
    </body>
</html>