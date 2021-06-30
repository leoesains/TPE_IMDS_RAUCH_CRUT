{include 'header.tpl'}
    <div class="tablaMateriales">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">DNI</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Dirección</th>
          <th scope="col">Fecha de Nac.</th>
          <th scope="col">Vehículo</th>
          <th scope="col">Eliminar</th>
          <th scope="col">Editar</th>
        </tr>
      </thead>
      <tbody>
      {foreach from=$cartoneros item=cartonero}   
          <tr >
            <td>
              {$cartonero->dni_cartonero}
            </td>
            <td>
              {$cartonero->nombre}
            </td>
            <td>
              {$cartonero->apellido}
            </td>
            <td>
              {$cartonero->direccion}
            </td>
            <td>
              {$cartonero->fecha_nacimiento}
            </td>
            <td>
              {$cartonero->tipo_vehiculo}
            </td>
            <td>
              <button class="btn-volver"><a href="admin/cartoneros/eliminar/{$cartonero->dni_cartonero}"> Eliminar </a></button>
            </td>
            <td>
              <button class="btn-volver"><a href="admin/cartoneros/actualizar/{$cartonero->dni_cartonero}"> Actualizar </a></button>
            </td>
          </tr>
        {/foreach}
      </tbody>
    </table>

    
</div>
    
    
    
    
    <div class="addCartoneros"> 
        <div >
            <div>
                <a href="admin/cartoneros/agregar"><button class="redondo abmCartonero"></button></a>
            </div>
        </div>
        <button class="btn-agregar">
            <a href="admin">Volver</a>
        </button>
    </div>
{include 'footerAdmin.tpl'}