<main class="contenedor seccion-uno" data-aos="fade-up">

    <?php if($mensaje) { ?>
    <p class="alerta exito"><?php echo $mensaje; ?></p>
    <?php } ?>

    <h1 class="text-left">¡Contáctanos!</h1>
    <p>Ofrecemos un servicio automotriz profesional, calificado y honesto al mejor precio. Comunícate por las siguientes redes sociales, estaremos a su servicio.</p>

    <div class="grid-tres-columnas-responsive">

        <div class=" red-social ">
            <img loading="lazy" src="/build/img/facebook.svg" alt="Facebook">
            <div class="contenido-red">
                <a href="https://www.facebook.com/carkeypcm/" title="Ir a Facebook" target="_blank"
                    rel="noopener noreferrer">
                    <p class="titulo-red">Facebook</p>
                    <p>Autotronica. Soluciones en Electronica Automotriz</p>
                </a>
            </div>
        </div>

        <div class=" red-social ">
            <img loading="lazy" src="/build/img/messenger.svg" alt="Messenger">
            <div class="contenido-red">
                <a href="https://m.me/carkeypcm/" title="Ir a Messenger" target="_blank" rel="noopener noreferrer">
                    <p class="titulo-red">Messenger</p>
                    <p>Autotronica. Soluciones en Electronica Automotriz</p>
                </a>
            </div>
        </div>

        <div class=" red-social ">
            <img loading="lazy" src="/build/img/whatsapp.svg" alt="Whatsapp">
            <div class="contenido-red">
                <a href="https://api.whatsapp.com/send?phone=+528119385235" title="Ir a WhatsApp" target="_blank"
                    rel="noopener noreferrer">
                    <p class="titulo-red">WhatsApp</p>
                    <p>8119385235</p>
                </a>
            </div>
        </div>

        <div class=" red-social ">
            <img loading="lazy" src="/build/img/instagram.svg" alt="Instagram">
            <div class="contenido-red">
                <a href="https://instagram.com/carkey_mty?igshid=1mus14gfdq5vo" title="Ir a Instagram" target="_blank"
                    rel="noopener noreferrer">
                    <p class="titulo-red">Instagram</p>
                    <p>carkey_mty</p>
                </a>
            </div>
        </div>

        <div class=" red-social ">
            <img loading="lazy" src="/build/img/telefono.svg" alt="Telefono">
            <div class="contenido-red">
                <a href="tel:+528119385235" title="Ir a Telefono" target="_blank" rel="noopener noreferrer">
                    <p class="titulo-red">Teléfono</p>
                    <p>8119385235</p>
                </a>
            </div>
        </div>

    </div>





</main>

<section class="contenedor-formulario seccion" data-aos="fade-up">
    <h2>Contacto </h2>

    <?php include 'formulario.php'; ?>
</section>