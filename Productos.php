<?php 
    
    require 'includes/app.php';
    incluirTemplate('header');
    
?>

    <main class="contenedor seccion">
        <h2>Productos</h1>

        <div class="contenedor-anuncios">
            <div>
                <a href="base.php">
                    <img src="src/img/snacks.png" alt="">
                </a>
            </div>
            <div>
                <a href="bebidas.php">
                    <img src="src/img/logobebidasnegro.png" alt="">
                </a>
            </div>
            <div>
                <a href="carnes.php">
                    <img src="src/img/logocarnes.png" alt="">
                </a>     
            </div>
            <div>
                <a href="embutidos.php">
                    <img src="src/img/logoembutidos.png" alt="">
                </a>           
            </div>
            <div>
                <a href="lacteos.php">
                    <img src="src/img/logolacteos.png" alt="">
                </a>           
            </div>
            <div>
                <a href="pastas.php">
                    <img src="src/img/logopastas.png" alt="">
                </a>           
            </div>
        </div>

    </main>



    <?php incluirTemplate('footer'); ?>
