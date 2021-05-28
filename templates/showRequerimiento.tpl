{include 'header.tpl'}

<div>
    <div class="circulo_requerimientos">
        <p>
            <b class="nombre_requerimiento">{$requerimiento->nombre}</b>
            <br> {$requerimiento->requerimiento_de_recibo}
        </p>
    </div>
</div>

<button class="btn-volver"><a href="{$base_url}materiales"> Volver </a></button>
{include 'footer.tpl'}