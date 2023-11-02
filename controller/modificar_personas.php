<?php
if (!empty($_POST["btn-registrar"])) {
    if (
        !empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["n_identificacion"]) and !empty($_POST["sexo"]) and !empty($_POST["f_nacimiento"])
        and !empty($_POST["n_contacto"]) and !empty($_POST["f_bautismo"]) and !empty($_POST["pastor"])
    ) {

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $n_identificacion = $_POST["n_identificacion"];
        $sexo = $_POST["sexo"];
        $f_nacimiento = $_POST["f_nacimiento"];
        $n_contacto = $_POST["n_contacto"];
        $f_bautismo = $_POST["f_bautismo"];
        $pastor = $_POST["pastor"];
        $bautismo_ES = $_POST["bautismo_ES"];

        $sql = $conexion->query(" UPDATE registros SET nombre = '$nombre', apellido = '$apellido',n_identificacion = $n_identificacion,sexo = '$sexo',f_nacimiento = '$f_nacimiento',n_contacto = $n_contacto,f_bautismo = '$f_bautismo',pastor = '$pastor',bautismo_ES = '$bautismo_ES' WHERE id=$id");

        if ($sql == 1) {
            header("location:registro.php");
        } else {
            echo '<div class="alert alert-danger">Modificación Fallida</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos Vacios</div>';
    }
}

?>