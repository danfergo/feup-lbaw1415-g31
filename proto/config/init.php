<?php
  session_set_cookie_params(3600, '/feup-lbaw1415-g31/proto/  '); //FIXME
  session_start();

  error_reporting(E_ERROR | E_WARNING); // E_NOTICE by default

  // Report all PHP errors
  error_reporting(E_ALL);


  $BASE_DIR = '/var/www/html/feup-lbaw1415-g31/proto/'; //FIXME
  $BASE_URL = '/feup-lbaw1415-g31/proto/'; //FIXME

  try{
    $conn = new PDO('pgsql:host=vdbm.fe.up.pt;dbname=lbaw1431', 'lbaw1431', 'pY870eu3'); //FIXME
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  }catch(Exception $e){
    die ("we are offline");
  }

  $conn->exec('SET SCHEMA \'proto\''); //FIXME

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
  $smarty->assign('ADMINMODE', isset($_SESSION['admin_mode']) && $_SESSION['admin_mode']);

  require_once($BASE_DIR."/database/auctions.php");
  $smarty->assign('categories', getCategories(null));

  unset($_SESSION['success_messages']);
  unset($_SESSION['error_messages']);  
  unset($_SESSION['field_errors']);
  unset($_SESSION['form_values']);
?>
