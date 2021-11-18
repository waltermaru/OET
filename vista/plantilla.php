<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio_formulario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=1
      , minimum-scale=1">
      <meta name="author" content="Walter Torres">
    <meta name="keywords" content="conductores, Vehiculos, propietarios">
    <meta name="description" content="Aplicación para el control de conductore y vehículos">
    <!--Estilos CSS-->
    <link rel="stylesheet" href="css/nav.css" type="text/css">
</head>
<body>
    <header>
        <?php
        include "modulos/navegacion.php";
        ?>
    </header>
    <section>
        <?php
        $mvc = new MvcController();
        $mvc -> enlacesPaginasController();
        ?>
        
    </section>
</body>
</html>