{include file='common/header.tpl'}


<h2 style="margin-left:15px;">Recomendados</h2>
{section name=consumidor loop=10}
    <div class="col-xs-12 col-lg-3" style="margin:15px 0;">
        {include file='notifications/item-tile.tpl'}
    </div>
{/section}

{include file='common/footer.tpl'}

