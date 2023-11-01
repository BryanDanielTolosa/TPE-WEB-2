<?php
/* Smarty version 4.2.1, created on 2023-10-18 23:05:00
  from 'C:\xampp\htdocs\TPE-WEB-2-main\templates\detalleCruceros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6530487c6f7013_73499977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cd5ea1c013795bb37aadfe1bb707194921b253f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB-2-main\\templates\\detalleCruceros.tpl',
      1 => 1697596135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6530487c6f7013_73499977 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['cruceros']->value != null) {?>
    <li class="list-group-item list-group-item-dark"> cruceros: <?php echo $_smarty_tpl->tpl_vars['cruceros']->value->nombre;?>
</li>
    <li class="list-group-item list-group-item-dark">ciudades: <?php echo $_smarty_tpl->tpl_vars['cruceros']->value->ciudad;?>
</li>
    <li class="list-group-item list-group-item-dark">Linea: <?php echo $_smarty_tpl->tpl_vars['cruceros']->value->cantidad_tripulantes;?>
</li>
    <li class="list-group-item list-group-item-dark">Linea: <?php echo $_smarty_tpl->tpl_vars['cruceros']->value->estrellas;?>
</li>
<?php }
}
}
