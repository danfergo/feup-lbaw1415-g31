
{include file='common/header.tpl'}

<div class="container-fluid page-wrapper">


    <h1>Casa com piscina</h1>

    <div id="auction-carousel" class="carousel slide base-container upper" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#auction-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#auction-carousel" data-slide-to="1"></li>
            <li data-target="#auction-carousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="background-image:url('../images/item-prev.jpg');">
            </div>
            <div class="item" style="background-image:url('../images/item-prev2.jpg');">
            </div>
            <div class="item" style="background-image:url('../images/item-prev3.jpg');">
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#auction-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#auction-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <style>
        html, body, #page-wrapper, div.page-wrapper {
            height:100%;
        }

        #auction-carousel{
            height: 60%;
        }

        #auction-carousel .carousel-inner, #auction-carousel .item{
            height:100%;
        }

        #auction-carousel .item{
            background: center center no-repeat #000;
            background-width:100% auto;
            border-radius:3px;
        }

    </style>



    <div class="col-xs-12">
        <div class="item-tile base-container upper col-xs-12">
            <div style="padding:3px;">
                <div class="auction-title col-xs-12">
                </div>
                <!--<div class="auction-image col-xs-4">
                    <img src="../images/item-prev.jpg" width="341" height="256" style="border-top-left-radius: 3px;border-top-right-radius: 3px;padding: 10px; float: left;"><br>
                </div> -->
                <div class="col-xs-8">
                    <div class="auction-time-left col-xs-12">
                        <div class="col-xs-12">
                            <h3> Tempo restante: 10 minutos</h3>
                        </div>
                    </div>
                    <div class="auction-buying-options col-xs-12">
                        <div class="auction-bid-action col-xs-6" style="padding-right: 20px;">
                            <div class="col-xs-3" style="padding-left: 0;">
                                <h4> Licitar </h4>
                            </div>
                            <div class="input-group" >
                                <!--                                    <span class="input-group-addon" id="basic-addon1">Licitar</span>-->
                                <input type="text" class="form-control" placeholder="Quantia" aria-describedby="basic-addon1">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Submeter</button>
                                    </span>
                            </div>
                        </div>
                        <div class="aution-buy-now-button col-xs-7" style="padding-left: 93px; padding-right: 0">
                            <button type="button" class="btn btn-primary col-xs-9" aria-label="Left Align">
                                Comprar Já!
                            </button>
                        </div>
                    </div>
                    <div class="auction-bid col-xs-12">
                        <h4 class="col-xs-6">Valor da licitação mais alta:</h4>
                        <h4 class="col-xs-6">392,23€</h4>
                    </div>
                    <div class="auction-buy-now col-xs-12">
                        <h4 class="col-xs-6">Valor Comprar já:</h4>
                        <h4 class="col-xs-6">5.000,00€</h4>
                    </div>
                    <div class="auction-shipping col-xs-12">
                        <h4 class="col-xs-6">Portes:</h4>
                        <h4 class="col-xs-6"> 5,00€</h4>
                    </div>
                    <div class="auction-seller col-xs-12">
                        <h4 class="col-xs-6">Vendido por:</h4>
                        <h4 class="col-xs-6"> <a href="">Francisco Abreu</a></h4>
                    </div>
                    <div class="auction-rating col-xs-12">
                        <h4 class="col-xs-6">Rating:</h4>
                        <h4 class="col-xs-6">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                        </h4>
                    </div>
                </div>
                <div class="auction-image col-xs-4" style="padding-bottom: 34px; padding-left: 22px">
                    <div class="btn-group" role="group" aria-label="...">
                        <button class="btn btn-default" style="float:right;margin-top:25px;">Seguir leilão</button>
                        <button class="btn btn-default" style="float:right;margin-top:25px;">Contactar o vendedor</button>
                        <button class="btn btn-default" style="float:right;margin-top:25px;">Reportar leilão</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="auction-title col-xs-12">
        <h2>Descrição especifica ao item</h2>
    </div>
    <div class="col-xs-12">
        <div class="item-tile base-container upper col-xs-12">
            <div style="padding:3px;">

                <div class="col-xs-6">
                    <div class="auction-bid col-xs-12">
                        <h4 class="col-xs-5" style="margin: 0;">Cidade:</h4> <h4 class="col-xs-5" style="margin: 0;"> Porto</h4>
                        <h4 class="col-xs-5" style="margin: 0;">Localidade:</h4> <h4 class="col-xs-5" style="margin: 0;"> Paranhos</h4>
                        <h4 class="col-xs-5" style="margin: 0;">Numero de Quartos:</h4> <h4 class="col-xs-5" style="margin: 0;"> 5</h4>
                        <h4 class="col-xs-5" style="margin: 0;">Numero de WC:</h4> <h4 class="col-xs-5" style="margin: 0;"> 3</h4>
                        <h4 class="col-xs-5" style="margin: 0;">Area:</h4> <h4 class="col-xs-5" style="margin: 0;"> 60 metros quadrados</h4>
                        <h4 class="col-xs-5" style="margin: 0;">Cidade:</h4> <h4 class="col-xs-5" style="margin: 0;"> Porto</h4>
                    </div>
                </div>
                <div class="col-xs-6" style="margin-bottom: 34px">
                    <div class="auction-bid col-xs-12">
                        <h4 class="col-xs-5" style="margin: 0;">Cidade:</h4> <h4 class="col-xs-5" style="margin: 0;"> Porto</h4>
                        <h4 class="col-xs-5" style="margin: 0;">Localidade:</h4> <h4 class="col-xs-5" style="margin: 0;"> Paranhos</h4>
                        <h4 class="col-xs-5" style="margin: 0;">Numero de Quartos:</h4> <h4 class="col-xs-5" style="margin: 0;"> 5</h4>
                        <h4 class="col-xs-5" style="margin: 0;">Numero de WC:</h4> <h4 class="col-xs-5" style="margin: 0;"> 3</h4>
                        <h4 class="col-xs-5" style="margin: 0;">Area:</h4> <h4 class="col-xs-5" style="margin: 0;"> 60 metros quadrados</h4>
                        <h4 class="col-xs-5" style="margin: 0;">Cidade:</h4> <h4 class="col-xs-5" style="margin: 0;"> Porto</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="auction-title col-xs-12">
        <h2>Descrição do autor</h2>
    </div>
    <div class="col-xs-12">
        <div class="item-tile base-container upper col-xs-12">
            <div style="padding:3px;">

                <div class="auction-author-description col-xs-12" style="margin-bottom: 34px;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nunc vel mi congue, egestas lectus vitae, feugiat nulla. Cras lacinia turpis
                    ut dolor eleifend maximus non eu libero. Integer mattis gravida nisl, nec dictum arcu
                    scelerisque eu. Integer aliquam justo vel est semper, at dapibus leo
                    pellentesque. Nam id tristique dolor, quis dignissim libero. Vivamus
                    ante magna, tempus a arcu pharetra, mattis feugiat nunc. Sed non tellus
                    in neque auctor consequat. Fusce dignissim velit nibh, id sollicitudin sapien
                    consequat non. Duis interdum, sem euismod sagittis euismod, libero nisi auctor
                    purus, in lobortis magna nisi non nibh. Morbi eget augue nec ipsum tempus condimentum.
                    Integer accumsan tellus ut rhoncus placerat. Cras eget faucibus arcu. Nullam ultrices,
                    odio sit amet imperdiet pharetra, risus sapien euismod quam, quis euismod nulla nulla a
                    urna. Nullam id nibh ac urna venenatis blandit sit amet sit amet nibh. Praesent in pretium enim.
                </div>
            </div>
        </div>
    </div>

    <div class="auction-title col-xs-12">
        <h2>Mais detalhes</h2>
    </div>
    <div class="col-xs-12">
        <div class="item-tile base-container upper col-xs-12">
            <div style="padding:30px;">


                <div class="col-xs-6">
                    <div class="auction-title col-xs-12">
                        <h2>Metodos de pagamento</h2>
                    </div>
                    <div class="auction-bid col-xs-12">
                        <h4 class="col-xs-5" style="margin: 0;">Cidade:</h4> <h4 class="col-xs-5" style="margin: 0;"> Porto</h4>
                        <h4 class="col-xs-5" style="margin: 0;">Localidade:</h4> <h4 class="col-xs-5" style="margin: 0;"> Paranhos</h4>
                        <h4 class="col-xs-5" style="margin: 0;">Numero de Quartos:</h4> <h4 class="col-xs-5" style="margin: 0;"> 5</h4>
                        <h4 class="col-xs-5" style="margin: 0;">Numero de WC:</h4> <h4 class="col-xs-5" style="margin: 0;"> 3</h4>
                        <h4 class="col-xs-5" style="margin: 0;">Area:</h4> <h4 class="col-xs-5" style="margin: 0;"> 60 metros quadrados</h4>
                        <h4 class="col-xs-5" style="margin: 0;">Cidade:</h4> <h4 class="col-xs-5" style="margin: 0;"> Porto</h4>
                    </div>
                </div>
                <div class="col-xs-6" style="margin-bottom: 30px">
                    <div class="auction-title col-xs-12">
                        <h2>Envio da encomenda</h2>
                    </div>
                    <div class="auction-bid col-xs-12">
                        <h4 class="col-xs-5" style="margin: 0;">Cidade:</h4> <h4 class="col-xs-5" style="margin: 0;"> Porto</h4>
                        <h4 class="col-xs-5" style="margin: 0;">Localidade:</h4> <h4 class="col-xs-5" style="margin: 0;"> Paranhos</h4>
                        <h4 class="col-xs-5" style="margin: 0;">Numero de Quartos:</h4> <h4 class="col-xs-5" style="margin: 0;"> 5</h4>
                        <h4 class="col-xs-5" style="margin: 0;">Numero de WC:</h4> <h4 class="col-xs-5" style="margin: 0;"> 3</h4>
                        <h4 class="col-xs-5" style="margin: 0;">Area:</h4> <h4 class="col-xs-5" style="margin: 0;"> 60 metros quadrados</h4>
                        <h4 class="col-xs-5" style="margin: 0;">Cidade:</h4> <h4 class="col-xs-5" style="margin: 0;"> Porto</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
{include file='common/footer.tpl'}
