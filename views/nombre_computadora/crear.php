<main class="contenedor seccion-sep-refact">
    <h1>Crear Marca de Computadora</h1>

    <a href="/admin" class="boton boton-gris">Volver</a>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>    

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <?php include __DIR__ . '/formulario.php'; ?>
        <input type="submit" value="Crear Nombre de Computadora" class="boton boton-rojo">
    </form>
</main>