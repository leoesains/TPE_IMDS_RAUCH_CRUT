{include 'header.tpl'}

<div class="vistaStock">
    <div class="container-stock">
        <h1 class="titleAvisoDeRetiro">Stock</h1>
        <h3 class="texto-centrado">Selecciona un cartonero para ver los materiales recolectados por él</h3>
        <select class="input bloque-centrado" id="stockCartonero">
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
</div>

{include 'footerAdmin.tpl'}