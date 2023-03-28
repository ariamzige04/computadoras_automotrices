<?php

namespace Model;

class N_compu extends ActiveRecord {
    // Base DE DATOS
    protected static $tabla = 'nombre_compu';
    protected static $columnasDB = ['id', 'n_compu'];
    
    public $id;
    public $n_compu;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->n_compu = $args['n_compu'] ?? '';

    }

    public function validar() {
        if(!$this->n_compu) {
            self::$errores[] = "El Nombre de la Computadora es Obligatorio";
        }

      

        return self::$errores;
    }

}