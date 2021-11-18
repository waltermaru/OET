<?php
class EnlacesPaginas{
    public function enlacesPaginasModel($enlacesModel){
        
        if($enlacesModel == "vehiculos" ||
          $enlacesModel == "conductor" ||
          $enlacesModel == "propietario"){
            
            $module = "vista/modulos/".$enlacesModel.".php";
        }
        
        elseif($enlacesModel == "index"){
            
            $module = "vista/modulos/vehiculos.php";
        }
        
        else {
            $module = "vista/modulos/vehiculos.php";
        }
        
        return $module;
    }
}

?>