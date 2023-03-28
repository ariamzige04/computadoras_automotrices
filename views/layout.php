<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;

    if(!isset($inicio)) {
        $inicio = false;
    } 
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title;
    
    ?>
    <?php
    if(isset($compu_datos)) {
        echo $compu_datos = "Computadora " . t($compu->marca) . ", modelo " . t($compu->modelo ) . ", año " . t($compu->ano ) . ", número de parte " . t($compu->numero_parte) . ", precio $" . t($compu->precio);
    } ?>
    </title>

    <meta name="description" content="<?php 
    echo $descripcion;?><?php
    if(isset($compu_datos)) {
        echo $compu_datos = "Venta de Computadora " . t($compu->marca) . ", modelo " . t($compu->modelo ) . ", año " . t($compu->ano ) . ", número de parte " . t($compu->numero_parte) . ", precio $" . t($compu->precio);
    } ?>
    ">

    <link rel="stylesheet" href="/build/css/app.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
    
    <?php if(isset($animacion)): ?>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?php endif; ?>
</head>

<body class="body fijar-body">
<style>
        .loader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: 1s all;
            opacity: 0;
        }
        
        .loader.show {
            opacity: 1;
        }
        
        .loader .spin {
            border: .5rem solid rgba(255, 255, 255, 0.534);
            border-top-color: #212121;
            border-radius: 50%;
            width: 10rem;
            height: 10rem;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }
    </style>

    <!-- Loading HTML -->
    <div class="loader show">
        <div class="spin"></div>
    </div>

    <header class="header ">

        <div class=" barra-nav">
            <div class="contenedor barra-nav-hijo">

                <div class="logo">
                    <a href="/">
                        <img loading="lazy" src="/build/img/logo.svg" alt="Computadoras Automotrices">
                    </a>

                    <div class="flex-centrar navegacion-iconos-padre">
                        <nav class="nav">

                            <div class="enlace-navegacion">
                                <a class="nav-hijos" href="/">Inicio</a>
                                <div class="l"></div>
                            </div>

                            <div class="enlace-navegacion">
                                <a class="nav-hijos" href="/tienda_en_linea">Computadoras</a>
                                <div class="l"></div>
                            </div>

                            <div class="enlace-navegacion">
                                <a class="nav-hijos" href="/contacto">Contacto</a>
                                <div class="l"></div>
                            </div>

                            <?php if($auth): ?>
                            <div class="enlace-navegacion">
                                <a class="nav-hijos" href="/logout">Cerrar Sesión</a>
                                <div class="l"></div>
                            </div>
                            <?php endif; ?>

                        </nav>
                    </div>
                </div>
                <div class="iconos-nav">


                    <div class="hamburguesa" id="hamburguesa">
                        <div class="menu-btn">
                            <div class="menu-btn-burger"></div>
                        </div>
                    </div>

                </div>


            </div>
        </div>

        <!-- No quitar -->
        <div class="pantallaCompleta"></div>

      



    </header>


    <?php echo $contenido; ?>


    <footer class="footer seccion flex-centrar">
        <p>Computadoras Automotrices <?php echo date('Y'); ?> </p>
    </footer>

   

    <script type="text/javascript" src="/build/js/app.js"></script>


    <?php if(isset($contador)): ?>
        <script type="text/javascript" src="/build/js/contador.js"></script>
    <?php endif; ?>


    <?php if(isset($buscador_filtrar_img_lazy)): ?>
        <script type="text/javascript" src="/build/js/buscador_filtrar.js"></script>
    <?php endif; ?>


    <?php if(isset($animacion)): ?>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <?php endif; ?>
   


</body>

</html>