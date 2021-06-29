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

{include 'vue.js/stock.vue'}

<button class="btn-volver"><a href="{$base_url}admin"> Volver </a></button>

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="js/stock.js"></script>

{include 'footerAdmin.tpl'}