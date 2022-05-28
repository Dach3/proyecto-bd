<?php 
    require 'includes/app.php';
    estaAutenticado();

    //Importar las clases
    use App\Registro;
    use App\Categoria;

    // Implementar un método para obtener todas los productos con active records
    $registros = Registro::all();
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
                } else if($tipo === 'registro'){
                    $registro = Registro::find($id);
                    $registro->eliminar();
                }
            }
        }
    }


    incluirTemplate('header');
?>
<main class="contenedor seccion">
        <h1>Registro de Productos</h1>
                    <table class="propiedades">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Imagen</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody> <!-- Mostrar los resultados -->
                            <?php foreach( $registros as $registro ): ?>
                            <tr>
                                <td> <?php echo $registro->id; ?> </td>
                                <td> <?php echo $registro->nombre; ?> </td>
                                <td> <img src="imagenes/<?php echo $registro->imagen; ?>" class="imagen-tabla"> </td>
                                <td>Q <?php echo $registro->precio; ?></td>
                                <td> <?php echo $registro->cantidad; ?></td>
                                <td> 
                                    <form method="POST" class="w-100">
                                        <input type="hidden" name="id" value="<?php echo $registro->id; ?>">
                                        <input type="hidden" name="tipo" value="registro">
                                        <input type="submit" class="boton-rojo-block" value="Eliminar">
                                    </form>

                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
</main>
    <?php 
    incluirTemplate('footer'); 
    ?>

