<?php
include_once('../config/init.php');
include_once("$BASE_DIR/shared/session.php");// base dir esta a ser declarado no init
include_once("$BASE_DIR/database/users.php");// base dir esta a ser declarado no init

$userId= isset($_GET['user']) ? $_GET["user"] :getUserId() ; // vai buscar o user

if(!$userId) {
    header("Location:index.php"); //redirecaco para header
}
if(!($user=getUser($userId))){
    die("1 nao existe user");// TODO filizar se nao existe
}

$smarty->assign('user',$user);// funcao que liga ao php

$smarty->display('settings.tpl');

