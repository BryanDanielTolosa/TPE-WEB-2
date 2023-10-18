<?php
/* Smarty version 4.2.1, created on 2023-10-18 03:15:30
  from 'C:\xampp\htdocs\TPE\templates\formCruceros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f31b2be0e69_90709640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5f2cee791e6949b66c26006bc3fc7d171c9a5c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\formCruceros.tpl',
      1 => 1697591723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652f31b2be0e69_90709640 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mt-5 w-25 mx-auto">
    <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;
echo $_smarty_tpl->tpl_vars['nav_id']->value;?>
/SEND">
        <div class="form-group">
            <label for="nombre">Nombre Del Crucero</label>
            <input type="String" required class="form-control" <?php if ($_smarty_tpl->tpl_vars['action']->value == "EditCrucero") {?>value=<?php echo $_smarty_tpl->tpl_vars['Crucero']->value->nombre;?>
 <?php }?> name="nombre">
        </div>
        <div class="form-group">
            <label for="id_ciudad">Ciudad</label>
            <select name="id_ciudad" class="form-select">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ciudad']->value, 'Ciudades');
$_smarty_tpl->tpl_vars['Ciudades']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Ciudades']->value) {
$_smarty_tpl->tpl_vars['Ciudades']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['Ciudades']->value->id_ciudad;?>
" ><?php echo $_smarty_tpl->tpl_vars['Ciudades']->value->ciudad;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div class="form-group">
            <label for="cantidad_tripulantes">Cantidad Tripulantes</label>
            <input type="number" required class="form-control" <?php if ($_smarty_tpl->tpl_vars['action']->value == "EditCrucero") {?>value=<?php echo $_smarty_tpl->tpl_vars['Crucero']->value->cantidad_tripulantes;?>
 <?php }?> name="cantidad_tripulantes">
        </div>
        <div class="form-group">
            <label for="estrellas">estrellas</label>
            <input type="number" required class="form-control" <?php if ($_smarty_tpl->tpl_vars['action']->value == "EditCrucero") {?>value=<?php echo $_smarty_tpl->tpl_vars['Crucero']->value->estrellas;?>
 <?php }?> name="estrellas">
        </div>        
        <button type="submit" class="btn btn-primary mt-3">Hecho</button>
    </form>
</div><?php }
}
