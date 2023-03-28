<main class=" contenedor-compu seccion-uno " data-aos="fade-up">
    <h1 class="text-left">Computadora
        <span>
            <?php echo trim($compu->marca);?>,
        </span>
        modelo:
        <span>
            <?php echo trim($compu->modelo);?>,
        </span>
        año:
        <span>
            <?php echo trim($compu->ano);?>,
        </span>
        número de parte:
        <span>
            <?php echo trim($compu->numero_parte);?>,
        </span>
        precio:
        <span>
            $<?php echo trim($compu->precio);?>
        </span>
    </h1>
    <div>

        <img loading="lazy" class="imagen-anuncio" src="/imagenes/<?php echo $compu->imagen; ?>" alt="Computadora <?php echo $compu->marca . $compu->modelo . $compu->litros . $compu->ano . $compu->numero_parte; ?> ">
        <div >

            <p>Marca: <span><?php echo $compu->marca;?></span> </p>
            <p>Modelo: <span><?php echo $compu->modelo; ?></span></p>
            <p>Litros: <span><?php echo $compu->litros; ?></span></p>
            <p>Año: <span><?php echo $compu->ano; ?></span></p>
            <p>Número de parte: <span><?php echo $compu->numero_parte; ?></span></p>

            <div class="carrito-precio">
                <!-- <a>
                    <img loading="lazy" src="/build/img/carrito.svg" alt="imagen-carrito">
                </a> -->
                <p>$<?php echo $compu->precio; ?><span>mxn</span> </p>
            </div>
            <a href="https://wa.me/528119385235?text=Hola,%20necesitó%20una%20Computadora%20<?php echo trim($compu->marca);?>,%20modelo:%20<?php echo trim($compu->modelo);?>,%20año:%20<?php echo trim($compu->ano);?>,%20número de parte:%20<?php echo trim($compu->numero_parte);?>,%20precio:%20$<?php echo trim($compu->precio);?>"
                class=" boton-whatsapp imagen-invertir-color" target="_blank" rel="noopener noreferrer">

                <img loading="lazy" src="/build/img/whatsapp.svg" alt="Ir a WhatsApp">
                Ir a WhatsApp

            </a>


        </div>

    </div>



</main>

<!-- <div class="contenedor">
    <div id="paypal-button-container"></div> 

</div> -->