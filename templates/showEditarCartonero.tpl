{include 'header.tpl'}

<div class="addMaterial">
  
  <h1>Modificar Cartonero </h1>
  <form action="admin/cartoneros/upd" method="POST" enctype="multipart/form-data" class="formInputsAviso">
    <input type="hidden" name="dni_cartonero" value="{$cartonero->dni_cartonero}">
    <div class="form-group">
    <label>Nombre</label><br><br>
    <input type="text" name="nombre" class="input" id="nombre" value="{$cartonero->nombre}" autocomplete="off">
    </div>
    <div class="form-group">
     <label>Apellido</label> <br><br>
     <input type="text" name="apellido" class="input" id="apellido" value="{$cartonero->apellido}" autocomplete="off">
    </div>
    <div class="form-group">
     <label>Direccion</label> <br><br> 
    <input type="text" name="direccion" class="input" id="direccion" value="{$cartonero->direccion}" autocomplete="off">
    </div>
    <div class="form-group">
     <label>Fecha de nacimiento</label><br><br>
     <input type="text" name="fecha_nacimiento" class="input" id="fecha_nacimiento" value="{$cartonero->fecha_nacimiento}" autocomplete="off">
    </div>
    <div class="form-group">
      <label>Tipo de vehiculo</label><br><br>
      <input type="text" name="tipo_vehiculo" class="input" id="tipo_vehiculo" value="{$cartonero->tipo_vehiculo}" autocomplete="off">
    </div>
    <input type="submit" value="Guardar" class="btn-agregar">
  </form>
  <button class="btn-agregar">
    <a href="admin/cartonero">Cancelar</a>
  </button
</div>

{include 'footerAdmin.tpl'}