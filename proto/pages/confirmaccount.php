<?php
include_once('../config/init.php');

include_once($BASE_DIR .'shared/session.php');

if(isLoggedIn()){
    header("Location: $BASE_URL");
    exit;
}

if(!$_GET['user']){
    header("Location: $BASE_URL" . 'index.php');
    exit;
}


$smarty->display('account/confirmaccount.tpl');

