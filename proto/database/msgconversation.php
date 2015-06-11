<?php
function getConversation($conversationId){

    global $conn;
    $stmt = $conn->prepare("SELECT time,content FROM message WHERE message.conversation=? ORDER BY time  ASC");

    $stmt->execute(array($conversationId));
    return $stmt->fetchAll();
}
function getConversationbyStoreUser($conversationId,$userId,$storeId){

    global $conn;
    $stmt = $conn->prepare("SELECT DISTINCT time,content,usr.name AS sender FROM message,usr WHERE message.conversation=? AND usr.user_id = ?
                            UNION
                            SELECT DISTINCT time,content,store.name AS sender FROM message,store WHERE message.conversation=? AND store.store_id =? ORDER BY time  ASC");

    $stmt->execute(array($conversationId,$userId,$conversationId,$storeId));
    return $stmt->fetchAll();
}
function getUserConversation($userId,$storeId){

    global $conn;
    $stmt = $conn->prepare("SELECT 'user' AS type,store.name AS name,store.store_id AS user_id,conversation.conversation_id AS id FROM conversation,usr,store WHERE usr.user_id =? AND usr.user_id=conversation.client_id AND store.store_id = conversation.store_id
                            UNION
                            SELECT 'store' AS type,usr.name AS name,usr.user_id AS user_id,conversation.conversation_id AS id FROM conversation,usr,store WHERE store.store_id =?  AND usr.user_id=conversation.client_id AND store.store_id = conversation.store_id");

    $stmt->execute(array($userId,$storeId));
    return $stmt->fetchAll();
}