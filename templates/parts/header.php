<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Leiloes </title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/structure.css" type="text/css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>


    </head>
    <body>

        <div id="header-box">
            <div class="container-fluid">
                <div class="col-xs-3">
                    <span style="font-size:36px;border:1px solid;">LOGO HERE</span>
                </div>
                <div class="col-xs-9">
                    <nav>
                        <ul class="inline-clean">                            
                            <li><a href="#Logout">  <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout</a></li>
                            <li><a href="#Notifications">  <span class="glyphicon glyphicon-bell" aria-hidden="true"></span></a></li>
                            <li><a href="#Messages">  <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> Mensagens</a></li>
                            <li><a href="dashboard.php">  <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Painel</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div id="search-box">
            <div class="container-fluid">
                <div class="col-xs-10">
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="...">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Categoria <span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="#">Categoria 1</a></li>
                                <li><a href="#">Categoria 2</a></li>
                                <li><a href="#">Categoria 3</a></li>
                                <li><a href="#">Categoria 4</a></li>
                            </ul>
                        </div><!-- /btn-group -->
                    </div>
                </div><!-- /input-group -->
                <button class="btn btn-primary col-xs-2" type="button">Pesquisar</button>
            </div>
        </div>
        <div id="page-wrapper">
            <nav id="breadcrumbs">
                <ul class="inline-clean">                            
                    <li><a href="index.php">  <span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                    <li><a href="#Notifications"> Level1 </a></li>
                    <li><a href="#Messages"> Level2 </a></li>
                </ul>
                <div class="clearfix"> </div>
            </nav>