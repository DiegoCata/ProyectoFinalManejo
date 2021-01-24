<?php
class EnlacesPaginasAdmin
{
    public function enlacesPaginasModelAdmin($enlacesModelAdmin)
    {
        if($enlacesModelAdmin== "ini" ||  
        $enlacesModelAdmin== "ingreso" ||
        $enlacesModelAdmin== "catalogo" ||
        $enlacesModelAdmin== "precio" ||
        $enlacesModelAdmin== "registroProductos" ||
        $enlacesModelAdmin== "listado" ||
        $enlacesModelAdmin== "cerrarS")
        {
            $module="views/administrado/".$enlacesModelAdmin.".php";
        }
        else if($enlacesModelAdmin=="indexAdmin")
        {
            $module="views/administrado/inicioAdmin.php";
        }
        else
        {
            $module="views/administrado/inicioAdmin.php";
        }
        return $module;
    }

}
?>