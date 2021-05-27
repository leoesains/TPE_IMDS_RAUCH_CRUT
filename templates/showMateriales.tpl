{include 'header.tpl'}

<div class="materiales_aceptados">
{foreach from=$materiales item=material}   
         <a href="materiales/{$material->id_material}" ><img class=redondo src="{$material->img}"></a>
{/foreach}
<button class="btn-volver"><a href="{$base_url}home"> Volver </a></button>
</div>
{include 'footer.tpl'}