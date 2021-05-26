{include 'header.tpl'}
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nombre Material</th>
      <th scope="col">Forma de Entrega</th>
    </tr>
  </thead>
  <tbody>
   {foreach from=$materiales item=material}   
    <tr >
    <td>
    {$material->nombre}
    </td>
    <td>
    {$material->requerimiento_de_recibo}
    </td>
    </tr>
    {/foreach}
  </tbody>
</table>

{include 'footerHome.tpl'}