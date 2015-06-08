<?php
include_once('../config/init.php');
include_once("$BASE_DIR/shared/session.php");
include_once("$BASE_DIR/database/auctions.php");
include_once("$BASE_DIR/database/auction.php");
include_once("$BASE_DIR/database/store.php");

if(!isLoggedIn()){
    header("Location: $BASE_URL");
}
if(isset($_GET['auction'])){
    try{
        $a = getAuctionById($_GET['auction']);
        $myStore = getStoreByUser(getUserId());
        if($a['store'] != $myStore['store_id'] ){
            header('Location: index.php');
        }
        var_dump($a);
        $smarty->assign('AUCTION', $a);

    }catch(Exception $e){
        header('Location: index.php');
    }
}else if(isset($_SESSION['tmp_auction'])){
    $smarty->assign('AUCTION', $_SESSION['tmp_auction']);
}

$smarty->assign("categories", getCategories() );

unset($_SESSION['tmp_auction']);

$smarty->display('newauction.tpl');
