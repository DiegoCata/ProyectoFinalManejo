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
        $enlacesModel== "jg1" ||
        $enlacesModel== "jg2" ||
        $enlacesModel== "jg3" ||
        $enlacesModel== "jg4" ||
        $enlacesModel== "jg5" ||
        $enlacesModel== "SF1" ||
        $enlacesModel== "SF2" ||
        $enlacesModel== "SF3" ||
        $enlacesModel== "SF4" ||
        $enlacesModel== "SF5" ||
        $enlacesModel== "SF6" ||
        $enlacesModel== "SF7" ||
        $enlacesModel== "SF8" ||
        $enlacesModel== "RP1" ||
        $enlacesModel== "RP2" ||
        $enlacesModel== "RP3" ||
        $enlacesModel== "RP4" ||
        $enlacesModel== "RP5" ||
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

