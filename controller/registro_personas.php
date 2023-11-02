<?php
if (!empty($_POST["btn-registrar"])) {
    if (
        !empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["n_identificacion"]) and !empty($_POST["sexo"]) and !empty($_POST["f_nacimiento"])
        and !empty($_POST["n_contacto"]) and !empty($_POST["f_bautismo"]) and !empty($_POST["pastor"])
    ) {

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $n_identificacion = $_POST["n_identificacion"];
        $sexo = $_POST["sexo"];
        $f_nacimiento = $_POST["f_nacimiento"];
        $n_contacto = $_POST["n_contacto"];
        $f_bautismo = $_POST["f_bautismo"];
        $pastor = $_POST["pastor"];
        $bautismo_ES = $_POST["bautismo_ES"];
        

        $sql = $conexion->query("insert into registros(nombre, apellido, n_identificacion, sexo, f_nacimiento, n_contacto, f_bautismo, pastor, bautismo_ES)
        values('$nombre', '$apellido', $n_identificacion, '$sexo', '$f_nacimiento', $n_contacto, '$f_bautismo', '$pastor', '$bautismo_ES')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">Registro Exitoso</div>';
        } else {
            echo '<div class="alert alert-danger">Registro Fallido</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos Vacios</div>';
    }
}

?>