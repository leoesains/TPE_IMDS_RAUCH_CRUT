<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-25 22:46:52
  from 'C:\xampp\htdocs\TPE\TPE_IMDS_RAUCH_CRUT\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60ad623c3d5934_22754101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41387f2d95f441d4c427481184c8fc85f98845ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\TPE_IMDS_RAUCH_CRUT\\templates\\home.tpl',
      1 => 1621975592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60ad623c3d5934_22754101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/planta.jpg" alt="Fondo" class="fondo">
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
