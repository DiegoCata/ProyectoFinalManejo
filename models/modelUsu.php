<?php
class EnlacesPaginasUsu
{
    public function enlacesPaginasModelUsu($enlacesModelUsu)
    {
        if($enlacesModelUsu== "inicioUsu" ||
        $enlacesModelUsu== "salirUsu")
        {
            $module="views/usuarios/".$enlacesModelUsu.".php";
        }
        else if($enlacesModelUsu=="indexUsu")
        {
            $module="views/usuarios/inicioUsu.php";
        }
        else
        {
            $module="views/usuarios/inicioUsu.php";
        }
        return $module;
    }

}
?>