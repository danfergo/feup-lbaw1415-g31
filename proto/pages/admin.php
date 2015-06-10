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

$auctions= isset($_GET['auction']) ? $_GET["auction"] :getAuctions() ;
$users= getAuctions($userId) ;

$smarty->assign('users',$users);// funcao que liga ao php
$smarty->assign('auctions',$auctions);// funcao que liga ao php

if($_SESSION['admin_mode']){
    $smarty->display('admin.tpl');
}else
    $smarty->display('profile.tpl');
