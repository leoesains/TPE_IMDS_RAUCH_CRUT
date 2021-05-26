<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-26 04:25:24
  from 'C:\xampp\htdocs\CRUT\TPE_IMDS_RAUCH_CRUT\templates\formAddMaterial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60adb194f07797_06443411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08732d027c367ef42f527bcc176072abaad65115' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CRUT\\TPE_IMDS_RAUCH_CRUT\\templates\\formAddMaterial.tpl',
      1 => 1621994937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60adb194f07797_06443411 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
  
  <h1>Agregar nuevo material </h1>

  <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/admin/materiales/add" method="POST">

    <div class="form-group">
      Nombre del material <input type="text" name="nombre" id="nuevoMaterial" autocomplete="off">
    </div>
    
    <div class="form-group">
      Forma de entrega <input type="text" name="formaDeEntrega" id="formaEntrega" autocomplete="off">
    </div>
    <input type="submit" value="Cargar material">
  </form>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
