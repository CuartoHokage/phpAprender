<!-- sidebar (barra lateral) -->
<aside id="sidebar">
<?php if(isset($_SESSION['usuario'])): ?>
<div id="usuario-logueado" class="block-aside">
    <h3>Bienvenida, <?= $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']?></h3>
    <!-- Botones -->
    <a href="cerrar.php" class="boton boton-verde">Entradas</a>
    <a href="cerrar.php" class="boton">Crear categorías</a>
    <a href="cerrar.php" class="boton boton-naranja">Mis datos</a>
    <a href="cerrar.php" class="boton boton-rojo">Cerrar sesión</a>
</div>
<?php endif;?>
<!-- Login -->
    <?php if(!isset($_SESSION['usuario'])): ?>
    <div id="login" class="block-aside">
        <h3>Identificate</h3>
        <!-- Inicio Error de identificación -->
        <?php if(isset($_SESSION['error_login'])): ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['error_login'];?>
                <!-- inicio if  -->
                <?php if(isset($_SESSION['usuario'])): ?>
                    <?php $_SESSION['error_login']=null;?>
                <?php endif;?>
                <!-- Fin if -->
            </div>
        <?php endif;?>
        <!-- fin error de identificación -->
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
        <?php borrarErrores();?>
    </div>
<?php endif;?>
</aside>
