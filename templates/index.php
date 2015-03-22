<?php
include "parts/header.php";
?>

<h2 style="margin-left:15px;">Recomendados</h2>
<?php for ($i = 0; $i < 10; $i++) {
    ?>
    <div class="col-xs-12 col-lg-3" style="margin:15px 0;">

        <?php include "parts/prevs/item-tile.php"; ?>
    </div>
    <?php
}
?>

<?php
include "parts/footer.php";
