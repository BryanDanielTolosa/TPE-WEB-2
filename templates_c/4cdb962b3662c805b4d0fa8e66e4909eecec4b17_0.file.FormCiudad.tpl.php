<?php
/* Smarty version 4.2.1, created on 2023-10-18 03:48:37
  from 'C:\xampp\htdocs\TPE\templates\FormCiudad.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f397544db18_67081559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cdb962b3662c805b4d0fa8e66e4909eecec4b17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\FormCiudad.tpl',
      1 => 1697593694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652f397544db18_67081559 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mt-5 w-25 mx-auto">
    <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;
echo $_smarty_tpl->tpl_vars['nav_id']->value;?>
/SEND">
        <div class="form-group">
            <label for="Name">Nombre Ciudad</label>
<input type="String" required class="form-control" <?php if ($_smarty_tpl->tpl_vars['action']->value == "EditCiudad") {?>value="<?php echo $_smarty_tpl->tpl_vars['Ciudades']->value->ciudad;?>
"<?php }?> name="ciudad">
        </div>
        <div class="form-group">
            <label for="Name">Nombre Pais</label>
<input type="String" required class="form-control" <?php if ($_smarty_tpl->tpl_vars['action']->value == "EditCiudad") {?>value="<?php echo $_smarty_tpl->tpl_vars['Ciudades']->value->pais;?>
"<?php }?> name="pais">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Hecho</button>
    </form>
</div><?php }
}
