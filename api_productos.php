<?php
include_once 'producto.php';

if(isset($_GET['id_categoria'])) {
    $id_categoria = $_GET['id_categoria'];

    if($id_categoria == '') {
        echo json_encode(['statuscode' => 400, 'response' => 'No existe esa categoria']);
    }else {
        $producto = new Producto();
        $items = $producto->getItemsByCategory($id_categoria);

        echo json_encode(['statuscode' => 200, 'items' => $items]);
    }
}else if(isset($_GET['get-item'])) {
    $id = $_GET['get-item'];

    if($id == '') {
        echo json_encode(['statuscode' => 400, 'response' => 'No hay valor para id']);
    }else {
        $producto = new Producto();
        $item = $producto ->get($id);
        echo json_encode(['statuscode' => 200, 'item' => $item]);
    }

}else {
    echo json_encode(['statuscode' => 400, 'response' => 'No hay accion']);
}
