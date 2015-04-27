<?php
include_once('../config/init.php');
include_once($BASE_DIR .'database/users.php');

include_once($BASE_DIR .'shared/session.php');

if(isLoggedIn()){
    header("Location: $BASE_URL");
    exit;
}

if (!$_GET['user']) {
    header("Location: $BASE_URL" . 'index.php');
    exit;
}
$userId = $_GET['user'];
$userData = getUser($userId);
if(!$userData) {
    header("Location: $BASE_URL" . 'index.php');
    exit;
}

$activationCode = userActivationCode($userId);
if(!$activationCode){
    $_SESSION['success_messages'][] = 'A conta já se encontrava ativa';
    header("Location: $BASE_URL" . 'pages/login.php');
    exit;
}

$email = $userData['e_mail'];

sendEmailConfirmAccount($email,base64_encode($userId . '.' . $activationCode));

header("Location: $BASE_URL". 'pages/confirmaccount.php?user='.$userId);
