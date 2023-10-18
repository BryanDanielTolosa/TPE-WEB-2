<?php
/* Smarty version 4.2.1, created on 2023-10-18 01:08:10
  from 'C:\xampp\htdocs\TPE\templates\opcionesdeitems.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f13dace34a6_92809537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c53a9c40a06042eb91ef0b3289ae277ec8cdb25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\opcionesdeitems.tpl',
      1 => 1697584080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652f13dace34a6_92809537 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_SESSION['IS_LOGGED']))) {?>
    <?php if (((isset($_smarty_tpl->tpl_vars['delete']->value)) && $_smarty_tpl->tpl_vars['delete']->value == True)) {?>
        <a href='Delete<?php echo $_smarty_tpl->tpl_vars['thing']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' type='button' class='btn btn-danger'>Borrar</a>
    <?php } else { ?>
        <a  type='button' class="btn btn-warning">Borrar</a>
    <?php }?>
    <a href='Edit<?php echo $_smarty_tpl->tpl_vars['thing']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' type='button' class='btn btn-danger'>Editar</a>
<?php }
}
}
