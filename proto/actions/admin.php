<?php
include_once('../config/init.php');
include_once($BASE_DIR .'database/users.php');
include_once($BASE_DIR .'shared/session.php');

$userId= isset($_GET['user']) ? $_GET["user"] :getUserId() ; // vai buscar o user
if(!$userId) {

    header("Location:index.php"); //redirecaco para header
}
$_SESSION['admin_mode']=!$_SESSION['admin_mode'];
header("Location: {$BASE_URL}pages/index.php");

