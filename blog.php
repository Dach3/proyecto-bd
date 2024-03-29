<?php 
    
    require 'includes/funciones.php';
    incluirTemplate('header');
    
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <sources rcset="build/img/blog1.webp" type="imagen/webp">
                    <sources rcset="build/img/blog1.jpg" type="imagen/jpg">
                    <img src="build/img/blog1.jpg" alt="Texto Entrada Blog" loading="lazy">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>20/03/2022</span> por: <span>Admin</span> </p>

                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.
                    </p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <sources rcset="build/img/blog2.webp" type="imagen/webp">
                    <sources rcset="build/img/blog2.jpg" type="imagen/jpg">
                    <img src="build/img/blog2.jpg" alt="Texto Entrada Blog" loading="lazy">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Construye una alberca en tu hogar</h4>
                    <p class="informacion-meta">Escrito el: <span>20/03/2022</span> por: <span>Admin</span> </p>

                    <p>
                        Maximiza el espacio en tu hoagar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio.
                    </p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <sources rcset="build/img/blog3.webp" type="imagen/webp">
                    <sources rcset="build/img/blog3.jpg" type="imagen/jpg">
                    <img src="build/img/blog3.jpg" alt="Texto Entrada Blog" loading="lazy">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p class="informacion-meta">Escrito el: <span>20/03/2022</span> por: <span>Admin</span> </p>

                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.
                    </p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <sources rcset="build/img/blog4.webp" type="imagen/webp">
                    <sources rcset="build/img/blog4.jpg" type="imagen/jpg">
                    <img src="build/img/blog4.jpg" alt="Texto Entrada Blog" loading="lazy">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guia para la decoracion de tu habitación</h4>
                    <p class="informacion-meta">Escrito el: <span>20/03/2022</span> por: <span>Admin</span> </p>

                    <p>
                        Maximiza el espacio en tu hoagar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio.
                    </p>
                </a>
            </div>
        </article>

    </main>

    <?php incluirTemplate('footer'); ?>

