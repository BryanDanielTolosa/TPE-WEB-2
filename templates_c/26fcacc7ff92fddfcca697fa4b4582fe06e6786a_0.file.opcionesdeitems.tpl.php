<?php
/* Smarty version 4.2.1, created on 2023-10-18 23:05:00
  from 'C:\xampp\htdocs\TPE-WEB-2-main\templates\opcionesdeitems.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6530487c57a248_01080739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26fcacc7ff92fddfcca697fa4b4582fe06e6786a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB-2-main\\templates\\opcionesdeitems.tpl',
      1 => 1697596135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6530487c57a248_01080739 (Smarty_Internal_Template $_smarty_tpl) {
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
