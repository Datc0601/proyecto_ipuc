<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CULTOS IPUC EL PORTAL 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="img/logo.ico">
    <script src="https://kit.fontawesome.com/9a2d10433b.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav>
            <ul>
                <img src="img/logo.png" />
                <li class="titulo"><a href="#">IPUC EL PORTAL 1</a></li>
                <li class="a"><a href="acercade.php">Acerca De</a></li>
                <li class="a"><a href="culto.php">Cultos</a></li>
                <li class="a"><a href="registro.php">Registros</a></li>
                <li class="a"><a href="index.php">Inicio</a></l>
            </ul>
        </nav>
    </header>

    <div class="container-fluid row">
        <form class="col-3 p-2 m-auto" method="POST">
            <h2 class="text-center">CULTOS</h2>

            <div class="mb-3">
                <div id="" class="form-text">Nombre Del Culto</div>
                <input type="text" class="form-control" id="nombre_culto" name="nombre_culto">
            </div>
            <div class="mb-3">
                <div id="" class="form-text">Fecha del Culto</div>
                <input type="date" class="form-control" id="fecha_culto" name="fecha_culto">
            </div>
            <div class="mb-3">
                <div id="" class="form-text">Asistencia</div>
                <input type="number" class="form-control" id="asistencia" name="asistencia">
            </div>
            <div class="mb-3">
                <div id="" class="form-text">Ofrenda</div>
                <input type="number" class="form-control" id="ofrenda" name="ofrenda">
            </div>

            <div class="mb-3">
                <div id="" class="form-text">Visitas</div>
                <input type="number" class="form-control" id="visitas" name="visitas">

            </div>
            <div class="p-3 ms-5">
                <button id="guardar" type="submit" class="btn btn-success" name="btn-guardar"
                    value="OK">GUARDAR</button>
            </div>
            <?php
            include "model/conexion.php";
            include "controller/registro_cultos.php";

            ?>

        </form>


        <div class="col-9 p-3">
            <?php
            include "model/conexion.php";
            include "controller/eliminar_cultos.php"

                ?>
            <table class="table table-light table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Nombre Del Culto</th>
                        <th scope="col">Fecha Del Culto</th>
                        <th scope="col">Asistencia</th>
                        <th scope="col">Ofrenda</th>
                        <th scope="col">Visitas</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = $conexion->query(" SELECT * FROM cultos ");
                    while ($datos = $sql->fetch_object()) { ?>

                        <tr>
                            <td>
                                <?= $datos->nombre_culto ?>
                            </td>
                            <td>
                                <?= $datos->fecha_culto ?>
                            </td>
                            <td>
                                <?= $datos->asistencia ?>
                            </td>
                            <td>
                                <?= $datos->ofrenda ?>
                            </td>
                            <td>
                                <?= $datos->visitas ?>
                            </td>

                            <td><a class="btn btn-small btn-primary" href="update_cultos.php?id=<?= $datos->id ?>"><i
                                        class="fa-solid fa-pen-to-square"></i></a></td>

                            <script>
                                function eliminar() {
                                    var respuesta = confirm("¿Estas seguro que deseas eliminar?");
                                    return respuesta
                                }
                            </script>
                            <td><a onclick="return eliminar()" class="btn btn-small btn-danger"
                                    href="culto.php?id=<?= $datos->id ?>"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                    <?php }
                    ?>

                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


</body>

</html>