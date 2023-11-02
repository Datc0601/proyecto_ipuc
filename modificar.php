<?php
include "model/conexion.php";
$id = $_GET["id"];
$sql = $conexion->query(" SELECT * FROM registros WHERE id= $id ");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>MODIFICAR</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="img/logo.ico">
    

</head>

<body>
    <form class="col-6 p-3 m-auto" method="POST">
        <h2 class="text-center">MODIFICAR DATOS</h2>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <?php
        include "controller/modificar_personas.php";

        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-1">
                <div id="" class="form-text">Nombre</div>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $datos->nombre ?>">
            </div>
            <div class="mb-1">
                <div id="" class="form-text">Apellido</div>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?= $datos->apellido ?>">
            </div>
            <div class="mb-1">
                <div id="" class="form-text">N.Identificación</div>
                <input type="number" class="form-control" id="n_identificacion" name="n_identificacion"
                    value="<?= $datos->n_identificacion ?>">
            </div>
            <div class="mb-1">
                <div id="" class="form-text">Sexo</div>
                <select id="sexo" class="form-select" name="sexo" value="<?= $datos->sexo ?>">
                    <option><?= $datos->sexo ?></option>
                    <option>Masculino</option>
                    <option>Femenino</option>
                </select>
            </div>
            <div class="mb-1">
                <div id="" class="form-text">Fecha De Nacimiento</div>
                <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento"
                    value="<?= $datos->f_nacimiento ?>">
            </div>

            <div class="mb-1">
                <div id="" class="form-text">N.Contacto</div>
                <input type="number" class="form-control" id="n_contacto" name="n_contacto"
                    value="<?= $datos->n_contacto ?>">
            </div>
            <div class="mb-1">
                <div id="" class="form-text">Fecha De Bautismo</div>
                <input type="date" class="form-control" id="f_bautismo" name="f_bautismo" value="<?= $datos->f_bautismo ?>">
            </div>
            <div class="mb-1">
                <div id="" class="form-text">Pastor Que Lo Bautizo</div>
                <input type="text" class="form-control" id="pastor" name="pastor" value="<?= $datos->pastor ?>">
            </div>
            <div class="mb-1">
                <div id="" class="form-text">¿Bautismo Del Espiritu Santo?</div>
                <input type="date" class="form-control" id="bautismo_ES" name="bautismo_ES"
                    value="<?= $datos->bautismo_ES ?>">
                <div class="col-3 p-3 m-auto">
                    <button type="submit" class="btn btn-primary" name="btn-registrar" value="OK">MODIFICAR</button>
                </div>
            </div>
        <?php }
        ?>




    </form>
</body>

</html>