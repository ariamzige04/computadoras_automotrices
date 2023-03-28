<?php

namespace Model;

class Compu extends ActiveRecord {

    // Base DE DATOS
    protected static $tabla = 'computadoras';
    protected static $columnasDB = ['id', 'modelo', 'ano', 'precio', 'imagen', 'numero_parte', 'creado', 'litros', 'marca'];

    

    public $id;
    public $modelo;
    public $ano;
    public $precio;
    public $imagen;
    public $numero_parte;
    public $creado;
    public $n_compu;
    public $litros;
    public $marca;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->modelo = $args['modelo'] ?? '';
        $this->ano = $args['ano'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->numero_parte = $args['numero_parte'] ?? '';

        $this->creado = date('Y/m/d');
        // $this->n_compu = $args['n_compu'] ?? '';
        $this->litros = $args['litros'] ?? '';
        $this->marca = $args['marca'] ?? '';

    }

    public function validar() {


        if(!$this->modelo) {
            self::$errores[] = 'Debes añadir el nombre del Modelo';
        }

        if(!$this->ano) {
            self::$errores[] = 'Debes añadir el Año';
        }

        if(!$this->precio) {
            self::$errores[] = 'El precio es Obligatorio';
        }

        if(!$this->numero_parte) {
            self::$errores[] = 'Debes añadir el número de parte';
        }

        if(!$this->id )  {
            $this->validarImagen();
        }
        // if(!$this->n_compu) {
        //     self::$errores[] = 'Debes añadir la Marca de computadora';
        // }

        if(!$this->litros) {
            self::$errores[] = 'Debes añadir los Litros';
        }

        if(!$this->marca) {
            self::$errores[] = 'Debes añadir la Marca de la Computadora';
        }
        return self::$errores;
    }

    public function validarImagen() {
        if(!$this->imagen ) {
            self::$errores[] = 'La Imagen es Obligatoria';
        }
    }

}