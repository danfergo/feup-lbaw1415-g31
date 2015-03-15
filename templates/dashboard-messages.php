<?php
include "parts/header.php";

include "dashboard-sidebar.php";
?>

<div class="col-sm-10">
        <?php 
            for($i = 0; $i < 4; $i++){
                include('parts/prevs/item-list-messageonly.php');
            }
        ?>
</div>

<?php
include "parts/footer.php";
