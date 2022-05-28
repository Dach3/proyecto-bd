<?php

    use App\Producto;
    use App\Categoria;
    use Intervention\Image\ImageManagerStatic as Image;

    require 'includes/app.php';

    estaAutenticado();
    
    // Validar la URL por ID válido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id){
        header('Location: index_crud.php');
    }

    // Obtener los datos del producto
    $producto = Producto::find($id);

    //Consulta para obtener las categorias
    $categorias = Categoria::all();

    // Arreglo con mensajes de errores
    $errores = Producto::getErrores();

    // Ejecutar el codigo despues que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        //Asignar los atributos
        $args = $_POST['producto'];

        $producto->sincronizar($args);

        //Validacion
        $errores = $producto->validar();

        //Subida de archivos
        //Generar un nombre único
        $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg" ;

        if($_FILES['producto']['tmp_name']['imagen']){
        $image = Image::make($_FILES['producto']['tmp_name']['imagen'])->fit(800,600);
        $producto->setImagen($nombreImagen);
        }
        
        if(empty($errores)){
            if($_FILES['producto']['tmp_name']['imagen']){
                //Almacenar la imagen
                $image->save(CARPETA_IMAGENES . $nombreImagen);
            }
            $producto->guardar();
        }
    }
    
    incluirTemplate('header');
 
?>
    <main class="contenedor seccion">
        <h1>Actualizar Producto</h1>

        <a class="boton boton-verde" href="index_crud.php">Volver</a>

        <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" enctype="multipart/form-data">

            <?php include 'formulario_productos.php' ?>
            
            <input type="submit" value="Actualizar Producto" class="boton boton-verde">

        </form>

    </main>

    <?php incluirTemplate('footer'); ?>