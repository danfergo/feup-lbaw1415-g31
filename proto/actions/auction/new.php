<?php
require_once('../../config/init.php');
require_once("$BASE_DIR/shared/session.php");
require_once("$BASE_DIR/database/auction.php");
require_once("$BASE_DIR/database/store.php");


// is user logged_in ?
if(!isLoggedIn()){
    header("Location : $BASE_URL");
}

$auction_id = isset($_POST['auction_id']) ? $_POST['auction_id'] : NULL;

$item_title = isset($_POST['item_title']) ? $_POST['item_title'] : NULL;
$item_description = isset($_POST['item_description']) ? $_POST['item_description'] : NULL;

$auction_base = isset($_POST['auction_base']) ? $_POST['auction_base'] : NULL;
$buyout = isset($_POST['buyout']) ? $_POST['buyout'] : NULL;
$shipping_cost = isset($_POST['shipping_cost']) ? $_POST['shipping_cost'] : NULL;

$end_time = isset($_POST['end_time']) ? $_POST['end_time'] : NULL;
$category_id = isset($_POST['category_id']) ? $_POST['category_id'] : NULL;


$_SESSION['tmp_auction']['auction_id'] = $auction_id;
$_SESSION['tmp_auction']['item_title'] = $item_title;
$_SESSION['tmp_auction']['item_description'] = $item_description;
$_SESSION['tmp_auction']['auction_base'] = $auction_base;
$_SESSION['tmp_auction']['buyout'] = $buyout;
$_SESSION['tmp_auction']['shipping_cost'] = $shipping_cost;
$_SESSION['tmp_auction']['end_time'] = $end_time;
$_SESSION['tmp_auction']['category_id'] = $category_id;

$error = false;

if($item_title == null || $end_time == null || $auction_base == null || $category_id == null || strtotime($end_time) < time()){

    if($item_title == null){
        $_SESSION['error_messages'][] = 'O Titulo do leilão não foi definido';
    }else if($end_time == null){
        $_SESSION['error_messages'][] = 'O tempo de fim do leilão não foi definido';
    }else if($auction_base == null){
        $_SESSION['error_messages'][] = 'O valor base do leilão não foi definido';
    }else if($category_id == null){
        $_SESSION['error_messages'][] = 'A categoria não foi definida';
    }else if(strtotime($end_time) < time()){
        $_SESSION['error_messages'][] = 'Tempo de fim inválido' . strtotime($end_time) . ' ' .time();
    }

    $error = true;
}else {

    $store = getStoreByUser(getUserId());
    try{
        $auction_id = submitAuction($auction_id,$store['store_id'], $item_title,$item_description, date("Y-m-d H:i",strtotime($end_time)),
            $auction_base, $buyout, $shipping_cost, $category_id, null);
    }catch (PDOException $e){
        $_SESSION['error_messages'][] = 'Valores inválidos';
        $error = true;
    }
}


if(isset($_POST['save_and_preview'])){
    header("Location: {$BASE_URL}pages/auction.php" . ($auction_id != null ? '?auction='.$auction_id : ''));
}else {
    header("Location: {$BASE_URL}pages/newauction.php" . ($auction_id != null ? '?auction_id='.$auction_id : ''));
}