<?php
include './models/conexion.php';

$id = $_GET["id"];
$sql = $conexion->query("SELECT * FROM PERSONAS WHERE ID_PERSONA = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modificar Productos</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secondary">Actualizar Clientes</h3>
        <input type="hidden" class="form-control" name="id" value="<?= $_GET["id"]?>">
        <?php
        include "./models/conexion.php";
        include "./controller/modificar_persona.php";

        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos -> NOMBRE_PERSONA?>">
                <label for="exampleInputEmail1" class="form-label">Apellido de la persona</label>
                <input type="text" class="form-control" name="apellido" value="<?= $datos-> APELLIDO_PERSONA?>">
                <label for="exampleInputEmail1" class="form-label">DNI de la persona</label>
                <input type="text" class="form-control" name="dni" value="<?= $datos-> DNI_PERSONA?>">
                <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fecha" value="<?=$datos->Fecha_Nacimiento ?>">
                <label for="exampleInputEmail1" class="form-label">Correo de la persona</label>
                <input type="email" class="form-control" name="correo" value="<?=$datos->Correo_PERSONA ?>">
            </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar Producto</button>
    </form>

</body>

</html>