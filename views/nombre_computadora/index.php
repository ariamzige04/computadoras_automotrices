<main class="contenedor ">
    <h1 class="seccion-sep-refact h1-admin"></h1>
    <?php 
        $mensaje = mostrarNotificacion( intval( $resultado) );
        if($mensaje) { ?>
        <p class="alerta exito"><?php echo s($mensaje); ?></p>
    <?php } 
    ?>



    <!-- <section class=" seccion-admin-buscar"> -->
        <a class="boton boton-gris" href="/admin">Regresar</a>


    <!-- </section> -->


        <div>
            <h1>Marcas de Computadoras Automotrices</h1>
            <p>No se pueden eliminar, es posible que este asignado a una computadora </p>
        </div>

        


</main>

<section class="contenedor-tabla">
    <table class="computadoras-tabla inline_grid">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
         
            </tr>
        </thead>

        <tbody class="tabla-admin">
            <!-- Mostrar los Resultados -->
            <?php foreach( $nombre_compu as $n_compu ): ?>
            <tr>
                <td><?php echo $n_compu->id; ?></td>
               
                <td><?php echo $n_compu->n_compu; ?></td>
             
                <td>
                    

                    <a href="nombre_computadora/actualizar?id=<?php echo $n_compu->id; ?>"
                        class="boton-amarillo-block">Actualizar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>