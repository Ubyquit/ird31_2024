<?php

//print_r($_GET);

$id_usuario = $_GET['id_usuario'];

include_once "../connection/connect.php";

$sql = "SELECT * FROM usuarios WHERE id_usuario = $id_usuario";

$result = $conexion->query($sql);

$row = $result->fetch_assoc();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container">
            <form action="./update.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input class="form-control" type="text" name="nombre" value="<?= $row['nombre']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellido paterno</label>
                    <input class="form-control" type="text" name="ap_paterno" value="<?= $row['ap_paterno']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellido materno</label>
                    <input class="form-control" type="text" name="ap_materno" value="<?= $row['ap_materno']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Correo electrónico</label>
                    <input class="form-control" type="email" name="c_electronico" value="<?= $row['c_electronico']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Telefono</label>
                    <input class="form-control" type="tel" minlength="10" maxlength="10" name="tel" value="<?= $row['tel']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Fecha de nacimiento</label>
                    <input class="form-control" type="date" name="f_nacimiento" value="<?= $row['f_nacimiento']; ?>">
                </div>
                <div class="mb-3">
                    <input type="hidden" name="id_usuario" value="<?= $id_usuario; ?>">
                    <button class="btn btn-primary" type="submit">Insertar</button>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>