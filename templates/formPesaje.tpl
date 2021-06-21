{include 'header.tpl'}

<div class="formPesaje">
    <form class="formInputsAviso" action="admin/pesaje" method="POST" enctype="multipart/form-data">
        <select class="input" name="pesoCartonero">
            <option hidden selected>Nombre del Cartonero</option>
            <option value="Esains, Leonardo">Esains, Leonardo</option>
            <option value="Esains, Sebastian">Esains, Sebastian</option>
            <option value="Loiza, Joaquín">Loiza, Joaquín</option>
            <option value="Oruezabal, Mauricio">Oruezabal, Mauricio</option>
            <option value="Miller, Eugenio">Miller, Eugenio</option>
        </select>
        <select class="input" name="pesoMaterial">
            <option hidden selected>Material</option>
            
            {foreach from=$materiales item=material} 
                <option value="{$material->nombre}">  
                    <a href="materiales/{$material->id_material}">{$material->nombre}</a>
                </option>
            {/foreach}
            
        </select>
        <div class="form-group">
            <input type="number" name="input_name" class="input"  placeholder="Ingrese el peso">
        </div>
        <div>
            <button class="btn-agregar">
                <a href="admin/pesaje">Agregar</a>
            </button>
            <button class="btn-agregar">
                <a href="admin/pesaje">Cancelar</a>
            </button>
        </div>
        <button class="btn-agregar">
        <a href="admin">Volver</a>
        </button>
    </form>
    
</div>

{include 'footerAdmin.tpl'}