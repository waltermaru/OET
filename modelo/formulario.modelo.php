<?PHP
 require_once "conexion.php";


class ModeloFormularios{
    
    #--------Registro------
    
    static public function mdlRegistro($tabla, $datos){
        
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Cedula_C, Primer_Nombre_C, Segundo_Nombre_C, Apellidos_C, Direccion_C, Telefono_C, Ciudad_C) VALUES(:Cedula_C, :Primer_Nombre_C, :Segundo_Nombre_C, :Apellidos_C, :Direccion_C, :Telefono_C, :Ciudad_C)");
        
        $stmt->bindParam(":Cedula_C", $datos["Cedula_C"], PDO::PARAM_STR);
        $stmt->bindParam(":Primer_Nombre_C", $datos["Primer_Nombre_C"], PDO::PARAM_STR);
         $stmt->bindParam(":Segundo_Nombre_C", $datos["Segundo_Nombre_C"], PDO::PARAM_STR);
         $stmt->bindParam(":Apellidos_C", $datos["Apellidos_C"], PDO::PARAM_STR);
         $stmt->bindParam(":Direccion_C", $datos["Direccion_C"], PDO::PARAM_STR);
         $stmt->bindParam(":Telefono_C", $datos["Telefono_C"], PDO::PARAM_STR);
         $stmt->bindParam(":Ciudad_C", $datos["Ciudad_C"], PDO::PARAM_STR);
        
         if($stmt ->execute()){
             
          return "ok";
         }
         else{
         print_r(Conexion::conectar()->errorInfo());
             
         }
        
        /* $stmt ->close();
         
        $stmt = null;*/
        
    }
}