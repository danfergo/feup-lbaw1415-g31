<?php
include_once('../config/init.php');
include_once($BASE_DIR .'database/users.php');

include_once($BASE_DIR .'shared/session.php');

if(isLoggedIn()){
    header("Location: $BASE_URL");
    exit;
}



if (!$_GET['hash']) {
    header("Location: $BASE_URL" . 'index.php');
    exit;
}

$hashDecoded = base64_decode($_GET['hash']);
if ($hashDecoded === false) {
    header("Location: $BASE_URL" . 'index.php');
    exit;
}

$hashParameters = explode(".",$hashDecoded);
if (count($hashParameters) != 2) {
    header("Location: $BASE_URL" . 'index.php');
    exit;
}

$userId = $hashParameters[0];
$activationCode = $hashParameters[1];

$userData = getUser($userId);
if(!$userData) {
    header("Location: $BASE_URL" . 'index.php');
    exit;
}

if(!userActivationCode($userId)){
    $_SESSION['success_messages'][] = 'A conta já se encontrava ativa';
    header("Location: $BASE_URL" . 'pages/login.php');
    exit;
}

if(activateUser($userId,$activationCode)){
    $_SESSION['success_messages'][] = 'Conta ativada com sucesso';
    header("Location: $BASE_URL" . 'pages/login.php');
    exit;
}else {
    header("Location: $BASE_URL" . 'pages/index.php');
    exit;
}

