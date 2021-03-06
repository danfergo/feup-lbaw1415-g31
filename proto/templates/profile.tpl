{include file='common/header.tpl'}

<div class="base-container upper" style="margin-top:70px;position:relative;">
    <div class="base-container upper" style="position:absolute;top:-70px;left:40px;height:220px;width:220px;">
        <img src="{$BASE_URL}images/avatar.jpg" width="220" height="220" style="border-radius: 3px;">
    </div>

    <div class="info" style="margin-left:270px;min-height:190px;padding:20px 30px;">
        <button class="btn btn-default" style="float:right;margin-top:25px;">Enviar mensagem</button>
        <h2>{$user.name}</h2>
        <br>

        <div class="buyer-rank" style="float:left;">
            <div style="font-size:16px;">
                <b> Comprador &nbsp;</b>
                <span class="stars">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </span>
                <div>
                    8 de 10 compras efetuadas com sucesso (80%)
                </div>
            </div>
        </div>


        <div class="seller-rank" style="float:right;text-align:right;">
            <div style="font-size:16px;">
                <b> Vendedor &nbsp;</b>
                <span class="stars">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </span>
                <div>
                    18 de 20 vendas efetuadas com sucesso (90%)
                </div>
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-xs-5">

        <h2>Últimas vendas efetuadas</h2>
        {foreach from=$auctionSeller item=buySel}
             <div  style="margin-bottom: 15px;">
                {include file='notifications/item-list-rating.tpl'}
             </div>
        {/foreach}

        <div style="text-align:center;">
            <a href="#"> Ver mais vendas </a>
        </div>

        <h2>Últimas compras efetuadas</h2>
        {foreach from=$auctionBuyed item=buySel}
            <div  style="margin-bottom: 15px;">
                {include file='notifications/item-list-rating.tpl'}
            </div>
        {/foreach}


        <div style="text-align:center;">
            <a href="#"> Ver mais compras </a>
        </div>
    </div>

    <div class="col-xs-7">

        <h2>Leilões ativos</h2>
        <div class="row">
            {foreach from=$auctions item=auction}
                <div class="col-xs-6" style="margin-bottom: 15px;">
                    {include file='notifications/item-tile.tpl'}
                </div>
            {/foreach}


        </div>
    </div>

</div>
{include file='common/footer.tpl'}
