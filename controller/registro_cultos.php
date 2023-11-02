<?php
if (!empty($_POST["btn-guardar"])) {
    if (
        !empty($_POST["nombre_culto"]) and !empty($_POST["fecha_culto"]) and !empty($_POST["asistencia"]) and !empty($_POST["ofrenda"]) and !empty($_POST["visitas"])
    ) {

        $nombre_culto = $_POST["nombre_culto"];
        $fecha_culto = $_POST["fecha_culto"];
        $asistencia = $_POST["asistencia"];
        $ofrenda = $_POST["ofrenda"];
        $visitas = $_POST["visitas"];


        $sql = $conexion->query("insert into cultos(nombre_culto, fecha_culto, asistencia, ofrenda, visitas)
        values('$nombre_culto', '$fecha_culto', $asistencia, $ofrenda, '$visitas')");
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