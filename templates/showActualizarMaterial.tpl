{include 'header.tpl'}

<div class="addMaterial">
  
  <h1>Modificar material </h1>
    {if $error}
    <div class="notFound">
      <div class="redondo">
        {$error}
      </div>
    </div>
    {/if}

  <form action="admin/materiales/upd" method="POST" enctype="multipart/form-data" class="formInputsAviso">
    <input type="hidden" name="id_material" value="{$material->id_material}">
    <div class="form-group">
      <input type="text" name="nombre" class="input" id="nuevoMaterial" value="{$material->nombre}" autocomplete="off">
    </div>
    
    <div class="form-group">
      <input type="text" name="formaDeEntrega" class="input" id="formaEntrega" value="{$material->requerimiento_de_recibo}" autocomplete="off">
    </div>

    <div class="form-group">
       <input type="file" name="input_name" class="input" value="Cargar imagen">
    </div>

    <input type="submit" value="Guardar" class="btn-agregar">
  </form>
  <button class="btn-agregar">
    <a href="admin/materiales">Cancelar</a>
  </button
</div>

{include 'footerAdmin.tpl'}