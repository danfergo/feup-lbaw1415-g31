<?php
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

include_once($BASE_DIR .'shared/session.php');

if(isLoggedIn()){
  header("Location: $BASE_URL");
  exit;
}


  if (!$_POST['email'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'Ambos os campos necessitam de ser preenchidos';
    header("Location: {$BASE_URL}pages/login.php");
    exit;
  }

  $email = $_POST['email'];
  $password = $_POST['password'];

  if ($userData = login($email, $password)) {
    $_SESSION['user_id'] = $userData['user_id'];
    $_SESSION['is_admin'] = $userData['is_admin'];
    $_SESSION['email'] = $email;
    $_SESSION['success_messages'][] = $email. $password .'Login efetuado com sucesso';
    header("Location: {$BASE_URL}pages/index.php");
  } else {
    $_SESSION['error_messages'][] = 'Par e-mail password inválidos';
    header("Location: {$BASE_URL}pages/login.php");
  }


