<?php
    use App\Producto;

    if($_SERVER['SCRIPT_NAME'] === '/bienesraices/snacks.php') {
        $productos = Producto::obtener(1);
    } else {
        $productos = Producto::get(3);
    }
?>
<div class="contenedor-anuncios">
            <?php foreach($productos as $producto) { ?>
            <div class="anuncio">

                <img loading="lazy" src="imagenes/<?php echo $producto->imagen; ?>" alt="anuncio">
                
                <div class="contenido-anuncio">
                    <h3><?php echo $producto->nombre; ?></h3>
                    <p><?php echo $producto->descripcion; ?></p>
                    <p class="precio">Q<?php echo $producto->precio; ?></p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/iconolleno.svg" alt="icono wc">
                            <p><?php echo $producto->stock;?></p>
                        </li>
                    </ul>
                   
                </div><!--.contenido-anuncio-->
            </div><!--.anuncio-->
            <?php } ?>
        </div><!--.contenedor-anuncio-->