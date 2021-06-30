{include 'header.tpl'}
    <div>
        <h1 class="eliminar_definitivamente">¿Está seguro que quiere Eliminar Definitivamente el cartonero {$cartonero->nombre} {$cartonero->apellido}?</h1>
        <a class="btn-agregar" href="admin/cartoneros/del/{$cartonero->dni_cartonero}"><b>Eliminar</b></a>
        <a class="btn-agregar" href="admin/cartoneros"><b>Cancelar</b></a>
    </div>
{include 'footer.tpl'}