{include 'header.tpl'}

<div class="materiales_aceptados">
{foreach from=$materiales item=material}   
        {if {$material->nombre}=="Carton"} 
                <a href="materiales/{$material->id_material}"><button class="redondo carton"></button></a>
        {/if}
        {if {$material->nombre}=="Plastico"} 
                <a href="materiales/{$material->id_material}"><button class="redondo plastico"></button></a>
        {/if}
        {if {$material->nombre}=="Lata"} 
                <a href="materiales/{$material->id_material}"><button class="redondo lata"></button></a>
        {/if}
        {*<a href="materiales/{$material->id_material}"><button class="redondo">{$material->nombre}</button></a>*}
{/foreach}
</div>
{include 'footer.tpl'}