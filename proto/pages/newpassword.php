<?php
include_once('../config/init.php');
include_once('../database/users.php');


if(!$_GET['hash']|| !($decodedHash = base64_decode($_GET['hash'])) || count($hashData = explode('.',$decodedHash)) != 2){
    header("Location: {$BASE_URL}index.php");
}
$userId = $hashData[0];

if(!($data = getUser($userId))){
    header("Location: {$BASE_URL}index.php");
}


$smarty->assign('HASH', $_GET['hash']);
$smarty->assign('EMAIL', $data['email']);

$smarty->display('account/newpassword.tpl');

