<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombre"> Nombre: </label>
        <p><input type="text" name="nombre" autofocus="autofocus" required="required"/> </p>
        <label for="apellido"> Apellido: </label>
        <p><input type="text" name="apellido" autofocus="autofocus" required="required"/></p>
        <!-- Campo boton -->
        <label for="boton"> Button: </label>
        <p><input type="button" name="boton" value="Click"/></p>
        <!-- Campo de checkbox -->
        <label for="sexo"> Sexo: </label>
        <p>
            Hombre:<input type="checkbox" name="sexo" value="hombre"/>
            Mujer:<input type="checkbox" name="sexo" value="mujer" checked="checked"/>
        </p>
        <!-- Campo colores -->
        <label for="color"> Color: </label>
        <p><input type="color" name="color"/></p>
        <!-- Campo tipo date (fecha) -->
        <label for="fecha"> Fecha: </label>
        <p><input type="date" name="fecha"/></p>
        <!-- Campo Correo -->
        <label for="correo"> Correo: </label>
        <p><input type="email" name="correo"/></p>
        <!-- Campo de tipo archivo -->
        <label for="archivo"> Selecciona un archivo: </label>
        <p><input type="file" name="archivo" multiple="multiple"/></p>
        <!-- Campo de tipo hidden -->
        <label for="correo2"> Correo2 hidden: </label>
        <p><input type="hidden" name="correo2"/></p>
        <!-- Campo de tipo numero -->
        <label for="numero"> Número: </label>
        <p><input type="number" name="numero"/></p>
        <!-- Campo constraseña -->
        <label for="password"> password: </label>
        <p><input type="password" name="password"/></p>
        <!-- Campo radio button -->
        <label for="continente"> Continente: </label>
        <p>
            América del sur:<input type="radio" name="continente" value="América del sur"/>
            América del norte:<input type="radio" name="continente" value="América del Norte"/>
            Europa:<input type="radio" name="continente" value="Europa"/>
        </p>
        <!-- Campo url -->
        <label for="paginaweb"> Página web: </label>
        <p><input type="url" name="paginaweb"/></p>
        <!-- Textarea -->
        <label for="area"> Descripción: </label><br>
        <textarea name="area"  cols="30" rows="10"></textarea><br>
        <!-- Campo select -->
        <label for="area"> Películas: </label><br>
        <select name="peliculas" >
            <option value="Naruto">Naruto</option>
            <option value="Batman">Batman</option>
            <option value="Batman">Batman</option>
            <option value="Batman">Batman</option>
        </select><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php
/**
 * 
 */
?>