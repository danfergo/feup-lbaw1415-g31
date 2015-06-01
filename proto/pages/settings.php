<?php
include_once('../config/init.php');
include_once('../database/users.php');







if(setUsername($userId,$_POST['userName'])){
    $_SESSION['success_messages'][] = 'Update ao nome com sucesso';
}else{
    $_SESSION['error_messages'][] = 'Erro na messages';
}





$smarty->display('settings.tpl');

