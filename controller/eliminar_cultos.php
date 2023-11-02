<?php

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query(" DELETE FROM cultos WHERE  id = $id ");
    if ($sql == 1) {
        echo '<div class="alert alert-success">Información Eliminada</div>';
    } else {
        echo '<div class="alert alert-danger">No se elimino la información</div>';
    }
}
?>