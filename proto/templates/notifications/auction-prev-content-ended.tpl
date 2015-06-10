<a href="auction.php"><div style="background-image:url('../images/item-prev.jpg');" class="prev"> </div></a>
<div class="details">         
    <a href="auction.php">
    <div class="costs">
        <div class="container">
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal">Info</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Informação adicional</h4>
                        </div>
                        <div class="modal-body">
                            <p>comprador {$buySel.user_name}</p>
                            <p>vendedor  {$buySel.store_name} </p>
                            <p>valor base {$buySel.auction_base}</p>
                            <p>licitaca final {$buySel.current_bid} </p>
                            <p>actual licitacao {$buySel.shipping_cost}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    </a>
</div>
