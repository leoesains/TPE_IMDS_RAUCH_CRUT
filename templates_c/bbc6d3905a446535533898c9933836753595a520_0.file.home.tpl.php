<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-26 03:27:46
  from 'C:\xampp\htdocs\CRUT\TPE_IMDS_RAUCH_CRUT\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60ada41271ae34_23851378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbc6d3905a446535533898c9933836753595a520' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CRUT\\TPE_IMDS_RAUCH_CRUT\\templates\\home.tpl',
      1 => 1621992464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footerHome.tpl' => 1,
  ),
),false)) {
function content_60ada41271ae34_23851378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/planta.jpg" alt="Fondo" class="fondo">
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footerHome.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
