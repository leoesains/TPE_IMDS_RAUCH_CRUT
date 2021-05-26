<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-26 03:25:34
  from 'C:\xampp\htdocs\CRUT\TPE_IMDS_RAUCH_CRUT\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60ada38e3abea0_12711585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e1273ab985befcf89596184d49c399a3346bc1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CRUT\\TPE_IMDS_RAUCH_CRUT\\templates\\error.tpl',
      1 => 1621991536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60ada38e3abea0_12711585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="recuadroError">
    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    <button class="btn-volver"><a  href="home">Volver</a></button>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
