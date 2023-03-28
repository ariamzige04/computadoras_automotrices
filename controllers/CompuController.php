<?php 

namespace Controllers;

use MVC\Router;
use Model\Compu;
// use Model\N_compu;

use Intervention\Image\ImageManagerStatic as Image;

class CompuController  {
    
    public static function index(Router $router) {
        $computadoras = Compu::all();
        // $nombre_compu = N_compu::all();

        // Muestra mensaje condicional
        $resultado = $_GET['resultado'] ?? null;

        $router->render('computadoras/index', [
            'computadoras' => $computadoras,
            // 'nombre_compu' => $nombre_compu,
            'resultado' => $resultado,
            'footer' => false,
            'descripcion' => "Hola Admin",
            'title' => "Computadoras Automotrices | Admin",
            'buscador_filtrar_img_lazy' => true,
            'animacion' => true


        ]);
    }

    public static function crear(Router $router) {

        $errores = Compu::getErrores();
        $compu = new Compu;
        // $nombre_compu = N_compu::all();


        // Ejecutar el código después de que el usuario envia el formulario
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            /** Crea una nueva instancia */
            $compu = new Compu($_POST['compu']);
            
            // Generar un nombre único
            $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";


            // Setear la imagen
            // Realiza un resize a la imagen con intervention
            if($_FILES['compu']['tmp_name']['imagen']) {
                $image = Image::make($_FILES['compu']['tmp_name']['imagen'])->fit(800,600);
                $compu->setImagen($nombreImagen);

            }

            // Validar
            $errores = $compu->validar();
            if(empty($errores)) {

                // Crear la carpeta para subir imagenes
                if(!is_dir(CARPETA_IMAGENES)) {
                    mkdir(CARPETA_IMAGENES);
                }

                // Guarda la imagen en el servidor
                $image->save(CARPETA_IMAGENES . $nombreImagen);

                // Guarda en la base de datos
                $resultado = $compu->guardar();

                if($resultado) {
                    header('location: /admin?resultado=1');
                }
            }

        }

        $router->render('computadoras/crear', [
            'errores' => $errores,
            'compu' => $compu,
            // 'nombre_compu' => $nombre_compu
            'footer' => false,
            'descripcion' => "Hola Admin",
            'title' => "Crear Computadora Automotriz ",
            'animacion' => true


        ]);
    }

    public static function actualizar(Router $router) {

        $id = validarORedireccionar('/computadoras');

        // Obtener los datos de la compu
        $compu = Compu::find($id);

        // Consultar para obtener los n_compues
        // $nombre_compu = N_compu::all();

        // Arreglo con mensajes de errores
        $errores = Compu::getErrores();

        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

                // Asignar los atributos
                $args = $_POST['compu'];

                $compu->sincronizar($args);

                // Validación
                $errores = $compu->validar();

                // Subida de archivos
                // Generar un nombre único
                $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

                if($_FILES['compu']['tmp_name']['imagen']) {
                    $image = Image::make($_FILES['compu']['tmp_name']['imagen'])->fit(800,600);
                    $compu->setImagen($nombreImagen);
                }


                
                if(empty($errores)) {
                    // Almacenar la imagen
                    if($_FILES['compu']['tmp_name']['imagen']) {
                        $image->save(CARPETA_IMAGENES . $nombreImagen);
                    }

                    // Guarda en la base de datos
                    $resultado = $compu->guardar();
                    if($resultado) {
                        header('location: /admin?resultado=2');
                    }
                }

        }

        $router->render('computadoras/actualizar', [
            'compu' => $compu,
            // 'nombre_compu' => $nombre_compu,
            'errores' => $errores,
            'footer' => false,
            'descripcion' => "Hola Admin",
            'title' => "Actualizar Computadora Automotriz",
            'animacion' => true

        ]);
    }

    public static function eliminar(Router $router) {

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tipo = $_POST['tipo'];

            // peticiones validas
            if(validarTipoContenido($tipo) ) {
                // Leer el id
                $id = $_POST['id'];
                $id = filter_var($id, FILTER_VALIDATE_INT);
    
                // encontrar y eliminar la compu
                $compu = Compu::find($id);
                $resultado = $compu->eliminar();
                // Redireccionar
                if($resultado) {
                    header('location: /admin?resultado=3');
                }
            }
        }
    }

}