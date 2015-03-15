<?php
include "parts/header.php";
?>

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
    <div style="float:right">
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                Ordenar resultados por
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Custo+Portes descendente</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Custo+Portes ascendente</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Custo ascendente</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Custo descendente</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Nº licitaçoes descente</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Nº licitaçoes ascendente</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tempo restante descente</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tempo restante ascendente</a></li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php
    for ($i = 0; $i < 10; $i++) {
        include "parts/prevs/item-tile.php";
    }
    ?>
</div>
<?php
include "parts/footer.php";
