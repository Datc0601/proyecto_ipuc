<?php
include "model/conexion.php";
$id = $_GET["id"];
$sql = $conexion->query(" SELECT * FROM cultos WHERE id= $id ");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>REGISTROS</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="img/logo.ico">
    
</head>

<body>
    <form class="col-6 p-3 m-auto" method="POST">
        <h2 class="text-center">MODIFICAR DATOS</h2>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <?php
        include "controller/modificar_cultos.php";

        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-1">
                <div id="" class="form-text">Nombre Del Culto</div>
                <input type="text" class="form-control" id="nombre_culto" name="nombre_culto" value="<?= $datos->nombre_culto ?>">
            </div>
            <div class="mb-1">
                <div id="" class="form-text">Fecha Del Culto</div>
                <input type="date" class="form-control" id="fecha_culto" name="fecha_culto" value="<?= $datos->fecha_culto ?>">
            </div>
            <div class="mb-1">
                <div id="" class="form-text">Asistencia</div>
                <input type="number" class="form-control" id="asistencia" name="asistencia"
                    value="<?= $datos->asistencia ?>">
            </div>
            
            <div class="mb-1">
                <div id="" class="form-text">Ofrenda</div>
                <input type="number" class="form-control" id="ofrenda" name="ofrenda"
                    value="<?= $datos->ofrenda ?>">
            </div>

            <div class="mb-1">
                <div id="" class="form-text">Visitas</div>
                <input type="number" class="form-control" id="visitas" name="visitas"
                    value="<?= $datos->visitas ?>">
            </div>
            
            
                <div class="col-3 p-3 m-auto">
                    <button type="submit" class="btn btn-primary" name="btn-modificar" value="OK">MODIFICAR</button>
                </div>
            </div>
        <?php }
        ?>




    </form>
</body>

</html>