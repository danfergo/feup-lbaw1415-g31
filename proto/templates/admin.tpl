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

        </div>


        <div class="seller-rank" style="float:right;text-align:right;">

        </div>

    </div>
</div>

<div class="row">
    <div class="col-xs-5">
        <h2>Leilão</h2>
        {foreach from=$auctions item=buySel}
            <div  style="margin-bottom: 15px;">
               {include file='notifications/item-list-rating.tpl'}
            </div>
        {/foreach}


    </div>

    <div class="col-xs-7">
        <h2>Utilizadores</h2>
        {foreach from=$users item=user}
            <div  style="margin-bottom: 15px;">
                {include file='notifications/user-item.tpl'}
            </div>
        {/foreach}

    </div>

</div>
{include file='common/footer.tpl'}
