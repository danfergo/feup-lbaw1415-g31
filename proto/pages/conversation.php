<?php
include_once('../config/init.php');
include_once($BASE_DIR .'shared/session.php');
include_once($BASE_DIR .'database/users.php');
include_once($BASE_DIR .'database/msgconversation.php');
include_once($BASE_DIR .'database/store.php');


$userId= isset($_GET['user']) ? $_GET["user"] :getUserId() ; // vai buscar o user
//vai buscar o user
if(!($user=getUser($userId))){
    die("1 nao existe user");// TODO filizar se nao existe
}
if(!(isset($_GET['conversasion_id']))){
    die("1 nao existe conversa");// TODO filizar se nao existe
}

$conversationId=$_GET['conversasion_id'];
//$conversation=getConversation($conversationId);

if($_GET['conversasion_type']==='store')
{
    $store=getStoreById($_GET['conversasion_user_id']) ;

    if(!$store){
        die("1 nao existe store $userId");// TODO filizar se nao existe
    }
    $conversation=getConversationbyStoreUser($conversationId,$user['usr_id'],$store['store_id']);
    var_dump($conversation);
}
else
{

    $store=getStoreByUser($userId) ;

    if(!$store){
        die("1 nao existe store1 $userId");// TODO filizar se nao existe
    }
    $conversation=getConversationbyStoreUser($conversationId,$_GET['conversasion_user_id'],$store['store_id']);
    var_dump($conversation);
}

$smarty->assign('conversation',$conversation);
$smarty->display('conversation.tpl');