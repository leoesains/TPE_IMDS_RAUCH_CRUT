{include 'header.tpl'}

<div class="formPesaje">
    <form class="formInputsAviso" action="admin/pesaje/add" method="POST" enctype="multipart/form-data">
        <select class="input" name="pesoCartonero">
            <option hidden selected>Nombre del Cartonero</option>
            {foreach from=$cartoneros item=cartonero} 
                <option value="{$cartonero->dni_cartonero}">{$cartonero->apellido}, {$cartonero->nombre}</option>
            {/foreach}
        </select>
        <select class="input" name="pesoMaterial">
            <option hidden selected>Material</option> 
            {foreach from=$materiales item=material} 
                <option value="{$material->id_material}">{$material->nombre}</a></option>
            {/foreach}     
        </select>
        <div class="form-group">
            <input type="number" name="peso" class="input"  placeholder="Ingrese el peso">
        </div>
        <div>
            <input type="submit" value="Agregar" class="btn-agregar">
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