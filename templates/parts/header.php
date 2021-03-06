<?php
$LOGGEDIN = isset($_GET['loggedin']) ? true : false;
$ISADMIN = isset($_GET['admin']) && $LOGGEDIN ? true : false;
$ADMINMODE = isset($_GET['adminmode']) && $LOGGEDIN ? true : false;
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Leiloes </title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">

        <link rel="stylesheet" href="css/structure.css" type="text/css">
        <link rel="stylesheet" href="css/item-prev.css" type="text/css">

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="bootstrap/selectpicker/css/bootstrap-select.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/selectpicker/js/bootstrap-select.min.js"></script>


        <script type="text/javascript" src="tinymce/tinymce.min.js"></script>

        <script type="text/javascript">
            tinymce.init({
                theme: "modern",
                skin: 'light',
                selector: "textarea.editor",
                menubar: false
            });

        </script>

    </head>
    <body class="<?= $ADMINMODE ? "adminmode" : "" ?>">


        <div id="header-box"  style="margin-top:25px;">
            <div class="container-fluid main-wapper" >
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <a href="index.php"><div id="website-logo">LOGO HERE</div></a>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <nav>
                            <ul class="inline-clean">  
                                <?php if ($LOGGEDIN) { ?> 
                                    <li><a href="index.php?loggout">  <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Sair</a></li>
                                    <li><a href="dashboard.php">  <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Painel</a></li>
                                    <li><a href="profile.php">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Perfil </a></li>
                                    <li><a href="javascript:void($('#notifications-center').toggle());">  <span class="glyphicon glyphicon-bell" aria-hidden="true"></span></a></li>
                                <?php } else { ?>
                                    <li><a href="login.php">  <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Login</a></li>                                
                                    <li><a href="register.php">  <span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span> Registar</a></li>                                
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <div id="notifications-center" class="base-container lower" style="margin:10px 2%;margin-top:0;padding:1px;display:none;">
            <div style="margin:0 auto; width:600px;">
                <?php
                include 'parts/prevs/item-list-buyer-msg.php';
                include 'parts/prevs/item-list-buyer-track.php';
                include 'parts/prevs/item-list-buyer-track.php';
                include 'parts/prevs/item-list-buyer-track.php';
                ?>
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
            <div class="clearfix" style="height:20px;">  </div>

