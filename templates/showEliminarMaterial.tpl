{include 'header.tpl'}
    <div>
        <h1 class="eliminar_definitivamente">¿Está seguro que quiere Eliminar Definitivamente el material {$material->nombre}?</h1>
        <a class="btn-agregar" href="admin/materiales/del/{$material->id_material}"><b>Eliminar</b></a>
        <a class="btn-agregar" href="admin/materiales"><b>Cancelar</b></a>
    </div>
{include 'footer.tpl'}