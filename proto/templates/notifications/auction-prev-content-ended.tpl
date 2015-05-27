<a href="auction.php"><div style="background-image:url('../images/item-prev.jpg');" class="prev"> </div></a>
<div class="details">         
    <a href="auction.php"><div class="title">{$buySel.item_title}</div></a>
    <div class="extra-details">
        <div class="nrbids"><span class="glyphicon glyphicon-clock" aria-hidden="true"></span>stored:{$buySel.store}  </span></div>
        <div class="nrbids"><span class="glyphicon glyphicon-clock" aria-hidden="true"></span>buyer:{$buySel.buyer}  </span></div>

    </div>
    <div class="costs">
        <div class="bid"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span>valor base {$buySel.auction_base}</div>
        <div class="bid"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>licitaca final {$buySel.current_bid} </div>
        <div class="scost"><span class="glyphicon glyphicon-plane" aria-hidden="true"></span>actual licitacao {$buySel.shipping_cost}  </div>
    </div>
    <div class="clearfix"></div>
</div>
