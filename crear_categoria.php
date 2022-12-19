<?php 

    require 'includes/app.php';
    use App\Categoria;

    estaAutenticado();

    $categoria = new Categoria;

    // Arreglo con mensajes de errores
    $errores =Categoria::getErrores();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        //Crear una nueva isntancia 
        $categoria = new Categoria($_POST['categoria']);

        //Validar que no haya campos vacios
        $errores = $categoria->validar();

        //No hay errores
        if(empty($errores)) {
            $categoria->guardar();
        }
    }

    incluirTemplate('header');

    ?>

    <main class="contenedor seccion">
        <h1>Registrar Categoria</h1>

        <a class="boton boton-verde" href="index_crud.php">Volver</a>

        <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" action="crear_categoria.php">
           <?php include 'formulario_categoria.php' ?>
            <input type="submit" value="Registrar Categoria" class="boton boton-verde">
        </form>

    </main>

    <?php incluirTemplate('footer'); ?>