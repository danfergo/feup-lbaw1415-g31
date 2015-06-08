<?php
function createpaypal($ptl,$ihd,$storeId){
    global $conn;

    $conn->beginTransaction();

    try {
        $stmt = $conn->prepare("INSERT INTO payment_method (payment_time_limit,is_hand_delivery,store) VALUES (?,?,?)");
        $stmt->execute(array($ptl,$ihd,$storeId));

        $conn->commit();

        return $storedId;
    }catch(Exception $e){
        $conn->rollBack();
        throw $e;
    }
}