{include 'header.tpl'}

<div class="addMaterial">
  
  <h1>Agregar nuevo material </h1>

  <form action="admin/materiales/add" method="POST" enctype="multipart/form-data" class="formInputsAviso">

    <div class="form-group">
      <input type="text" name="nombre" class="input" id="nuevoMaterial" placeholder="Nombre del material" autocomplete="off">
    </div>
    
    <div class="form-group">
      <input type="text" name="formaDeEntrega" class="input" id="formaEntrega" placeholder="Forma de entrega" autocomplete="off">
    </div>

    <div class="form-group">
       <input type="file" name="input_name" class="input" value="Cargar imagen">
    </div>

    <input type="submit" value="Cargar material" class="btn-agregar">
  </form>
  <button class="btn-agregar">
    <a href="admin/materiales">Cancelar</a>
  </button
</div>

{include 'footerAdmin.tpl'}