{include 'header.tpl'}

<h1 class="titleAvisoDeRetiro" >Ingresar Cartonero</h1>
<div class="contFormAviso">
    <form class="formInputsAviso" action="admin/cartoneros/add" method="POST" enctype="multipart/form-data">
        <!--Nombre-->
        <input type="text" class="input" name="nombre" placeholder="Nombre" autocomplete="off">
        <!--Apellido-->
        <input type="text" class="input" name="apellido" placeholder="Apellido" autocomplete="off">
        <!--DNI--> 
        <input type="number" class="input" name="dni" placeholder="DNI" autocomplete="off">
        <!--Fecha de Nacimiento-->
        <label class= input for=fecha_nacimiento>Fecha de Nacimiento ↓</label>
        <input type="date" class="input" name="fecha_nacimiento">
        <!--Dirección--> 
        <input type="text" class="input" name="direccion" placeholder="Direccion" autocomplete="off">
        <!--Vehículo--> 
        <select class="input" name="vehiculo">
            <option hidden selected>Tipo de Vehículo</option>
            <option value="Auto pequeño">Auto pequeño</option>
            <option value="Auto grande">Auto grande</option>
            <option value="Camioneta">Camioneta</option>
            <option value="Camión">Camión</option>
        </select>
        <div class="btnSolicitud">
            <!-- Boton para agregar cartonero -->
            <input type="submit" value="Agregar" class="btn-agregar">
        </div>
    </form>
</div>

{include 'footerAdmin.tpl'}