<?php
/* Smarty version 4.2.1, created on 2023-10-18 23:09:59
  from 'C:\xampp\htdocs\TPE-WEB-2-main\templates\formCiudad.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_653049a7885504_90379733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '124099b5bee75d5d86c839ee441475d0b5ea81c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB-2-main\\templates\\formCiudad.tpl',
      1 => 1697596135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653049a7885504_90379733 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mt-5 w-25 mx-auto">
    <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;
echo $_smarty_tpl->tpl_vars['nav_id']->value;?>
/SEND">
        <div class="form-group">
            <label for="Name">Nombre Ciudad</label>
<input type="String" required class="form-control" <?php if ($_smarty_tpl->tpl_vars['action']->value == "Editciudad") {?>value="<?php echo $_smarty_tpl->tpl_vars['Ciudades']->value->ciudad;?>
"<?php }?> name="ciudad">
        </div>
        <div class="form-group">
            <label for="Name">Nombre Pais</label>
<input type="String" required class="form-control" <?php if ($_smarty_tpl->tpl_vars['action']->value == "Editciudad") {?>value="<?php echo $_smarty_tpl->tpl_vars['Ciudades']->value->pais;?>
"<?php }?> name="pais">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Hecho</button>
    </form>
</div><?php }
}
