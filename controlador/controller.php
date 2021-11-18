<?php
class MvcController{
    #Llamada a la plantilla
    public function plantilla(){
        
        include "vista/plantilla.php";
    }
    
    #Interacción del usuario
    
    public function enlacesPaginasController(){
        
        if(isset($_GET["utf"])){
            $enlacesController = $_GET["utf"];
        }
        else{
           $enlacesController = "index";
        }
        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
        
        include $respuesta;
    }
}
?>