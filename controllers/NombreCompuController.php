<?php

namespace Controllers;

use MVC\Router;
use Model\N_compu;

class NombreCompuController {

    public static function index(Router $router) {
        $nombre_compu = N_compu::all();

        // Muestra mensaje condicional
        $resultado = $_GET['resultado'] ?? null;

        $router->render('nombre_computadora/index', [
            'nombre_compu' => $nombre_compu,
            'resultado' => $resultado
        ]);
    }

    public static function crear(Router $router) {
        $errores = N_compu::getErrores();
        $n_compu = new N_compu;

        // Ejecutar el código después de que el usuario envia el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            /** Crea una nueva instancia */
            $n_compu = new N_compu($_POST['n_compu']);
            // Validar
            $errores = $n_compu->validar();


            if(empty($errores)) {

                // Guarda en la base de datos
                $resultado = $n_compu->guardar();

                if($resultado) {
                    header('location: /nombre_computadora');
                }
            }
        }

        $router->render('nombre_computadora/crear', [
            'errores' => $errores,
            'n_compu' => $n_compu
        ]);
    }

    public static function actualizar(Router $router) {
        $id = validarORedireccionar('/admin');

        // Obtener los datos de la compu
        $n_compu = N_compu::find($id);

        // Arreglo con mensajes de errores
        $errores = N_compu::getErrores();

        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

                // Asignar los atributos
                $args = $_POST['n_compu'];
                
                $n_compu->sincronizar($args);

                // Validación
                $errores = $n_compu->validar();
                
                if(empty($errores)) {

                    // Guarda en la base de datos
                    $resultado = $n_compu->guardar();

                    if($resultado) {
                        header('location: /nombre_computadora');
                    }
                }
        }

        $router->render('nombre_computadora/actualizar', [
            'n_compu' => $n_compu,
            'errores' => $errores
        ]);
    }

    public static function eliminar(Router $router) {
        // if($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     $tipo = $_POST['tipo'];
        //     // peticiones validas
        //     if(validarTipoContenido($tipo) ) {
        //         // Leer el id
        //         $id = $_POST['id'];

        //         $id = filter_var($id, FILTER_VALIDATE_INT);
    
        //         // encontrar y eliminar la compu
        //         $n_compu = N_compu::find($id);

        //         $resultado = $n_compu->eliminar();

        //         // Redireccionar
        //         if($resultado) {
        //             header('location: /admin');
        //         }
        //     }
        // }
    }
}