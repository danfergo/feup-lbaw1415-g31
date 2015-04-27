<?php
include_once('../config/init.php');
include_once($BASE_DIR .'database/users.php');
include_once($BASE_DIR .'shared/email.php');

include_once($BASE_DIR .'shared/session.php');

if(isLoggedIn()){
    header("Location: $BASE_URL");
    exit;
}


if (!$_POST['name'] || !$_POST['email'] || !$_POST['password']) {
  $_SESSION['error_messages'][] = 'Todos os campos são obrigatórios.';
  $_SESSION['form_values'] = $_POST;
  header("Location: $BASE_URL" . 'pages/register.php');
  exit;
}

$name = strip_tags($_POST['name']);
$password = $_POST['password'];
$email = $_POST['email'];

 $photo = $_FILES['photo'];
 $extension = end(explode(".", $photo["name"]));

try {
    $activationCode = md5(rand(0, 1000000));
    $userId = registerUser($name,$password,$email,$activationCode);
   move_uploaded_file($photo["tmp_name"], $BASE_DIR . "/images/users/" . $userId . '.' . $extension); // this is dangerous
   chmod($BASE_DIR . "/images/users/" . $userId . '.' . $extension, 0644);
} catch (PDOException $e) {

   $_SESSION['form_values'] = $_POST;

  header("Location: $BASE_URL" . 'pages/register.php');
  exit;
}

$_SESSION['success_messages'][] = 'Utilizador registado com sucesso';

sendEmailConfirmAccount($email,base64_encode($userId . '.' . $activationCode));

header("Location: $BASE_URL". 'pages/confirmaccount.php?user='.$userId);

