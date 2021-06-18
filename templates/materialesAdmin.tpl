{include 'header.tpl'}
<div class="tablaMateriales">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nombre Material</th>
          <th scope="col">Forma de Entrega</th>
          <th scope="col">Eliminar</th>
          <th scope="col">Actualizar</th>
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
            <td>
              <button class="btn-volver"><a href="admin/materiales/eliminar/{$material->id_material}"> Eliminar </a></button>
            </td>
            <td>
              <button class="btn-volver"><a href="admin/materiales/actualizar/{$material->id_material}"> Actualizar </a></button>
            </td>
          </tr>
        {/foreach}
      </tbody>
    </table>

    <button class="btn-agregar">
      <a href="admin/materiales/formAgregar">Agregar Material</a>
    </button>

</div>
{include 'footerAdmin.tpl'}