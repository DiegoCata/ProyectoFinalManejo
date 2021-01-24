<?php
class adminController
{
    public function plantillaAdmin()
    {
        include "views/estilo.php";
    }

    public function enlacesPaginasController()
    {
        if(isset($_GET["action"]) )
        {
            $enlacesController= $_GET["action"];
        }
        else
        {
            $enlacesController="inicioAdmin.php";
        }
        $respuesta= EnlacesPaginasAdmin::enlacesPaginasModelAdmin($enlacesController);
        include $respuesta;

    }

}
