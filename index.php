<?php
require_once "controlador/controller.php";
require_once "modelo/model.php";
require_once "controlador/formularios.controlador.php";

require_once "modelo/formulario.modelo.php";



#Creamos el objeto del archivo "controller"
$mvc = new MvcController();
$mvc -> plantilla();
?>