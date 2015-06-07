<?php
include_once('../config/init.php');
include_once($BASE_DIR .'shared/session.php');
include_once($BASE_DIR .'database/users.php');

$userId= isset($_GET['user']) ? $_GET["user"] :getUserId() ; // vai buscar o user
//vai buscar o user
if(!($user=getUser($userId))){
    die("1 nao existe user");// TODO filizar se nao existe
}
// verifica se e uma store ou user que comunica com este utlizador

var_dump($_POST);
//verifica se a password esta correcta
/*if(sha1($_POST['password'])!=$user['password']) {
    $_SESSION['error_messages'][] = 'Password errada';
    header("Location: {$BASE_URL}pages/profile.php");
    exit;
}
//verifica se os campos estão todos preenchidos


//$photo = $_FILES['photonew'];
//$extension = end(explode(".", $photo["namenew"]));


if(setSettings($userId,$_POST['namenew'],$_POST['emailnew'],$_POST['passwordnew'])){
    $_SESSION['success_messages'][] =  'definições alteradas com sucesso.';
    header("Location: $BASE_URL" . 'pages/profile.php');
}else{
    $_SESSION['error_messages'][] = 'erro na alteração de definições';
    header("Location: $BASE_URL" . 'pages/settings.php');
}
*/