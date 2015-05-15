<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 04:40:55
         compiled from "/opt/lbaw/lbaw1431/public_html/proto/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270322232553da1b738cdf5-62276568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47cb971eb9721094bc79d3922bebdea3a2b94b75' => 
    array (
      0 => '/opt/lbaw/lbaw1431/public_html/proto/templates/common/header.tpl',
      1 => 1430096823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270322232553da1b738cdf5-62276568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'ADMINMODE' => 0,
    'LOGGEDIN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553da1b73def18_88567430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553da1b73def18_88567430')) {function content_553da1b73def18_88567430($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Leiloes </title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/css/bootstrap.min.css" type="text/css">

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/structure.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/item-prev.css" type="text/css">

        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/selectpicker/css/bootstrap-select.min.css" type="text/css">
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/bootstrap/selectpicker/js/bootstrap-select.min.js"></script>


        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/tinymce/tinymce.min.js"></script>

        <script type="text/javascript">
            tinymce.init({
                theme: "modern",
                skin: 'light',
                selector: "textarea.editor",
                menubar: false
            });

        </script>

    </head>
        <body class="<?php if ($_smarty_tpl->tpl_vars['ADMINMODE']->value) {?>adminmode<?php }?>">

        <div id="header-box"  style="margin-top:25px;">
            <div class="container-fluid main-wapper" >
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <a href="index.php"><div id="website-logo">LOGO HERE</div></a>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <nav>
                            <ul class="inline-clean">
                                <?php if ($_smarty_tpl->tpl_vars['LOGGEDIN']->value) {?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/logout.php">  <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Sair</a></li>
                                    <li><a href="dashboard/index.php">  <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Painel</a></li>
                                    <li><a href="profile.php">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Perfil </a></li>
                                    <li><a href="javascript:void($('#notifications-center').toggle());">  <span class="glyphicon glyphicon-bell" aria-hidden="true"></span></a></li>
                                <?php } else { ?>
                                    <li><a href="login.php">  <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Login</a></li>
                                    <li><a href="register.php">  <span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span> Registar</a></li>
                                <?php }?>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <div id="notifications-center" class="base-container lower" style="margin:10px 2%;margin-top:0;padding:1px;display:none;">
            <div style="margin:0 auto; width:600px;">

            </div>
            <div class="clearfix"> </div>
        </div>

        <div class="clearfix"> </div>

        <!-- SEARCH BAR-->
        <div id="search-box">
            <div class="main-wapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-10" style="margin-bottom: 5px;">
                            <div class="input-group">
                                <input type="text" class="form-control" aria-label="...">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Categoria <span class="caret"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu" >
                                        <li><a href="#">Categoria 1</a></li>
                                        <li><a href="#">Categoria 2</a></li>
                                        <li><a href="#">Categoria 3</a></li>
                                        <li><a href="#">Categoria 4</a></li>
                                    </ul>
                                </div><!-- /btn-group -->
                            </div><!-- /input-group -->
                        </div>
                        <div class=" col-xs-12 col-sm-2" >
                            <a href="search.php"><button class="btn btn-primary" style="width:100%;" type="button">Pesquisar</button></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- MAIN PAGE BEGIN -->
        <div id="page-wrapper" class="fluid-container main-wapper">

            <!--
            <div clas="row">
                <div class="col-xs-12">

                    <nav id="breadcrumbs">
                        <ul class="inline-clean">
                            <li><a href="index.php">  <span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                            <li><a href="#"> Level1 </a></li>
                            <li><a href="#"> Level2 </a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            -->
            <div class="clearfix" style="height:20px;">  </div>


<?php }} ?>
