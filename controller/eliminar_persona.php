<?php
if(!empty($_GET["id"])){
    $id = $_GET["id"];
    $sql = $conexion->query("DELETE FROM PERSONAS WHERE ID_PERSONA= '$id'");
    if($sql == 1){
        echo "<div class='alert alert-success'>Se elimino correctamente</div>";
        header("Location: index.php");
    }else{
        echo "Error al eliminar";
    }
}
?>