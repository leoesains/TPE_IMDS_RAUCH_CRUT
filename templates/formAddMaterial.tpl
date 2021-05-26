{include 'header.tpl'}

<div>
  
  <h1>Agregar nuevo material </h1>

  <form action="{$base_url}/admin/materiales/add" method="POST">

    <div class="form-group">
      Nombre del material <input type="text" name="nombre" id="nuevoMaterial" autocomplete="off">
    </div>
    
    <div class="form-group">
      Forma de entrega <input type="text" name="formaDeEntrega" id="formaEntrega" autocomplete="off">
    </div>
    <input type="submit" value="Cargar material">
  </form>
</div>

{include 'footer.tpl'}