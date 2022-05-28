<?php 
    require 'includes/app.php';
    use App\Producto;
    use App\Categoria;

    estaAutenticado();

    //Importar intervention image
    use Intervention\Image\ImageManagerStatic as Image;

    // Crear objeto
    $producto = new Producto;

    //Consulta para obtener todos las categorias
    $categorias = Categoria::all();

    // Arreglo con mensajes de errores
    $errores =Producto::getErrores();

    // Ejecutar el codigo despues que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        // Crea una nueva instancia
        $producto = new Producto($_POST['producto']);

        // ** Subida de archivos **//

        //Generar un nombre único
        $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg" ;

        // Setear la imagen
        // Realiza un resize a la imagen con intervention
        if($_FILES['producto']['tmp_name']['imagen']){
        $image = Image::make($_FILES['producto']['tmp_name']['imagen'])->fit(800,600);
        $producto->setImagen($nombreImagen);
        }

        //Validar
        $errores = $producto->validar();
  
    // Revisar que el arreglo de errores esté vacio
    if(empty($errores)){

        // Crear la carpeta para subir imagenes
        if(!is_dir(CARPETA_IMAGENES)){
            mkdir(CARPETA_IMAGENES);
        }

        //Guarda la imagen en el servidor
        $image->save(CARPETA_IMAGENES . $nombreImagen);

        // Guarda en la base de datos
        $producto->guardar();
    }

    }
    incluirTemplate('header');
  
?>
    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a class="boton boton-verde" href="index_crud.php">Volver</a>

        <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" action="crear.php" enctype="multipart/form-data">

           <?php include 'formulario_productos.php' ?>

            <input type="submit" value="Crear Producto" class="boton boton-verde">
        </form>

    </main>

    <?php incluirTemplate('footer'); ?>