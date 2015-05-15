<?php
include_once('../config/init.php');
include_once($BASE_DIR .'database/users.php');

include_once($BASE_DIR .'shared/session.php');

if(isLoggedIn()){
    header("Location: $BASE_URL");
    exit;
}

if(!$_POST['password'] ||  !$_POST['hash'] || !($decodedHash = base64_decode($_POST['hash'])) || count($hashData = explode('.',$decodedHash)) != 2){
    header("Location: {$BASE_URL}");
}
$userId = $hashData[0];

if(!($data = getUser($userId))){
    header("Location: {$BASE_URL}");
}

if(setUserPassword($userId,$_POST['password'])){
    $_SESSION['success_messages'][] = 'Nova palavra passe definida com sucesso.';
    header("Location: $BASE_URL" . 'pages/login.php');
}else{
    $_SESSION['error_messages'][] = 'Algo inesperado aconteceu';
    header("Location: $BASE_URL" . 'pages/newpassword.php');
}