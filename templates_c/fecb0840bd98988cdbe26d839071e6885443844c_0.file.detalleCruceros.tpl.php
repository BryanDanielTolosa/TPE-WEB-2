<?php
/* Smarty version 4.2.1, created on 2023-10-18 01:05:25
  from 'C:\xampp\htdocs\TPE\templates\detalleCruceros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f1335325543_33619066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fecb0840bd98988cdbe26d839071e6885443844c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\detalleCruceros.tpl',
      1 => 1697582036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652f1335325543_33619066 (Smarty_Internal_Template $_smarty_tpl) {
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
