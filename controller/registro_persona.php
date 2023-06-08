<?php
if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];

        $sql = $conexion->query("INSERT INTO PERSONAS(NOMBRE_PERSONA,APELLIDO_PERSONA,DNI_PERSONA,Fecha_Nacimiento,Correo_PERSONA) VALUES ('$nombre' ,'$apellido','$dni' , '$fecha','$correo') ");
        if($sql == 1){
            echo "<div class='alert alert-info'>Datos Registrados Correctamente</div>";
        }else{
            echo "Error al Guardar los datos";
        }
    }else{
        echo "Faltan Datos por ingresar";
    }
}
?>