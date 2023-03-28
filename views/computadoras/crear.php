<main class="contenedor seccion-uno" data-aos="fade-up">
    <h1 class="text-left">Crear Computadora</h1>

    <a href="/admin" class=" boton-gris quitar-before">Volver</a>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>    

    <form class="formulario " method="POST" enctype="multipart/form-data">
        <?php include __DIR__ . '/formulario.php'; ?>
        <input type="submit" value="Crear Anuncio de Computadora" class=" boton-negro">
    </form>
</main>