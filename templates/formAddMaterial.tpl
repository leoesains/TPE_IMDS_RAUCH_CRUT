{include 'header.tpl'}

<div class="addMaterial">
  
  <h1>Agregar nuevo material </h1>

  <form action="admin/materiales/add" method="POST" enctype="multipart/form-data" id="formAddMat">

    <div class="form-group">
      Nombre del material <input type="text" name="nombre" id="nuevoMaterial" autocomplete="off">
    </div>
    
    <div class="form-group">
      Forma de entrega <input type="text" name="formaDeEntrega" id="formaEntrega" autocomplete="off">
    </div>

    <div class="form-group">
      Cargar imagen <input type="file" name="input_name">
    </div>
    
    <input type="submit" value="Cargar material">
  </form>
  <button class="btn-agregar">
    <a href="admin/materiales">Cancelar</a>
  </button
</div>

{include 'footerAdmin.tpl'}