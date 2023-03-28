<main class="contenedor seccion anuncios-computadoras cuatro-columnas-responsive" >

    <?php foreach($computadoras as $compu): ?>
    <div class=" ansCompus  filtrarCompu" data-aos="fade-up"  data-item="<?php echo strtolower(t($compu->marca)); ?>">
        <div class="contenedor-anuncio">

            <div class="img-anuncio">
                <img loading="lazy" class="imagen-anuncio lazyload" data-src="/imagenes/<?php echo $compu->imagen; ?>"
                    alt="Computadora <?php echo $compu->marca . $compu->modelo . $compu->litros . $compu->ano . $compu->numero_parte; ?>">
            </div>

            <p>Marca: <span><?php echo $compu->marca; ?></span></p>
            <p>Modelo: <span><?php echo $compu->modelo; ?></span></p>
            <p>Litros: <span><?php echo $compu->litros; ?></span></p>
            <p>Año: <span><?php echo $compu->ano; ?></span></p>
            <p>Número de Parte: <span><?php echo $compu->numero_parte; ?></span></p>

            <div class="carrito-precio">
                <!-- <a>
                    <img loading="lazy" class="lazyload" data-src="/build/img/carrito.svg" alt="imagen-carrito">
                </a> -->
                <p>$<?php echo $compu->precio; ?><span>mxn</span> </p>
            </div>
            <a href="compu?id=<?php echo $compu->id; ?>" class="boton-negro-block">
                Comprar
            </a>
        </div>

    </div>
    <?php endforeach; ?>




</main>

