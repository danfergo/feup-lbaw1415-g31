<?php
include "parts/header.php";
?>
<div class="base-container upper" style="margin-top:70px;position:relative;">
    <div class="base-container upper" style="position:absolute;top:-70px;left:40px;height:220px;width:220px;"> 
        <img src="img/avatar.jpg" width="220" height="220" style="border-radius: 3px;">
    </div>
    <div class="info" style="margin-left:270px;min-height:190px;padding:20px 30px;">
        <button class="btn btn-default" style="float:right;margin-top:25px;">Enviar mensagem</button>
        <h2>João Costa</h2>
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

<h2>Últimas vendas efetuadas</h2>
<?php 
    for($i = 0; $i < 5 ; $i++){
        include ('parts/prevs/item-list-rating.php');
    }
?>
<div style="text-align:center;">
    <a href="#"> Ver mais vendas </a>
</div>

<h2>Últimas compras efetuadas</h2>
<?php 
    for($i = 0; $i < 5 ; $i++){
        include ('parts/prevs/item-list-rating.php');
    }
?>
<div style="text-align:center;">
    <a href="#"> Ver mais compras </a>
</div>

<?php
include "parts/footer.php";
