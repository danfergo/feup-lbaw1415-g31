<?php
include_once('../config/init.php');
include_once("$BASE_DIR/shared/session.php");// base dir esta a ser declarado no init
include_once("$BASE_DIR/database/users.php");// base dir esta a ser declarado no init


$userId= isset($_GET['user']) ? $_GET["user"] :getUserId() ; // vai buscar o user

if(!$userId) {
    header("Location:index.php"); //redirecaco para header
}

if(!($user=getUser($userId))){
    die("nao existe");// TODO filizar se nao existe
}

$stmt = $conn->prepare("SELECT *
                            FROM Usr
                            WHERE user_id = ?");
$auctions=array(
    array("auction_id"=>"2323","auction_title"=>"yes","time_remaning"=>"23232222","nr_bids"=>"5","shiping_cost"=>"222","corrent_bid"=>"2"),
    array("auction_id"=>"2323","auction_title"=>"no","time_remaning"=>"23232222","nr_bids"=>"5","shiping_cost"=>"222","corrent_bid"=>"2"),
    array("auction_id"=>"2323","auction_title"=>"ooooo","time_remaning"=>"23232222","nr_bids"=>"5","shiping_cost"=>"222","corrent_bid"=>"2")
);

$smarty->assign('auctions',$auctions);// funcao que liga ao php
$smarty->assign('user',$user);// funcao que liga ao php

$smarty->display('profile.tpl');