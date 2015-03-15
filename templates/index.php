<?php 
    include "parts/header.php";
    ?>
    
<h2 style="margin-left:15px;">Recomendados</h2>
    <?php for($i = 0; $i < 10; $i++){
        include "parts/prevs/item-tile.php";
    } ?>
     
<?php
    include "parts/footer.php";