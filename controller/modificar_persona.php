<?php
if (!empty($_POST["btnmodificar"])) {
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];

        $sql = $conexion->query("UPDATE PERSONAS SET NOMBRE_PERSONA= '$nombre' , APELLIDO_PERSONA= '$apellido', DNI_PERSONA= '$dni', Fecha_Nacimiento= '$fecha',Correo_PERSONA= '$correo' WHERE ID_PERSONA = '$id'");
        if($sql == 1){
            header("Location: index.php");
        }else{
            echo "Hay un error al actualizar";
        }
    }
}
?>