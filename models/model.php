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
        $enlacesModel== "catRD" ||
        $enlacesModel== "catVes" ||
        $enlacesModel== "precio" ||
        $enlacesModel== "precio2" ||
        $enlacesModel== "precio3" ||
        $enlacesModel== "precio4" ||
        $enlacesModel== "precio5" ||
        $enlacesModel== "JG1" ||
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

