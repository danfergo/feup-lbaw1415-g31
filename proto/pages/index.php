<?php
include_once('../config/init.php');
include_once("$BASE_DIR/database/auctions.php");

//$smarty->tpl_vars['ADMINMODE'] = true;
//$smarty->assign('ADMINMODE', true);



$smarty->assign("auctions", viewIndex());
$smarty->display('index.tpl');


