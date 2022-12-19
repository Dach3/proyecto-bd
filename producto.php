<?php 
include_once 'includes/config/db.php';

class Producto extends DB {
    
    function __construct() {
        parent::__construct();
    }
    
    public function get($id) {
        $query = $this->connect()->prepare('SELECT * FROM productos WHERE id = :id LIMIT 0,12');
        $query->execute(['id' => $id]);

        $row = $query->fetch();

        return [
            'id'            => $row['id'],
            'nombre'        => $row['nombre'],
            'descripcion'   => $row['descripcion'],
            'precio'        => $row['precio'],
            'stock'         => $row['stock'],
            'id_categoria'  => $row['id_categoria'],
            'imagen'        => $row['imagen'],
        ];
    }

    public function getItemsByCategory($id_categoria) {
        $query = $this->connect()->prepare('SELECT * FROM productos WHERE id_categoria = :cat LIMIT 0,12');
        $query->execute(['cat' => $id_categoria]);

        $items = [];

        while($row = $query->fetch(PDO::FETCH_ASSOC)) {

            $item = [
                'id'            => $row['id'],
                'nombre'        => $row['nombre'],
                'descripcion'   => $row['descripcion'],
                'precio'        => $row['precio'],
                'stock'         => $row['stock'],
                'id_categoria'  => $row['id_categoria'],
                'imagen'        => $row['imagen'],
            ];

            array_push($items, $item);
        }
        return $items;
    }
}

?>