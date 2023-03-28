<form method="POST" action="/contacto" class="formulario">
    
    <fieldset>

        <div class="dos-columnas">

            <div class="form-input">
                <label for="nombre">Nombre:</label>
                <input 
                required 
                pattern="[A-Za-z ]+" 
                maxlength="15" 
                title="Escriba su Nombre, no se permite números, máximo 15 caracteres" 
                autocomplete="off"  
                type="text" 
                id="nombre" 
                placeholder="Su Nombre" 
                name="contacto[nombre]">
            </div>

            <div class="form-input">
                <label for=" apellido">Apellido:</label>
                <input 
                required 
                pattern="[A-Za-z ]+" 
                maxlength="15" 
                title="Escriba su Apellido, no se permite números, máximo 15 caracteres" 
                autocomplete="off"  
                type="text" 
                id="apellido" 
                placeholder="Su Apellido " 
                name="contacto[apellido]">
            </div>
        </div>

        <div class="form-input">
            <label for="telefono">Teléfono:</label>
            <input 
            required 
            pattern="[0-9]+{10}" 
            maxlength="10" 
            title="Escriba su Teléfono, no se permite letras, escriba 10 numeros" 
            autocomplete="off" 
            type="tel" 
            id="telefono" 
            placeholder="Su Teléfono " 
            name="contacto[telefono]">
        </div>

        <div class="form-input">
            <label for="correo">Correo:</label>
            <input 
            required 
            pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"
            maxlength="30" 
            title="Escriba su Correo, debe de tener un @ y con su respectiva terminacion" 
            autocomplete="off" 
            type="text" 
            id="correo" 
            placeholder="Su correo" 
            name="contacto[correo]">
        </div>

        <div class="form-input">
            <label for="mensaje">Mensaje:</label>
            <textarea 
            required 
            pattern="[A-Za-z 0-9]+" 
            maxlength="100" 
            title="Escriba su Mensaje, máximo 100 caracteres " 
            autocomplete="off" 
            id="mensaje" 
            placeholder="Escriba su mensaje" 
            name="contacto[mensaje]">
            </textarea>
        </div>

    </fieldset>
    <input type="submit" value="Enviar" title="Enviar Formulario" class=" submit-negro">
</form>