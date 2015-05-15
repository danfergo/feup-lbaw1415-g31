<?php
include_once('../config/init.php');

include_once($BASE_DIR .'shared/session.php');

if(isLoggedIn()){
    header("Location: $BASE_URL");
    exit;
}

$smarty->display('account/register.tpl');

