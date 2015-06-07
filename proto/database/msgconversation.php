<?php
function getConversation($conversationId){

    global $conn;
    $stmt = $conn->prepare("SELECT * FROM message WHERE message.conversation=?");

    $stmt->execute(array($conversationId));
    return $stmt->fetchAll();
}
