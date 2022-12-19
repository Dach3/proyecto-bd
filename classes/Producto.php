<?php
namespace App;

class Producto extends ActiveRecord {
    protected static $tabla = 'productos';
    protected static $columnasDB = ['id', 'nombre', 'descripcion', 'precio', 'stock', 'añadido','id_categoria', 'imagen'];

    public $id;
    public $nombre;
    public $descripcion;
    public $precio;
    public $stock;
    public $añadido;
    public $id_categoria;
    public $imagen;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->stock = $args['stock'] ?? '';
        $this->añadido = date('Y/m/d');
        $this->id_categoria = $args['id_categoria'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
    }

    public function validar() {
        if(!$this->nombre){
            self::$errores[] = "Debes añadir un nombre";
        }
        if(!$this->precio){
            self::$errores[] = "Debes añadir un precio";
        }
        if(!$this->descripcion ){
            self::$errores[] = "Debes añadir una descripcion";
        }
        if(!$this->stock){
            self::$errores[] = "Debes añadir el stock";
        }
        if(!$this->id_categoria){
            self::$errores[] = "Debes añadir una categoria";
        }
        if(!$this->imagen){
            self::$errores[] = "La imagen es obligatoria";
        }
        return self::$errores;
    }
} 