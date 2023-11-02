<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTROS IPUC EL PORTAL 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logo.ico">
    <link rel="stylesheet" href="css/estilos.css">
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

        <div class="col-12 p-3">
            <?php
            include "model/conexion.php";
            include "controller/eliminar_personas.php"
                ?>
            <table class="table table-light table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Id</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">F.Nacimiento</th>
                        <th scope="col">N.Contacto</th>
                        <th scope="col">F.Bautismo</th>
                        <th scope="col">Pastor Que Lo Bautizo</th>
                        <th scope="col">B.Espiritu Santo</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = $conexion->query(" SELECT * FROM registros ");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td>
                                <?= $datos->nombre ?>
                            </td>
                            <td>
                                <?= $datos->apellido ?>
                            </td>
                            <td>
                                <?= $datos->n_identificacion ?>
                            </td>
                            <td>
                                <?= $datos->sexo ?>
                            </td>
                            <td>
                                <?= $datos->f_nacimiento ?>
                            </td>
                            <td>
                                <?= $datos->n_contacto ?>
                            </td>
                            <td>
                                <?= $datos->f_bautismo ?>
                            </td>
                            <td>
                                <?= $datos->pastor ?>
                            </td>
                            <td>
                                <?= $datos->bautismo_ES ?>
                            </td>
                            <td><a class="btn btn-small btn-primary" href="modificar.php?id=<?= $datos->id ?>"><i
                                        class="fa-solid fa-pen-to-square"></i></a></td>
                            <script>
                                function eliminar() {
                                    var respuesta = confirm("¿Estas seguro que deseas eliminar?")
                                    return respuesta;
                                }
                            </script>
                            <td><a onclick="return eliminar()" class="btn btn-small btn-danger"
                                    href="registro.php?id=<?= $datos->id ?>"><i class="fa-solid fa-trash"></i></a></td>
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