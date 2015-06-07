<?php
include_once('../../config/init.php');
include_once("$BASE_DIR/shared/session.php");// base dir esta a ser declarado no init
include_once("$BASE_DIR/database/users.php");// base dir esta a ser declarado no init
include_once("$BASE_DIR/database/store.php");// base dir esta a ser declarado no init

$userId= isset($_GET['user']) ? $_GET["user"] :getUserId() ; // vai buscar o user

if(!$userId) {
    header("Location:index.php"); //redirecaco para header
}
$storeId=getStoreByUser($userId) ;
if(!$storeId){
    die("1 nao existe store $userId");// TODO filizar se nao existe
}

if(!($conversation=getUserConversation($userId,$storeId["store_id"]))){
    die("nao exitem conversas");// TODO filizar se nao existe
}

var_dump($conversation);
$smarty->assign('conversations',$conversation);// funcao que liga ao php


$smarty->display('dashboard/messages.tpl');
