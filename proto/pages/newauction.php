<?php
include_once('../config/init.php');
include_once("$BASE_DIR/database/auctions.php");

$smarty->assign("categories", getCategories() );
$smarty->display('newauction.tpl');
