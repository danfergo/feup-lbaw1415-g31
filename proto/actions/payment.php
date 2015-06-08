<?php
include_once('../config/init.php');
include_once($BASE_DIR .'shared/session.php');
include_once($BASE_DIR .'database/users.php');

$userId= isset($_GET['user']) ? $_GET["user"] :getUserId() ; // vai buscar o user
//vai buscar o user
if(!($user=getUser($userId))){
    die("1 nao existe user");// TODO filizar se nao existe
}

var_dump($_POST);

header("Location: $BASE_URL" . 'pages/profile.php');