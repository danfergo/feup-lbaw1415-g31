<?php
include_once('../config/init.php');
include_once("$BASE_DIR/database/auction.php");


// verification of parameters

if(!isset($_GET['auction'])){
    header("Location: index.php");
}

$auction = getAuctionById($_GET['auction']) OR die("auction does not exist");

$photos = array_values(array_diff(scandir($BASE_DIR.'images/auction/'.$auction['auction_id']), array('..', '.')));

$smarty->assign('auction',$auction);
$smarty->assign('photos',$photos);
$smarty->display('auction.tpl');