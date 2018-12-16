<!-- sidebar (barra lateral) -->
<?php require_once 'includes/helpers.php';?>
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
        <?php if(isset($_SESSION['errores'])):?>
        <?php var_dump($_SESSION['errores']);?>
        <?php endif;?>
        <h3>Registrarte</h3>
        <!-- Mostrar errores -->
        <?php 
            if(isset($_SESSION['completado'])):?>
            <div class="alerta alerta-ok">
               <?=  $_SESSION['completado']?>
            </div>
        <?php elseif(isset($_SESSION['errores']['general'])):?>
            <div class="alerta alerta-error">
               <?=  $_SESSION['errores']['general']?>
            </div>
        <?php endif;?>
        
        <form action="registro.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'nombre') : ''; ?>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'apellidos') : ''; ?>

            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'email') : ''; ?>

            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'password') : ''; ?>

            <input type="submit" name="submit" value="Registrar">
        </form>
        <?php borrarErrores()?>
    </div>
</aside>