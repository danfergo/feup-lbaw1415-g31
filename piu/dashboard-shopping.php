<?php
include "parts/header.php";

include "dashboard-sidebar.php";
?>

<div class="col-sm-10">
        <?php 
                include('parts/prevs/item-list-buyer-msg.php');
                include('parts/prevs/item-list-buyer-track.php');
                include('parts/prevs/item-list-buyer-paymode.php');
        ?>
</div>

<?php
include "parts/footer.php";
