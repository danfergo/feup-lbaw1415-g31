<?php
include_once('../config/init.php');
include_once("$BASE_DIR/database/auctions.php");


// verification of parameters
if(!isset($_GET['auction_id']) || is_nan($_GET['auction_id'])){
    header("Location: index.php");
}

$auction = getAuctionById($_GET['auction_id']) OR header("Location: index.php");

if(file_exists($BASE_DIR . 'images/auction/' . $auction['auction_id'])){
    $photos = array_values(array_diff(scandir($BASE_DIR . 'images/auction/' . $auction['auction_id']), array('..', '.')));
}else $photos = array();

$smarty->assign('auction',$auction);

$smarty->assign('photos',$photos);
$smarty->display('auction.tpl');