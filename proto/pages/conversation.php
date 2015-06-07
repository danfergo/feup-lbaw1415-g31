<?php
include_once('../config/init.php');
include_once($BASE_DIR .'shared/session.php');
include_once($BASE_DIR .'database/users.php');
include_once($BASE_DIR .'database/msgconversation.php');


$userId= isset($_GET['user']) ? $_GET["user"] :getUserId() ; // vai buscar o user
//vai buscar o user
if(!($user=getUser($userId))){
    die("1 nao existe user");// TODO filizar se nao existe
}
if(!(isset($_GET['conversasion_id']))){
    die("1 nao existe conversa");// TODO filizar se nao existe
}

$conversationId=$_GET['conversasion_id'];
$conversation=getConversation($conversationId);

$smarty->assign('conversation',$conversation);
$smarty->display('conversation.tpl');