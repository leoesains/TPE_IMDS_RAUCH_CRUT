{include 'header.tpl'}

<div class="tablaMateriales">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Dirección</th>
          <th scope="col">Teléfono</th>
          <th scope="col">Email</th>
          <th scope="col">Franja Horaria</th>
          <th scope="col">Volumen</th>
          <th scope="col">Foto</th>
          <th scope="col">Estado</th>
          <th scope="col">Fecha de Entrega</th>

        </tr>
      </thead>
      <tbody>
      {foreach from=$avisos item=aviso}   
          <tr >
            <td>
              {$aviso->nombre}
            </td>
            <td>
              {$aviso->apellido}
            </td>
            <td>
              {$aviso->direccion}
            </td>
            <td>
              {$aviso->telefono}
            </td>
            <td>
              {$aviso->email}
            </td>
            <td>
              {$aviso->franja_horaria}
            </td>
            <td>
              {$aviso->volumen}
            </td>
            <td>
              <img src="{$aviso->fotografia}">
            </td>
            <td>
              {$aviso->estado}
            </td>
            <td>
              {$aviso->fecha_entrega}
            </td>
          </tr>
        {/foreach}
      </tbody>
    </table>

<button class="btn-agregar">
    <a href="admin">Volver</a>
</button>
</div>
  
{include 'footerAdmin.tpl'}