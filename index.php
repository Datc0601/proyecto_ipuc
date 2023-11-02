<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPUC EL PORTAL 1</title>
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

    <div class="container-fluid">
        <h2 class="text-center">REGISTRO IPUC</h2>
        <form class="row" method="POST">
            <div class="col-4 p-3">
                <div class="mb-3">
                    <div id="" class="form-text">Nombre</div>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="mb-3">
                    <div id="" class="form-text">Apellido</div>
                    <input type="text" class="form-control" id="apellido" name="apellido">
                </div>
                <div class="mb-3">
                    <div id="" class="form-text">N.Identificación</div>
                    <input type="number" class="form-control" id="n_identificacion" name="n_identificacion">
                </div>
                <div class="mb-3">
                    <div id="" class="form-text">Sexo</div>
                    <select id="sexo" class="form-select" name="sexo">
                        <option></option>
                        <option>Masculino</option>
                        <option>Femenino</option>
                    </select>
                </div>
                <div class="mb-3">
                    <div id="" class="form-text">Fecha De Nacimiento</div>
                    <input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento">
                </div>
            </div>

            <div class="col-4 p-3">
                <div class="mb-3">
                    <div id="" class="form-text">N.Contacto</div>
                    <input type="number" class="form-control" id="n_contacto" name="n_contacto">
                </div>
                <div class="mb-3">
                    <div id="" class="form-text">Fecha De Bautismo</div>
                    <input type="date" class="form-control" id="f_bautismo" name="f_bautismo">
                </div>
                <div class="mb-3">
                    <div id="" class="form-text">Pastor Que Lo Bautizo</div>
                    <input type="text" class="form-control" id="pastor" name="pastor">
                </div>
                <div class="mb-3">
                    <div id="" class="form-text">Bautismo Del Espiritu Santo</div>
                    <input type="date" class="form-control" id="bautismo_ES" name="bautismo_ES">
                </div>
                <div class="ms-5 ps-5 pt-3">
                    <button id="registrar" type="submit" class="btn btn-success" name="btn-registrar"
                        value="OK">REGISTRAR</button>
                </div>

            </div>
            <div class="col-4 p-3">
                <img src="img/permanece.png" class="img-fluid" alt="Responsive image">
            </div>
            <?php
            include "model/conexion.php";
            include "controller/registro_personas.php";

            ?>

        </form>


</body>

</html>