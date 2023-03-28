<main class="contenedor seccion-uno" data-aos="fade-up">
    <h1>Administrador</h1>
    <?php 
        $mensaje = mostrarNotificacion( intval( $resultado) );
        if($mensaje) { ?>
    <p class="alerta exito"><?php echo s($mensaje); ?></p>
    <?php } 
    ?>

    <?php include __DIR__ . '/../navegacion.php'; ?>

</main>


<section class="contenedor  seccion-venta-computadoras" data-aos="fade-up">


    <p>Filtrar por:</p>

    <div class=" btn-computadoras-seccion grid-auto-minmax-6 ">

        <a data-filter="all" class="btn-seleccionado" title="Todos">
            Todo
        </a>

        <a data-filter="nissan" title="Nissan">
            <img loading="lazy" src="/build/img/nissan.svg" alt="Nissan">
        </a>

        <a data-filter="ford" title="Computadoras Ford">
            <img loading="lazy" src="/build/img/ford.svg" alt="Ford">
        </a>

        <a data-filter="chevrolet" title="Computadoras Chevrolet">
            <img loading="lazy" src="/build/img/chevrolet.svg" alt="Chevrolet">
        </a>

        <a data-filter="dodge" title="Computadoras Dodge">
            <img loading="lazy" src="/build/img/dodge.svg" alt="Dodge">
        </a>

        <a data-filter="chrysler" title="Computadoras Chrysler">
            <img loading="lazy" src="/build/img/chrysler.svg" alt="Chrysler">
        </a>

        <a data-filter="jeep" title="Computadoras Jeep">
            <img loading="lazy" src="/build/img/jeep.svg" alt="Jeep">
        </a>



    </div>

    <div class=" buscar-input">
        <input id="search" type="search" placeholder="Buscar">
        <img loading="lazy" src="/build/img/buscador.svg" alt="Buscador">

    </div>


</section>



<section class="contenedor-tabla seccion" data-aos="fade-up">
    <!-- <h2>Computadoras</h2> -->
    <table class="computadoras-tabla ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Litros</th>
                <th>Año</th>
                <th>Núm. Parte</th>
                <th>Precio</th>
                <th>Creado</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody class="tabla-admin seccion" id="mySection">
            <!-- Mostrar los Resultados -->


            <?php foreach( $computadoras as $compu ): ?>
            <tr class="filtrarCompu ansCompus"  data-item="<?php echo strtolower(t($compu->marca)); ?>">
                <td><?php echo $compu->id; ?></td>
                <td> <img loading="lazy" data-src="/imagenes/<?php echo $compu->imagen; ?>"
                        class="lazyload imagen-small" 
                        alt="Computadora <?php echo $compu->marca . $compu->modelo . $compu->litros . $compu->ano . $compu->numero_parte; ?>"> </td>


                <td> <?php echo $compu->marca; ?></td>

                <td> <?php echo $compu->modelo; ?></td>
                <td> <?php echo $compu->litros; ?></td>
                <td> <?php echo $compu->ano; ?></td>
                <td> <?php echo $compu->numero_parte; ?></td>
                <td>$ <?php echo $compu->precio; ?></td>
                <td> <?php echo $compu->creado; ?></td>
                <td>
                    <form method="POST" action="computadoras/eliminar" class="w-100">
                        <input type="hidden" name="id" value="<?php echo $compu->id; ?>">
                        <input type="hidden" name="tipo" value="compu">
                        <input type="submit" class="submit-negro w-100" value="Eliminar">
                    </form>

                    <a href="computadoras/actualizar?id=<?php echo $compu->id; ?>"
                        class="boton-gris-block quitar-before">Actualizar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>