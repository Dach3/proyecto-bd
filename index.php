<?php 
    
    require 'includes/app.php';
    incluirTemplate('header', $inicio = true);
    
?>
    <main class="contenedor seccion nosotros-darkmode">
        <h1>Mas Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Pagos totalmente seguros.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Los mejores precios de la competencia.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Entregas a todo el país en tiempo record.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Productos</h2>

        <?php
        include 'anunciosdinamicos.php';
        ?>

        <div class="alinear-derecha">
            <a href="Productos.php" class="boton-verde">Ver todos</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Tenemos los productos que estás buscando</h2>
        <p>Si llegara a tener algún problema con un producto llene el formulario y nos contactaremos con usted a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo">Contactanos</a>
    </section>

    
    </div>

    <?php incluirTemplate('footer'); ?>


    