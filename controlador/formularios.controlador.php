<?php
class ControladorFormularios{
    /*Registro*/
    public function ctrRegistro(){
        
        if(isset($_POST["cedula"])){
            
            $tabla = "conductores";
            
            $datos = array("Cedula_C" => $_POST["cedula"],
                           "Primer_Nombre_C" => $_POST["P_nombre"],
                          "Segundo_Nombre_C" => $_POST["S_nombre"],
                          "Apellidos_C" => $_POST["apellidos"],
                          "Direccion_C" => $_POST["Direccion"],
                          "Telefono_C" => $_POST["telefono"],
                          "Ciudad_C" => $_POST["ciudad"]);
            
            $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);
            
            return $respuesta;
            
        }
    }
}

