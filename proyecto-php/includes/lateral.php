<!-- sidebar (barra lateral) -->
<aside id="sidebar">
<!-- Login -->
    <div id="login" class="block-aside">
        <h3>Identificate</h3>
        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" id="email1">

            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password1">

            <input type="submit" value="Entrar">
        </form>
    </div>
<!-- Registro -->
    <div id="registro" class="block-aside">
        <h3>Registrarte</h3>
        <form action="registro.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos">

            <label for="email">Email</label>
            <input type="email" name="email" id="email">

            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">

            <input type="submit" value="Registrar">
        </form>
    </div>
</aside>