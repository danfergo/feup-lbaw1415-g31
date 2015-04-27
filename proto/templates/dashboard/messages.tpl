{include file='common/header.tpl'}
{include file='dashboard/sidebar.tpl'}

<div class="col-sm-10">
    <?php
            for($i = 0; $i < 4; $i++){
                include('parts/prevs/item-list-messageonly.php');
            }
        ?>
</div>
{include file='common/footer.tpl'}
