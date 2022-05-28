<div class="articulo">
    <input type="hidden" id="id" value="<?php echo $item['id']; ?>">
    <div class="imagen"><img src="imagenes/<?php echo $item['imagen']; ?>" /></div>
    <div class="titulo"><?php echo $item['nombre']; ?></div>
    <div class="precio">Q<?php echo $item['precio']; ?></div>
    <div class="titulo"><?php echo $item['descripcion']; ?></div>
    <div class="titulo">Stock:<?php echo $item['stock']; ?></div>
    <div class="botones">
        <button class='btn-add'>Agregar al carrito</button>
    </div>
</div>