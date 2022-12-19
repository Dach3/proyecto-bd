<?php 

    require 'includes/app.php';
    estaAutenticado();

    //Importar las clases
    use App\Producto;
    use App\Categoria;

    // Implementar un método para obtener todas los productos con active records
    $productos = Producto::all();
    $categorias = Categoria::all();

    //Muestra mensaje condicional
    $resultado = $_GET['resultado'] ?? null;

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        //Validar id
        $id =  $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id){
            $tipo = $_POST['tipo'];
            if(validarTipoContenido($tipo)){
                //Compara lo que vamos a eliminar
                if($tipo === 'categoria') {
                    $categoria = Categoria::find($id);
                    $categoria->eliminar();
                } else if($tipo === 'producto'){
                    $producto = Producto::find($id);
                    $producto->eliminar();
                }
            }
        }
    }

    // Incluye un template 
    incluirTemplate('header');
    
?>
    <main class="contenedor seccion">
        <h1>Administrador de Productos</h1>

        <?php 
            $mensaje = mostrarNotificacion(intval($resultado)); 
            if($mensaje) { ?>
            <p class="alerta exito"><?php echo s($mensaje); ?> </p>
        <?php } ?>

        <a class="boton boton-verde" href="crear.php">Nuevo Producto</a>
        <a class="boton boton-amarillo" href="crear_categoria.php">Nueva Categoria</a>
        <a class="boton boton-verde" href="compra_terminada.php">Registros ventas</a>

        <h2>Productos</h2>
        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody> <!-- Mostrar los resultados -->
                <?php foreach( $productos as $producto ): ?>
                <tr>
                    <td> <?php echo $producto->id; ?> </td>
                    <td> <?php echo $producto->nombre; ?> </td>
                    <td> <img src="imagenes/<?php echo $producto->imagen; ?>" class="imagen-tabla"> </td>
                    <td>Q <?php echo $producto->precio; ?></td>
                    <td> 
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $producto->id; ?>">
                            <input type="hidden" name="tipo" value="producto">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="actualizar.php?id=<?php echo $producto->id; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2>Categorias</h2>
        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody> <!-- Mostrar los resultados -->
                <?php foreach( $categorias as $categoria ): ?>
                <tr>
                    <td> <?php echo $categoria->id; ?> </td>
                    <td> <?php echo $categoria->nombre; ?> </td>
                    <td> 
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $categoria->id; ?>">
                            <input type="hidden" name="tipo" value="categoria">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="actualizar_categoria.php?id=<?php echo $categoria->id; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <?php 
        incluirTemplate('footer'); 
    ?>