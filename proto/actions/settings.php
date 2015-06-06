<?php
include_once('../config/init.php');
include_once($BASE_DIR .'shared/session.php');
include_once($BASE_DIR .'database/users.php');



$userId= isset($_GET['user']) ? $_GET["user"] :getUserId() ; // vai buscar o user

//vai buscar o user
if(!($user=getUser($userId))){
    die("1 nao existe user");// TODO filizar se nao existe
}
//verifica se a password esta correcta
if(sha1($_POST['password'])!=$user['password']) {
    $_SESSION['error_messages'][] = 'Password errada';
    header("Location: {$BASE_URL}pages/login.php");
    exit;
}
//verifica se os campos estão todos preenchidos



$name = strip_tags($_POST['namenew']);
$password = $_POST['passwordnew'];
$email = $_POST['emailnew'];


$photo = $_FILES['photonew'];
$extension = end(explode(".", $photo["namenew"]));


try {
    $info=setSettings($userId,$name,$password,$email,$activationCode);
    move_uploaded_file($photo["tmp_name"], $BASE_DIR . "/images/users/" . $userId . '.' . $extension); // this is dangerous
    chmod($BASE_DIR . "/images/users/" . $userId . '.' . $extension, 0644);
} catch (PDOException $e) {

    exit;
}
$_SESSION['success_messages'][] = 'Alterações com sucesso';
header("Location: {$BASE_URL}pages/index.php");
