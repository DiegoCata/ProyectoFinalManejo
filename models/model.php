<?php
class EnlacesPaginas
{
    public function enlacesPaginasModel($enlacesModel)
    {
        if($enlacesModel== "inicio" ||  
        $enlacesModel== "ingreso" ||
        $enlacesModel== "catalogo" ||
        $enlacesModel== "catalogo_dos" ||
        $enlacesModel== "catJoggers" ||
        $enlacesModel== "catSF" ||
        $enlacesModel== "precio" ||
        $enlacesModel== "carrito" ||
        $enlacesModel== "registro")
        {
            $module="views/modules/".$enlacesModel.".php";
        }
        else if($enlacesModel=="index")
        {
            $module="views/modules/inicio.php";
        }
        else
        {
            $module="views/modules/inicio.php";
        }
        return $module;

    }
}
?>
