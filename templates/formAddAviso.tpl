{include 'header.tpl'}
<h1 class="titleAvisoDeRetito" >AVISO DE RETIRO</h1>
<div class="contFormAviso">
    <form class="formInputsAviso" action="avisos/add" method="POST" enctype="multipart/form-data">
        <!--Nombre-->
        <input type="text" class="input" name="nombre" placeholder="Nombre" autocomplete="off">
        <!--Apellido-->
        <input type="text" class="input" name="apellido" placeholder="Apellido" autocomplete="off">
        <!--Dirección--> 
        <input type="text" class="input" name="direccion" placeholder="Direccion" autocomplete="off">
        <!--Teléfono--> 
        <input type="text" class="input" name="telefono" placeholder="Telefono" autocomplete="off">
        <!--Email--> 
        <input type="text" class="input" name="email" placeholder="Email" autocomplete="off">
        <!--Franja horaria--> 
        <select class="input" name="franja_horaria">
            <option hidden selected>Franja horaria</option>
            <option value="De 9 a 12 hs">De 9 a 12 hs</option>
            <option value="De 13 a 17 hs">De 13 a 17 hs</option>
        </select>
        <!--Volumen de los materiales--> 
        <select class="input" name="volumen">
            <option hidden selected>Volumen</option>
            <option value="Entra en una caja">Entra en una caja</option>
            <option value="Entra en el baúl de un auto">Entra en el baúl de un auto</option>
            <option value="Entra en la caja de una camioneta">Entra en la caja de una camioneta</option>
            <option value="Entra en un camión">Entra en un camión</option>
        </select>
        <!--Opcional: Foto .jpg y .png hasta 1 Mb-->
        <input type="file" name="input_name" >
        <div class="btnSolicitud">
            <!-- Boton para enviar solicitud de retiro de materiales -->
            <input type="submit" value="Enviar solicitud" class="btn-agregar">
        </div>
    </form>
</div>

{include 'footer.tpl'}



 
