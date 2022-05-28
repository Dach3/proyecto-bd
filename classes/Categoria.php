<?php
namespace App;

class Categoria extends ActiveRecord {
    protected static $tabla = 'categoria';
    protected static $columnasDB = ['id', 'nombre'];

    public $id;
    public $nombre;
  

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
    }

    public function validar() {
        if(!$this->nombre){
            self::$errores[] = "El nombre es obligatorio";
        }
        return self::$errores;
    }
}