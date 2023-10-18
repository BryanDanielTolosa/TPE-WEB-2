<?php
/* Smarty version 4.2.1, created on 2023-10-18 01:43:03
  from 'C:\xampp\htdocs\TPE\templates\ListCiudades.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f1c0765c908_93380033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee830dc2a34d790fa34e3bdecc196fe70d74de49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\ListCiudades.tpl',
      1 => 1697586179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652f1c0765c908_93380033 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_SESSION['IS_LOGGED']))) {?>    
    <?php if ($_smarty_tpl->tpl_vars['title']->value == "Ciudades") {?>
        <a href='AgregarCiudades' type='button' class='btn btn-danger'>Agregar</a>
    <?php }
}?>
<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ciudades']->value, 'ciudad');
$_smarty_tpl->tpl_vars['ciudad']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ciudad']->value) {
$_smarty_tpl->tpl_vars['ciudad']->do_else = false;
?>
        <li class="d-flex justify-content-between align-items-center">
            <a class="nav-link list-group-item list-group-item-action" href="Ciudades/<?php echo $_smarty_tpl->tpl_vars['ciudad']->value->id_ciudad;?>
"> <b><?php echo $_smarty_tpl->tpl_vars['ciudad']->value->ciudad;?>
</b> </a>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<p class="mt-3"><small>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 Ciudad</small></p><?php }
}
