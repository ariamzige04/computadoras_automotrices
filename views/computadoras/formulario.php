<fieldset class="margin-top">

    <div class="form-input">
        <label for="marca">Marca: (Nissan Ford Chevrolet Dodge Chrysler Jeep)</label>
        <input type="text" id="marca" name="compu[marca]" placeholder="Marca de la Computadora"
            value="<?php echo s(t($compu->marca)); ?>">
    </div>

    <div class="form-input">
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="compu[modelo]" placeholder="Modelo de la Computadora"
            value="<?php echo s(t($compu->modelo)); ?>">
    </div>

    <div class="form-input">
        <label for="litros">Litros:</label>
        <input type="text" id="litros" name="compu[litros]" placeholder="Litros de la Computadora"
            value="<?php echo s(t($compu->litros)); ?>">
    </div>

    <div class="form-input">
        <label for="ano">Año:</label>
        <input type="text" id="ano" name="compu[ano]" placeholder="Año del Auto" value="<?php echo s(t($compu->ano)); ?>">
    </div>

    <div class="form-input">
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="compu[precio]" placeholder="Precio de la Computadora"
            value="<?php echo s(t($compu->precio)); ?>">
    </div>

    <div class="form-input">
        <label for="imagen">Imagen:</label>
        <input type="file" id="imagen" accept="image/jpeg, image/png, image/jpg" name="compu[imagen]">

        <?php if($compu->imagen) { ?>
        <img loading="lazy" src="/imagenes/<?php echo $compu->imagen ?>" class="imagen-small">
        <?php } ?>
    </div>

    <div class="form-input">
        <label for="numero_parte">Número de parte:</label>
        <input type="text" id="numero_parte" name="compu[numero_parte]" placeholder="Número de parte"
            value="<?php echo s(t($compu->numero_parte)); ?>">
    </div>



</fieldset>