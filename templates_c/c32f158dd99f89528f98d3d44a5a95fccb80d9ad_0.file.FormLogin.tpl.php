<?php
/* Smarty version 4.2.1, created on 2023-10-18 00:56:44
  from 'C:\xampp\htdocs\TPE\templates\FormLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f112c639000_15610669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c32f158dd99f89528f98d3d44a5a95fccb80d9ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\FormLogin.tpl',
      1 => 1697516546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652f112c639000_15610669 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mt-5 w-25 mx-auto">
    <form method="POST" action="validate">
        <div class="form-group">
            <label for="usuario">Usuario</label>
            <input required class="form-control" id="usuario" name="usuario">
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" required class="form-control" id="password" name="password">
        </div>

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
            <div class="alert alert-danger mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>
        <button type="submit" class="btn btn-primary mt-3">Entrar</button>
    </form>
</div><?php }
}
