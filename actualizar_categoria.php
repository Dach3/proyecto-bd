<?php 

    require 'includes/app.php';
    use App\Categoria;
    estaAutenticado();

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: index_crud.php');
    }

    //Obtener el arreglo de la categoria
    $categoria = categoria::find($id);

    // Arreglo con mensajes de errores
    $errores =Categoria::getErrores();

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        //Asignar los valores
        $args = $_POST['categoria'];

        //Sincronizar objeto en memoria con lo que el usuario escribió
        $categoria->sincronizar($args);

        //Validacion
        $errores = $categoria->validar();

        if(empty($errores)) {
            $categoria->guardar();
        }
    }

    incluirTemplate('header');

    ?>

    <main class="contenedor seccion">
        <h1>Actualizar Categoria</h1>

        <a class="boton boton-verde" href="index_crud.php">Volver</a>

        <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST">
           <?php include 'formulario_categoria.php' ?>
            <input type="submit" value="Guardar Cambios" class="boton boton-verde">
        </form>

    </main>

    <?php incluirTemplate('footer'); ?>