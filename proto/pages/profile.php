<?php
include_once('../config/init.php');
include_once("$BASE_DIR/shared/session.php");// base dir esta a ser declarado no init
include_once("$BASE_DIR/database/users.php");// base dir esta a ser declarado no init
include_once("$BASE_DIR/database/auctions.php");// base dir esta a ser declarado no init
include_once("$BASE_DIR/database/store.php");// base dir esta a ser declarado no init


$userId= isset($_GET['user']) ? $_GET["user"] :getUserId() ; // vai buscar o user

if(!$userId) {
    header("Location:index.php"); //redirecaco para header
}

if(!($user=getUser($userId))){
    die("1 nao existe user");// TODO filizar se nao existe
}

$store=isset($_GET['store']) ? $_GET["store"] :getStoreByUser($userId) ;

if(!$store){
    die("1 nao existe store $userId");// TODO filizar se nao existe
}

$auctions= isset($_GET['auction']) ? $_GET["auction"] :getAuctionActiveByStore($store["store_id"]) ; // vai buscar o user
$auctionBuyed= isset($_GET['auction']) ? $_GET["auction"] :getAuctionBuyer($store["owner"]) ; // vai buscar o user
$auctionSeller= isset($_GET['auction']) ? $_GET["auction"] :getAuctionSeller($store["store_id"]) ; // vai buscar o user
//$auctionInBuy= isset($_GET['auction']) ? $_GET["auction"] :getAuctiontoPay($userId) ;
$auctionInBuy=array(5);
$smarty->assign('$auctionInBuy',$auctionInBuy);// funcao que liga ao php
$smarty->assign('auctionSeller',$auctionSeller);// funcao que liga ao php
$smarty->assign('auctionBuyed',$auctionBuyed);// funcao que liga ao php
$smarty->assign('auctions',$auctions);// funcao que liga ao php
$smarty->assign('user',$user);// funcao que liga ao php
$smarty->display('profile.tpl');