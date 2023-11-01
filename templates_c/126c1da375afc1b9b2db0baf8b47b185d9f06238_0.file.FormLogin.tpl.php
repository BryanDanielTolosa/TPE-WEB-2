<?php
/* Smarty version 4.2.1, created on 2023-10-18 23:04:52
  from 'C:\xampp\htdocs\TPE-WEB-2-main\templates\FormLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6530487401b332_31381940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '126c1da375afc1b9b2db0baf8b47b185d9f06238' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB-2-main\\templates\\FormLogin.tpl',
      1 => 1697596135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6530487401b332_31381940 (Smarty_Internal_Template $_smarty_tpl) {
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
