<?php 
    
    require 'includes/app.php';
    incluirTemplate('header');
    
?>


    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="seccion-nosotros">
            <div class="contenedor-imagen">
                <picture>
                    <source srcset="build/img/superviejo.webp" type="imagen/webp">
                    <source srcset="build/img/superviejo.jpg" type="imagen/jpg">
                    <img src="build/img/superviejo.jpg" alt="Sobre Nosotros" loading="lazy">
                </picture>
            </div>

            <div class="contenedor-parrafo">
                <blockquote>
                    25 Años de Experiencia
                </blockquote>
                <p>Contamos con los mejores porductos de alta calidad de todo el mercado con mas de 25 años de experiencia en la industria de los supermercados.</p>
                <p>Somos una empresa creada en 1997 por los fundadores Daniel Paredes y Nelson Ordoñez los cuales empezaron con una abarroteria en su pequeño pueblo Tiquisate, Escuintla. Hoy en día El Rincon guatemalteco tiene más de 35 supermercados alrededor de toda la republica de Guatemala, habiendonos ganado la confianza de todos los guatemaltecos por nuestros productos y atención de buena calidad</p>
            </div>

        </div>
        
    </main>


    <seccion class="contenedor seccion">
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
    </seccion>


    <?php incluirTemplate('footer'); ?>


