<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Leiloes </title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/structure.css" type="text/css">
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



        <div id="header-box">
            <div class="container-fluid main-wapper" >
                <div class="row">
                    <div class="col-xs-3">
                        <span style="font-size:36px;border:1px solid;">LOGO HERE</span>
                    </div>
                    <div class="col-xs-9">
                        <nav style="padding-top:25px;">
                            <ul class="inline-clean">                            
                                <li><a href="#Logout">  <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
                                <li><a href="#Archive">  <span class="glyphicon glyphicon-bell" aria-hidden="true"></span></a></li>
                               <!-- <li><a href="#Messages">  <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> Mensagens</a></li> -->
                                <li><a href="dashboard.php">  <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span></a></li>
                                <!-- <li><a href="newauction.php">
                                         <input type="button" class="btn btn-primary" aria-expanded="false" value="Vender">
                                     </a>
                                 </li>-->
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--<div class="row">
                    <div class="col-xs-4">
                        <div class="base-container lower">asd</div>
                    </div>
                    <div class="col-xs-4">
                        <div class="base-container lower">asd</div>
                    </div>
                    <div class="col-xs-4">

                    </div>
                </div>-->

            </div>
        </div>

        <div class="base-container lower" style="margin:0 50px; margin-bottom:10px;">
            <div class="base-container upper-inside-lower" style="width:400px;margin-left:auto;margin-right:auto;">
                col1<br>
                col1<br>

                col1<br>

                col1<br>

                col1<br>

            </div>
            <div class="base-container upper-inside-lower" style="width:400px;margin-left:auto;margin-right:auto;">
                col1<br>
                col1<br>

                col1<br>

                col1<br>

                col1<br>

            </div>
            <div class="base-container upper-inside-lower" style="width:400px;margin-left:auto;margin-right:auto;">
                col1<br>
                col1<br>

                col1<br>

                col1<br>

                col1<br>

            </div>
            <div class="base-container upper-inside-lower" style="width:400px;margin-left:auto;margin-right:auto;">
                col1<br>
                col1<br>

                col1<br>

                col1<br>

                col1<br>

            </div>
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
                <button class="btn btn-primary col-xs-2" type="button">Pesquisar</button>
            </div>
        </div>
        <div id="page-wrapper" class="main-wapper">
            <nav id="breadcrumbs">
                <ul class="inline-clean">                            
                    <li><a href="index.php">  <span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                    <li><a href="#Notifications"> Level1 </a></li>
                    <li><a href="#Messages"> Level2 </a></li>
                </ul>
            </nav>