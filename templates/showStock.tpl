{include 'header.tpl'}
<div class="container-stock">
    <h1 class="titleAvisoDeRetito">Stock</h1>
    <h4 class="texto-centrado">Selecciona un cartonero para ver los materiales recolectados por él</h4>
    <select class="input bloque-centrado" name="stockCartonero">
                <option hidden selected>Nombre del Cartonero</option>
                {foreach from=$cartoneros item=cartonero} 
                    <option value="{$cartonero->dni_cartonero}">{$cartonero->apellido}, {$cartonero->nombre}</option>
                {/foreach}
    </select>
</div>


<button class="btn-volver"><a href="{$base_url}admin"> Volver </a></button>

{include 'footerAdmin.tpl'}