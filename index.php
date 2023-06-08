<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registro de Clientes</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <h1 class="text-center m-5">SISTEMA DE GESTIÓN DE CLIENTES :D</h1>
    <?php 
    include './models/conexion.php';
    include './controller/eliminar_persona.php';
    ?>
    <div class="container-fluid row d-flex p-2">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de Personas</h3>
            <?php
            include "./models/conexion.php";
            include "./controller/registro_persona.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
                <input type="text" class="form-control" name="nombre">
                <label for="exampleInputEmail1" class="form-label">Apellido de la persona</label>
                <input type="text" class="form-control" name="apellido">
                <label for="exampleInputEmail1" class="form-label">DNI de la persona</label>
                <input type="text" class="form-control" name="dni">
                <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fecha">
                <label for="exampleInputEmail1" class="form-label">Correo de la persona</label>
                <input type="email" class="form-control" name="correo">
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar Cliente</button>
        </form>

        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Dni</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Mostramos los registros de la bd -->
                    <?php include "./models/conexion.php";
                    $sql = $conexion->query("SELECT * FROM PERSONAS");
                    //Recorremos los datos
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <th scope="row"><?= $datos->ID_PERSONA ?></th>
                            <td><?= $datos->NOMBRE_PERSONA ?></td>
                            <td><?= $datos->APELLIDO_PERSONA ?></td>
                            <td><?= $datos->DNI_PERSONA ?></td>
                            <td><?= $datos->Fecha_Nacimiento ?></td>
                            <td><?= $datos->Correo_PERSONA ?></td>
                            <td>
                                <a href="modificar_producto.php?id=<?= $datos->ID_PERSONA?>" class="btn btn-success"><i class="ri-edit-box-line"></i>Editar</a>
                                <a href="index.php?id=<?= $datos->ID_PERSONA?>" class="btn btn-danger"><i class="ri-delete-bin-line"></i>Eliminar</a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>