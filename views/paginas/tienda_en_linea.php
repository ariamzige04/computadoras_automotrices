<section class="contenedor seccion-uno seccion-venta-computadoras" data-aos="fade-up">


    <h1 class="text-left">Venta de Computadoras Automotrices</h1>
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

    <div class=" buscar-input ">
        <input id="search" type="search" placeholder="Buscar">
        <img loading="lazy" src="/build/img/buscador.svg" alt="Buscador">

    </div>


</section>

<?php include 'listado.php'; ?>

<section class="contenedor seccion dos-columnas-responsive no-encontrado" data-aos="fade-up">
        <img loading="lazy" class="lazyload" data-src="/build/img/cara-triste.svg"
            alt="¿No encontraste la computadora automotriz que buscabas?">

        <div class="flex-centrar column">
            <p>¿No encontraste lo que buscabas?</p>
            <a class=" boton-gris-block btn-flecha-negra" href="/contacto"> Contactar </a>
        </div>

</section>