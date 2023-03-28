<main class="contenedor seccion-uno contenedor-formulario" data-aos="fade-up">
    <h1>Iniciar Sesión</h1>

    <?php foreach($errores as $error): ?>
    <div class="alerta error"><?php echo $error; ?></div>
    <?php endforeach; ?>

    <form method="POST" class="formulario " autocomplete="on" novalidate>
        <fieldset class="inputs">

            <div class="form-input">
                <label for="email">Correo</label>
                <input type="email" name="email" placeholder="Tu Correo" id="email">
            </div>

            <div class="form-input">
                <label for="password">Contraseña</label>
                <input type="password" current-password name="password" placeholder="Tu Contraseña" id="password">
            </div>

        </fieldset>

        <input type="submit" value="Iniciar Sesión" class=" boton-negro-block">
    </form>
</main>