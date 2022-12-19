<fieldset>
                <legend>Información General</legend>

                <label for="titulo">Nombre:</label>
                <input type="text" id="titulo" name="producto[nombre]" placeholder="Titulo Producto" value="<?php echo s( $producto->nombre ); ?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="producto[precio]" placeholder="Precio Producto" value="<?php echo s( $producto->precio ); ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="producto[imagen]">

                <?php if($producto->imagen){ ?>
                    <img src="imagenes/<?php echo $producto->imagen ?>" class="imagen-small">
                <?php } ?>

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="producto[descripcion]"><?php echo s( $producto->descripcion ); ?></textarea>
            </fieldset>

            <fieldset>
                <legend>Información Producto</legend>

                <label for="stock">Stock:</label>
                <input type="number" id="stock" name="producto[stock]" placeholder="Ejem: 3" min="1" value="<?php echo s( $producto->stock ); ?>">
            </fieldset>

            <fieldset>
                <legend>Categoria</legend>

                <label for="vendedor">Categoria</label>
                <select name="producto[id_categoria]" id="categoria">
                    <option selected value="">-- Seleccione --</option>
                    <?php foreach($categorias as $categoria){ ?>
                        <option 
                        <?php echo $producto->id_categoria === $categoria->id ? 'selected' : ''; ?> 
                        value="<?php echo s($categoria->id); ?>"> <?php echo s($categoria->nombre); ?> 
                        </option>
                    <?php } ?>
                </select>
            </fieldset>