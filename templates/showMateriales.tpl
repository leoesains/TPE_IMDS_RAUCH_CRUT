{include 'header.tpl'}

<div class="materiales_aceptados">
    <div>
        {foreach from=$materiales item=material}   
                <a href="materiales/{$material->id_material}" ><img class="btn_material" src="{$material->img}"></a>
        {/foreach}
    </div>
    <button class="btn-volver"><a href="{$base_url}home"> Volver </a></button>
</div>

{include 'footer.tpl'}