<a href="../pages/auction.php?auction_id={$user.user_id}"><div style="background-image:url('../images/item-prev.jpg');" class="prev"> </div></a>
<div class="details">
    <a href="../pages/auction.php?auction_id={$user.user_id}">
        <div class="costs">
            {if $ADMINMODE}
                <a href="{$BASE_URL}actions/admintools.php?what=1&id={$user.user_id}">
                    <button type="button" class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
                    </button>
                </a>
            {/if}

            <p>comprador {$user.name}</p>
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
                                <p>user {$user.name}</p>
                                <p>email {$user.email}</p>
                                <p>adress {$user.address} </p>
                                <p>nif {$user.nif}</p>
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
