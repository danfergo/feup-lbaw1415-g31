<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
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
                selector: "textarea.editor"
            });

        </script>

    </head>
    <body>


        <div id="header-box"  style="margin-top:25px;">
            <div class="container-fluid main-wapper" >
                <div class="row">
                    <div class="col-xs-3">
                        <a href="index.php"><span style="font-size:36px; background:#eee; padding:1px 5px;font-weight:bold;">LOGO HERE</span></a>
                    </div>
                    <div class="col-xs-9">
                        <nav style="">
                            <ul class="inline-clean">                            
                                <li><a href="#Logout">  <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Sair</a></li>
                                <li><a href="dashboard.php">  <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Painel</a></li>
                                <li><a href="profile.php">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Perfil </a></li>
                                <li><a href="javascript:void($('#notifications-center').toggle());">  <span class="glyphicon glyphicon-bell" aria-hidden="true"></span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <div id="notifications-center" class="base-container lower" style="margin:10px 50px;margin-top:0;padding:1px;display:none;">
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
        <div id="search-box">
            <div class="container-fluid main-wapper">
                <div class="col-xs-10">
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
                <a href="search.php"><button class="btn btn-primary col-xs-2" type="button">Pesquisar</button></a>
            </div>
        </div>
        <div id="page-wrapper" class="fluid-container main-wapper">
            <nav id="breadcrumbs">
                <ul class="inline-clean">                            
                    <li><a href="index.php">  <span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                    <li><a href="#Notifications"> Level1 </a></li>
                    <li><a href="#Messages"> Level2 </a></li>
                </ul>
            </nav>
            <div style="height:20px;">  </div>
