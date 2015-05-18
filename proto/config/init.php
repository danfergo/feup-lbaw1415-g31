<?php
  session_set_cookie_params(3600, '/~lbaw1431/proto/'); //FIXME
  session_start();

  error_reporting(E_ERROR | E_WARNING); // E_NOTICE by default

  // Report all PHP errors
  error_reporting(E_ALL);


  $BASE_DIR = 'C:\wamp\www\Leiloes\proto\\'; //FIXME
  $BASE_URL = '/Leiloes/proto/'; //FIXME

  $conn = new PDO('pgsql:host=vdbm.fe.up.pt;dbname=lbaw1431', 'lbaw1431', 'pY870eu3'); //FIXME
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $conn->exec('SET SCHEMA \'public\''); //FIXME

  include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');
  
  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);
  
  $smarty->assign('ERROR_MESSAGES',  isset($_SESSION['error_messages']) ? $_SESSION['error_messages'] : array());
  $smarty->assign('FIELD_ERRORS',  isset($_SESSION['field_errors']) ?  $_SESSION['field_errors'] : array());
  $smarty->assign('SUCCESS_MESSAGES',isset($_SESSION['success_messages']) ? $_SESSION['success_messages']: array());
  $smarty->assign('FORM_VALUES', isset($_SESSION['form_values']) ? $_SESSION['form_values']: array());
  $smarty->assign('USERNAME', isset($_SESSION['username']) ?  $_SESSION['username'] : array());

  $smarty->assign('LOGGEDIN', isset($_SESSION['user_id']));
  $smarty->assign('ISADMIN', isset($_SESSION['is_admin']) && $_SESSION['is_admin']);
  $smarty->assign('ADMINMODE', false);



  unset($_SESSION['success_messages']);
  unset($_SESSION['error_messages']);  
  unset($_SESSION['field_errors']);
  unset($_SESSION['form_values']);
?>
