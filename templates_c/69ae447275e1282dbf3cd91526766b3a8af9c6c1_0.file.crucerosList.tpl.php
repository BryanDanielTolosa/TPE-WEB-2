<?php
/* Smarty version 4.2.1, created on 2023-10-18 23:04:33
  from 'C:\xampp\htdocs\TPE-WEB-2-main\templates\crucerosList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_653048616ba6f7_51722664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69ae447275e1282dbf3cd91526766b3a8af9c6c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB-2-main\\templates\\crucerosList.tpl',
      1 => 1697596135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653048616ba6f7_51722664 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- lista de Cruceros -->
<?php if ((isset($_SESSION['IS_LOGGED']))) {?>    
    <?php if ($_smarty_tpl->tpl_vars['title']->value == "Cruceros") {?>
        <a href='AgregarCrucero' type='button' class='btn btn-danger'>Agregar</a>
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
