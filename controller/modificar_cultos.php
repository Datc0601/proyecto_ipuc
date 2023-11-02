<?php
if (!empty($_POST["btn-modificar"])) {
    if (
        !empty($_POST["nombre_culto"]) and !empty($_POST["fecha_culto"]) and !empty($_POST["asistencia"]) and !empty($_POST["ofrenda"]) and !empty($_POST["visitas"])
        
    ) {

        $id = $_POST["id"];
        $nombre_culto = $_POST["nombre_culto"];
        $fecha_culto = $_POST["fecha_culto"];
        $asistencia = $_POST["asistencia"];
        $ofrenda = $_POST["ofrenda"];
        $visitas = $_POST["visitas"];
        

        $sql = $conexion->query(" UPDATE cultos SET nombre_culto = '$nombre_culto', fecha_culto = '$fecha_culto',asistencia = $asistencia,ofrenda = '$ofrenda',visitas = '$visitas' WHERE id=$id");
        if ($sql == 1) {
            header("location:culto.php");
        } else {
            echo '<div class="alert alert-danger">Modificación Fallida</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos Vacios</div>';
    }
}

?>