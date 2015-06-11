<a href="../pages/auction.php?auction_id={$auction.auction_id}"><div style="background-image:url({$BASE_URL}{$auction.photo});" class="prev"> </div></a>
<a href="../pages/auction.php?auction_id={$auction.auction_id}" >
<div class="details" >
    <div class="title">{$auction.item_title}</div>
    <div class="extra-details">
        <div class="endtime"><span class="glyphicon glyphicon-clock" aria-hidden="true"></span>Faltam {$auction.time_remaining}  </span></div>
        <div class="nrbids"><span class="glyphicon glyphicon-clock" aria-hidden="true"></span>Licitaçoes: {$auction.nr_bids} </span></div>
    </div>

    <div class="costs">
        <div class="bid"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span>valor base {$auction.auction_base} </div>
        <div class="bnow"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>buy out {$auction.buyout}  </div>
        <div class="scost"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>actual licitacao {$auction.current_bid}  </div>
    </div>
    <div class="clearfix"></div>
</div>
</a>