<?php 

namespace Controllers;

use MVC\Router;
use Model\Admin;

class LoginController {
    public static function login( Router $router) {

        $errores = [];
        



        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $auth = new Admin($_POST);
            $errores = $auth->validar();
        
            if(empty($errores)) {
                //Verificar si el usuario existe
                $resultado = $auth->existeUsuario();
     
                
                if( !$resultado ) {
                    //Verificar si el usuario o no (mensaje de error)
                    $errores = Admin::getErrores();
                } else {
                    //Verificar el password
                    $auth->comprobarPassword($resultado);

                    if($auth->autenticado) {
                        //Autenticar al usuario
                       $auth->autenticar();
                    } else {
                        //Password incorrecto (mensaje de error)
                        $errores =Admin::getErrores();
                    }
                }
            }
        }

        $router->render('auth/login', [
            'errores' => $errores,
            'footer' => true,
            'descripcion' => "Login de Computadoras Automotrices ",
            'title' => "Computadoras Automotrices | Login",
            'animacion' => true


        ]); 
    }

    public static function logout() {
        session_start();
        //SESSION arreglo vacio (vacia el arreglo anterior que tenia los datos del email y password)
        $_SESSION = [];
        header('Location: /');
    }
}