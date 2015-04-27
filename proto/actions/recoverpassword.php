<?php
include_once('../config/init.php');
include_once($BASE_DIR .'database/users.php');
include_once($BASE_DIR .'shared/email.php');

include_once($BASE_DIR .'shared/session.php');

if(isLoggedIn()){
    header("Location: $BASE_URL");
    exit;
}


if(!isset($_POST['email'])){
    header("Location: $BASE_URL" . 'pages/index.php');
    exit;
}
$email = $_POST['email'];
if(!($userData=getUserByEmail($email))){
    $_SESSION['error_messages'][] = 'Email não registado no sistema';
    header("Location: $BASE_URL" . 'pages/recoverpassword.php');
    exit;
}

$userId = $userData['user_id'];
$newPassword = md5(rand(0, 1000000));

if(setUserPassword($userId,$newPassword,'a_')){
    sendEmailNewPassword($email,base64_encode($userId. '.' . $newPassword));

    $_SESSION['success_messages'][] = 'Verifica a tua caixa de entrada.';
    header("Location: $BASE_URL" . 'pages/recoverpassword.php');
}else{
    $_SESSION['error_messages'][] = 'Algo inesperado aconteceu';
    header("Location: $BASE_URL" . 'pages/recoverpassword.php');
}