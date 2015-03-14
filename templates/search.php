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
    <?php
    for ($i = 0; $i < 10; $i++) {
        include "parts/prevs/item-tile.php";
    }
    ?>
</div>
<?php
include "parts/footer.php";
