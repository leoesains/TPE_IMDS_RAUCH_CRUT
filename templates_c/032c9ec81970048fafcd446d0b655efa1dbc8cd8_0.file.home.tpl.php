<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-26 05:36:04
  from 'C:\xampp\htdocs\proyectos\TPE_IMDS_RAUCH_CRUT\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60adc224302e64_42979726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '032c9ec81970048fafcd446d0b655efa1dbc8cd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_IMDS_RAUCH_CRUT\\templates\\home.tpl',
      1 => 1622000160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60adc224302e64_42979726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
        <a href="avisos"><button class="redondo aviso"></button></a>
    <a href="avisos"><button class="redondo lista"></button></a>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}