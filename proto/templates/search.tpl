{include file='common/header.tpl'}

<div class="col-sm-2">
    <h4><span class="glyphicon glyphicon-list-alt"> </span> Categorias </h4>
    <ul>
        <li>Carros (97)
            <ul>
                <li>Carros (20) </li>
                <li>Motas (40) </li>
                <li>Barcos (37)</li>
            </ul>
        </li>
        <li>Casas (231)
            <ul>
                <li>Apartamentos (200)</li>
                <li>Moradias (15) </li>
                <li>Barracos (16) </li>
            </ul>
        </li>
    </ul>
</div>
<div class="col-sm-10">
    <form role="form" name="order" action="{$BASE_URL}actions/search.php" method="get">
        <div style="float:right;margin-right:15px;">
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                    Ordenar resultados por
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{$BASE_URL}actions/search.php?order=COST_PORTS_DOWN">Custo+Portes descendente</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{$BASE_URL}actions/search.php?order=COST_PORTS_UP"">Custo+Portes ascendente</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{$BASE_URL}actions/search.php?order=COST_DOWN"">Custo descendent</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{$BASE_URL}actions/search.php?order=COST_UP"">Custo ascendente</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{$BASE_URL}actions/search.php?order=BIDS_DOWN"">Nº licitaçoes descente</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{$BASE_URL}actions/search.php?order=BIDS_UP"">Nº licitaçoes ascendente</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{$BASE_URL}actions/search.php?order=TIME_DOWN"">Tempo restante descente</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{$BASE_URL}actions/search.php?order=TIME_UP"">Tempo restante ascendente</a></li>
                </ul>
            </div>
        </div>
    </form>
    <div class="clearfix"></div>

    {foreach from = $smarty_search key = idK item = auction}
        <div class="col-xs-12 col-lg-3" style="margin:15px 0;">
            {include file='notifications/item-tile.tpl'}
        </div>
    {/foreach}

</div>
{include file='common/footer.tpl'}
