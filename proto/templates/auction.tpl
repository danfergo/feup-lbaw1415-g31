{include file='common/header.tpl'}

<div class="container-fluid page-wrapper">
    <h1>{$auction.item_title}</h1>
    {if $ADMINMODE}
        <a href="{$BASE_URL}actions/admintools.php?what=0&id={$auction.auction_id}">
            <button type="button" class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
            </button>
        </a>
    {/if}

    {if count($photos) neq 0}

        <div id="auction-carousel" class="carousel slide base-container upper" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                {foreach from=$photos item=photo key=i}
                    {if $i eq 0}
                        <li data-target="#auction-carousel" data-slide-to="{$i}" class="active"></li>
                    {else}
                        <li data-target="#auction-carousel" data-slide-to="{$i}"></li>
                    {/if}
                {/foreach}
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                {foreach from=$photos item=photo key=i}
                    {if $i eq 0}
                        <div class="item active"
                             style="background-image:url('../images/auction/{$auction.auction_id}/{$photo}');"></div>
                    {else}
                        <div class="item"
                             style="background-image:url('../images/auction/{$auction.auction_id}/{$photo}');"></div>
                    {/if}
                {/foreach}
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#auction-carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="right carousel-control" href="#auction-carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    {/if}

    <style type="text/css">
        html, body, #page-wrapper, div.page-wrapper {
            height: 100%;
        }

        #auction-carousel {
            height: 60%;
        }

        #auction-carousel .carousel-inner, #auction-carousel .item {
            height: 100%;
        }

        #auction-carousel .item {
            background: center center no-repeat #000;
            height: 100%;
            background-width: 100% auto;
            border-radius: 3px;
        }

    </style>


    <div class="col-xs-12">
        <div class="item-tile base-container upper col-xs-12">
            <div style="padding:3px;">
                <div class="auction-title col-xs-12"> </div>
                <!--<div class="auction-image col-xs-4">
                    <img src="../images/item-prev.jpg" width="341" height="256" style="border-top-left-radius: 3px;border-top-right-radius: 3px;padding: 10px; float: left;"><br>
                </div> -->
                <div class="col-xs-8">
                    <div class="auction-time-left col-xs-12">
                        <div class="col-xs-12">
                            <h3>Faltam {$auction.time_remaining}</h3>
                        </div>
                    </div>

                    <div class="auction-buying-options col-xs-12">
                        <form>
                            {if $auction.buyer==NULL}
                            <div class="auction-bid-action col-xs-6" style="padding-right: 20px;">
                                <div class="col-xs-3" style="padding-left: 0;">
                                    <h4> Licitar </h4>
                                </div>
                                <div class="input-group">
                                    <input type="float" class="form-control" placeholder="{$auction.current_bid}"
                                           aria-describedby="basic-addon1">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">Submeter</button>
                                            </span>
                                </div>
                                {/if}
                            </div>
                        </form>
                    </div>
                    <div class="aution-buy-now-button col-xs-7" style="padding-left: 93px; padding-right: 0">
                        {if $auction.buyer==NULL}
                            <button type="button" class="btn btn-primary col-xs-9" aria-label="Left Align">
                                Comprar Já!
                            </button>
                        {/if}
                    </div>

                </div>

                <div class="auction-bid col-xs-12">
                    <h4 class="col-xs-6">Valor da licitação mais alta:</h4>
                    <h4 class="col-xs-6">{$auction.current_bid}</h4>
                </div>
                <div class="auction-buy-now col-xs-12">
                    <h4 class="col-xs-6">Valor Comprar já:</h4>
                    <h4 class="col-xs-6">{$auction.buyout}</h4>
                </div>
                <div class="auction-shipping col-xs-12">
                    <h4 class="col-xs-6">Portes:</h4>
                    <h4 class="col-xs-6">{$auction.shipping_cost}</h4>
                </div>
                <div class="auction-seller col-xs-12">
                    <h4 class="col-xs-6">Vendido por:</h4>
                    <h4 class="col-xs-6"><a href="">{$auction.store_name}</a></h4>
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
            {if $auction.buyer!=NULL}
                <div class="auction-image col-xs-4" style="padding-bottom: 34px; padding-left: 22px">
                    <div class="btn-group" role="group" aria-label="...">
                        <button class="btn btn-default" style="float:right;margin-top:25px;">Seguir leilão</button>
                        <button class="btn btn-default" style="float:right;margin-top:25px;">Contactar o vendedor
                        </button>
                        <button class="btn btn-default" style="float:right;margin-top:25px;">Reportar leilão</button>
                    </div>
                </div>
            {/if}
        </div>
    </div>



        <div class="col-xs-12">
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
                </div>
            </div>
        </div>

    {if $auction.buyer == NULL}
        <div class="col-xs-12">
            <h2>Metodos de pagamento</h2>
        </div>
        <div class="col-xs-12">
            <div class="item-tile base-container upper col-xs-12">
                <div style="padding:30px;">


                    <div class="col-xs-6">
                        <div class="auction-title col-xs-12">
                        </div>
                        <div class="auction-bid col-xs-12">
                            <h4 class="col-xs-5" style="margin: 0;">Cidade:</h4> <h4 class="col-xs-5"
                                                                                     style="margin: 0;">
                                Porto</h4>
                            <h4 class="col-xs-5" style="margin: 0;">Localidade:</h4> <h4 class="col-xs-5"
                                                                                         style="margin: 0;">
                                Paranhos</h4>
                            <h4 class="col-xs-5" style="margin: 0;">Numero de Quartos:</h4> <h4 class="col-xs-5"
                                                                                                style="margin: 0;">
                                5</h4>
                            <h4 class="col-xs-5" style="margin: 0;">Numero de WC:</h4> <h4 class="col-xs-5"
                                                                                           style="margin: 0;"> 3</h4>
                            <h4 class="col-xs-5" style="margin: 0;">Area:</h4> <h4 class="col-xs-5" style="margin: 0;">
                                60
                                metros quadrados</h4>
                            <h4 class="col-xs-5" style="margin: 0;">Cidade:</h4> <h4 class="col-xs-5"
                                                                                     style="margin: 0;">
                                Porto</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {if strlen($auction.item_description ) neq 0}
            <div class="col-xs-12">
                <h2>Descrição do autor</h2>
            </div>
            <div class="item-tile base-container upper auction-author-description">
                {$auction.item_description}
            </div>
        {/if}
    {/if}
</div>
</div>
{include file='common/footer.tpl'}
