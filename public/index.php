<?php 
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../includes/app.php';


use MVC\Router;
use Controllers\CompuController;
// use Controllers\NombreCompuController;
use Controllers\PaginasController;
use Controllers\LoginController;

$router = new Router();

//Zona privada ------------
$router->get('/admin', [CompuController::class, 'index']);
$router->get('/computadoras/crear', [CompuController::class, 'crear']);
$router->post('/computadoras/crear', [CompuController::class, 'crear']);
$router->get('/computadoras/actualizar', [CompuController::class, 'actualizar']);
$router->post('/computadoras/actualizar', [CompuController::class, 'actualizar']);
$router->post('/computadoras/eliminar', [CompuController::class, 'eliminar']);

//Zona Nombre Computadora
// $router->get('/nombre_computadora', [NombreCompuController::class, 'index']);
// $router->get('/nombre_computadora/crear', [NombreCompuController::class, 'crear']);
// $router->post('/nombre_computadora/crear', [NombreCompuController::class, 'crear']);
// $router->get('/nombre_computadora/actualizar', [NombreCompuController::class, 'actualizar']);
// $router->post('/nombre_computadora/actualizar', [NombreCompuController::class, 'actualizar']);
// $router->post('/nombre_computadora/eliminar', [NombreCompuController::class, 'eliminar']);
//FIN de Zona privada ------------

//Zona publica
$router->get('/', [PaginasController::class, 'index']);
// $router->get('/nosotros', [PaginasController::class, 'nosotros']);
$router->get('/tienda_en_linea', [PaginasController::class, 'tienda_en_linea']);//uno
$router->get('/compu', [PaginasController::class, 'compu']);//dos
$router->get('/contacto', [PaginasController::class, 'contacto']);
$router->post('/contacto', [PaginasController::class, 'contacto']);
$router->get('/pagina_no_encontrada', [PaginasController::class, 'pagina_no_encontrada']);

// $router->get('/pago_finalizado', [PaginasController::class, 'pago_finalizado']);


//Login y Autenticacion 
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();