<?php
include "parts/header.php";

include "dashboard-sidebar.php";
?>

<div class="col-sm-10">
        <?php 
                include('parts/prevs/item-list-giverating.php');
                include('parts/prevs/item-list-seller-draft.php');
                include('parts/prevs/item-list-seller-active.php');
                include('parts/prevs/item-list-seller-confirmshippment.php');
                include('parts/prevs/item-list-buyer-msg.php');
        ?>
</div>

<?php
include "parts/footer.php";
