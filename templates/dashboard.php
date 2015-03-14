<?php
include "parts/header.php";
?>

<div class="col-sm-2">
    <a href="newauction.php"><button class="btn btn-sm btn-primary">Anunciar</button></a>
    <h4><span class="glyphicon glyphicon-shopping-cart"> </span> Compras </h4>
    <h4><span class="glyphicon glyphicon-inbox"> </span> Vendas </h4>
    <h4><span class="glyphicon glyphicon-envelope"> </span> Mensagens </h4>
    <br>
    <h4><span class="glyphicon glyphicon-cog"> </span> Definiçoes </h4>

</div>
<div class="col-sm-10">
        <?php 
            for($i = 0; $i < 4; $i++){
                include('parts/prevs/item-list-seller-draft.php');
            }
        ?>
</div>

<?php
include "parts/footer.php";
