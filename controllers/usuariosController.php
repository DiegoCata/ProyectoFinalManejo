<?php
class usuController
{
    public function plantillaUsu()
    {
        include "views/estilo2.php";
    }

    public function enlacesPaginasControllerUsu()
    {
        if(isset($_GET["action"]) )
        {
            $enlacesController= $_GET["action"];
        }
        else
        {
            $enlacesController="inicioUsu.php";
        }
        $respuesta= EnlacesPaginasUsu::enlacesPaginasModelUsu($enlacesController);
        include $respuesta;

    }

}