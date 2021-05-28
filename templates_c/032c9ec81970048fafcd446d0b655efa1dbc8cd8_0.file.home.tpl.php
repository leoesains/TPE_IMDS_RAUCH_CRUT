<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-28 04:09:02
  from 'C:\xampp\htdocs\proyectos\TPE_IMDS_RAUCH_CRUT\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60b050be2507b5_55758150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '032c9ec81970048fafcd446d0b655efa1dbc8cd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE_IMDS_RAUCH_CRUT\\templates\\home.tpl',
      1 => 1622167701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footerHome.tpl' => 1,
  ),
),false)) {
function content_60b050be2507b5_55758150 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="materiales_aceptados">
    <div>
        <a href="avisos/cargar/"><button class="redondo aviso_retiro"></button></a>
        <a href="materiales"><button class="redondo lista_materiales"></button></a>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footerHome.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
