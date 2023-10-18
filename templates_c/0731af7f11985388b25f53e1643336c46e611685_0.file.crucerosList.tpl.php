<?php
/* Smarty version 4.2.1, created on 2023-10-17 06:11:04
  from 'C:\xampp\htdocs\web2\TPE\templates\crucerosList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652e0958892988_40661032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0731af7f11985388b25f53e1643336c46e611685' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\crucerosList.tpl',
      1 => 1697515856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652e0958892988_40661032 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- lista de Cruceros -->
<?php if ((isset($_SESSION['IS_LOGGED']))) {?>    
    <?php if ($_smarty_tpl->tpl_vars['title']->value == "cruceros") {?>
        <a href='AgregarCruceros' type='button' class='btn btn-danger'>Agregar</a>
    <?php }
}?>
<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cruceros']->value, 'crucero');
$_smarty_tpl->tpl_vars['crucero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['crucero']->value) {
$_smarty_tpl->tpl_vars['crucero']->do_else = false;
?>
        <li class="d-flex justify-content-between align-items-center">
            <a class="nav-link list-group-item list-group-item-action" href="Cruceros/<?php echo $_smarty_tpl->tpl_vars['crucero']->value->id_cruceros;?>
"> <b><?php echo $_smarty_tpl->tpl_vars['crucero']->value->nombre;?>
</b> </a>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<p class="mt-3"><small>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 Cruceros</small></p><?php }
}
