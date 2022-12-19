<?php
namespace App;

class Registro extends ActiveRecord {
    protected static $tabla = 'registroventa';
    protected static $columnasDB = ['id', 'nombre', 'precio', 'imagen', 'cantidad'];

    public $id;
    public $nombre;
    public $precio;
    public $imagen;
    public $cantidad;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->cantidad = $args['cantidad'] ?? '';
    }

    public function validar() {
        if(!$this->nombre){
            self::$errores[] = "Debes añadir un nombre";
        }
        if(!$this->precio){
            self::$errores[] = "Debes añadir un precio";
        }
        if(!$this->imagen){
            self::$errores[] = "La imagen es obligatoria";
        }
        if(!$this->cantidad){
            self::$errores[] = "Debes añadir una cantidad";
        }
        return self::$errores;
    }
} 