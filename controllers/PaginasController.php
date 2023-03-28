<?php

namespace Controllers;
use MVC\Router;
use Model\Compu;
// use Model\N_compu;

use PHPMailer\PHPMailer\PHPMailer;

class PaginasController {
    public static function index( Router $router ) {
            
        $router->render('paginas/index', [
            'footer' => false,
            'descripcion' =>  "Venta, reparación y programación de computadoras automotrices. Vendemos a toda la república mexicana. Nuestro trabajo está garantizado y brindaremos lo mejor de nosotros",
            'title' => "Computadoras Automotrices | Inicio ",
            'contador' => true,
            'animacion' => true

        ]);
    }

    

     public static function tienda_en_linea( Router $router ) {

         $computadoras = Compu::all();
        //   $nombre_compu = N_compu::all();
        //   $compu_datos = false;

         $router->render('paginas/tienda_en_linea', [
            'computadoras' => $computadoras,
        //   'nombre_compu' => $nombre_compu,
            'footer' => false,
            'descripcion' => "Venta de computadoras automotrices como Nissan, Ford, Chevrolet, Dodge, Chrysler, Jeep y entre otras marcas.",
            'title' => "Computadoras Automotrices | Tienda en Línea",
            // 'compu_datos' => false,
            'buscador_filtrar_img_lazy' => true,
            'animacion' => true


         ]);
     }

     public static function compu(Router $router) {
         $id = validarORedireccionar('/tienda_en_linea');
        //   $compu_datos = true;
        //   Obtener los datos de la compu
         $compu = Compu::find($id);
        
         $router->render('paginas/compu', [
            'compu' => $compu,
            'footer' => false,
            'descripcion' => false,
            'title' => false,
            'compu_datos' => true,
            'animacion' => true


         ]);
     }

    //  public static function pago_finalizado(Router $router) {
       
       
    //     $router->render('paginas/pago_finalizado', [
    //         'footer' => false,
    //         'descripcion' => "hola pago_finalizado",
    //         'title' => "| Pago Finalizado"


    //     ]);
    // }

    public static function pagina_no_encontrada( Router $router ) {
            
        $router->render('paginas/pagina_no_encontrada', [
            'footer' => false,
            'descripcion' =>  "Página no encontrada, error 404",
            'title' => "Página no encontrada (404) | Computadoras Automotrices",
            'contador' => true,
            'animacion' => true,

        ]);
    }

     public static function contacto( Router $router ) {
         $mensaje = null;

         if($_SERVER['REQUEST_METHOD'] === 'POST') {


            //   Validar 
             $respuestas = $_POST['contacto'];
        
            //   create a new object
             $mail = new PHPMailer();
            //   configure an SMTP
             $mail->isSMTP();

            //  $mail->Host = 'smtp.mailtrap.io';
            //  $mail->SMTPAuth = true;
            //  $mail->Username = '79f6e8667dadbf';
            //  $mail->Password = '25e021030297ef';
            //  $mail->SMTPSecure = 'tls';
            //  $mail->Port = 2525;

            $mail->Host = 'p3plzcpnl491158.prod.phx3.secureserver.net';
            $mail->SMTPAuth = true;
            $mail->Username = 'admin@computadorasautomotrices.com.mx';
            $mail->Password = '[rR}qE(K*yF3';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            //  configurar el contenido del email
             $mail->setFrom('cliente@computadorasautomotrices.com.mx', $respuestas['nombre']);//quien envia elemail setFrom
             $mail->addAddress('admin@computadorasautomotrices.com.mx', 'computadorasautomotrices.com.mx');//que email va a llegar ese correo addAddres (la direccion donde se va a recibir) (quien lo recibe...)
             $mail->Subject = 'Tienes un Nuevo Correo';

            //   Set HTML 
            //  Habilitar HTML
             $mail->isHTML(TRUE);
             $mail->CharSet = 'UTF-8'; 

            //  definir el contenido
             $contenido = '<html>';
             $contenido .= "<p><strong>Has Recibido un Correo:</strong></p>";

             $contenido .= "<p>Nombre: " . $respuestas['nombre'] . "</p>";

             $contenido .= "<p>Apellido: " . $respuestas['apellido'] . "</p>";

             $contenido .= "<p>Correo: " . $respuestas['correo'] . "</p>";

             $contenido .= "<p>Su teléfono es: " .  $respuestas['telefono'] ." </p>";

             $contenido .= "<p>Mensaje: " . $respuestas['mensaje'] . "</p>";

             $contenido .= '</html>';
             $mail->Body = $contenido;
             $mail->AltBody = 'Esto es texto alternativo';

            

            //   send the message
            //  send (es si se envia, has esto...) (si tiene ! es lo opuesto)
             if(!$mail->send()){
                 $mensaje = 'Hubo un Error... intente de nuevo';
             } else {
                 $mensaje = 'Mensaje enviado Correctamente';
             }

         }
        
         $router->render('paginas/contacto', [
             'mensaje' => $mensaje,
             'footer' => false,
             'descripcion' => "Ofrecemos un servicio automotriz profesional, calificado y honesto al mejor precio. Pregunta por la computadora automotriz que estás buscando. Comunícate por las siguientes redes sociales, estaremos a su servicio.",
             'title' => "Computadoras Automotrices | Contacto",
            'animacion' => true




         ]);
     }
}