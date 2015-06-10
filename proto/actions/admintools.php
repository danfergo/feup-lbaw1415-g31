<?php
include_once('../config/init.php');
include_once("$BASE_DIR/shared/session.php");// base dir esta a ser declarado no init
include_once("$BASE_DIR/database/users.php");// base dir esta a ser declarado no init
include_once("$BASE_DIR/database/auctions.php");// base dir esta a ser declarado no init
include_once("$BASE_DIR/database/store.php");// base dir esta a ser declarado no init

var_dump($_GET['id']);
/*
if($_GET['what']==0){
   getAuctionsDelete( $_GET['id']);
$smarty->display('index.tpl');
}else if($_GET['what']==1){
   getUserDelete( $_GET['id']);
$smarty->display('index.tpl');

}