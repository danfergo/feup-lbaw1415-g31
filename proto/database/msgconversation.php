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