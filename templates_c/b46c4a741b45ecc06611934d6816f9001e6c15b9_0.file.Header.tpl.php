<?php
/* Smarty version 4.2.1, created on 2023-10-17 23:39:31
  from 'C:\xampp\htdocs\TPE\templates\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652eff137820f5_45870380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b46c4a741b45ecc06611934d6816f9001e6c15b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\Header.tpl',
      1 => 1697517420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652eff137820f5_45870380 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $_smarty_tpl->tpl_vars['nav_name']->value;?>
</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand btn btn-light" href="Cruceros">Cruceros</a>
                <a class="navbar-brand btn btn-light" href="Ciudades">Ciudades</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php if (!(isset($_SESSION['USER_ID']))) {?>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="Login">Login</a>
                            </li>
                          <?php } else { ?> 
                              <li class="nav-item ml-auto">
                                  <a class="nav-link" aria-current="page" href="Logout">Logout (<?php echo $_SESSION['USER_NAME'];?>
)</a>
                              </li>
                          <?php }?>
                    </ul>
                </div>
              </div>
        </nav>
    </header>

    
    <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2> <?php }
}
