{include 'header.tpl'}

<p><b>MATERIALES</b></p>

{foreach from=$materiales item=material}   
        <tr >
        <td>
        {$material->nombre}
        </td>
        
        </tr>
{/foreach}
<h6><a class="btn btn-danger centrar btn_alta" href="home"><b>Volver</b></a></h6>

{include 'footer.tpl'}