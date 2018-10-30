<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validación</title>
</head>
<body>
    <h1>Validar formularios en php.</h1>
    <?php
        if (isset($_GET['error'])) {
            # code...
            $error= $_GET['error'];
            if ($error=="faltan datos") {
                # code...
                echo '<strong style="color:red">Introduce bien todos los datos en todos los campos del formulario</strong>';
            }
            if ($error=="nombre") {
                # code...
                echo '<strong style="color:red">Introduce bien el nombre</strong>';
            }
            if ($error=="apellidos") {
                # code...
                echo '<strong style="color:red">Introduce bien los apellidos</strong>';
            }
            if ($error=="edad") {
                # code...
                echo '<strong style="color:red">Introduce bien el edad</strong>';
            }
            if ($error=="email") {
                # code...
                echo '<strong style="color:red">Introduce bien el correo</strong>';
            }
            if ($error=="password") {
                # code...
                echo '<strong style="color:red">Introduce bien la contraseña</strong>';
            }
        }
    ?>
    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"><br>

        <label for="apellidos">Apellidos</label><br>
        <input type="text" name="apellidos" required="required" pattern="[A-Za-z]+"><br>

        <label for="edad">Edad:</label><br>
        <input type="number" name="edad" required="required" pattern="[0-9]+"><br>

        <label for="correo">Correo</label><br>
        <input type="email" name="correo" required="required"><br>

        <label for="password">Contraseña</label><br>
        <input type="password" name="password" required="required" minlength="5"><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>