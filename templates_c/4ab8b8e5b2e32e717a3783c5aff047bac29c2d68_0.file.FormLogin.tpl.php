<?php
/* Smarty version 4.2.1, created on 2023-10-17 06:24:57
  from 'C:\xampp\htdocs\web2\TPE\templates\FormLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652e0c995743a6_62931633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ab8b8e5b2e32e717a3783c5aff047bac29c2d68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE\\templates\\FormLogin.tpl',
      1 => 1697516546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652e0c995743a6_62931633 (Smarty_Internal_Template $_smarty_tpl) {
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
