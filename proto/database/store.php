<?php
function getStoreByUser($userId){
    global $conn;

    $stmt = $conn->prepare("SELECT *
                            FROM Store
                            WHERE Store.owner = ?");

    $stmt->execute(array($userId));



    return $stmt->fetch();
}
function getStoreById($storeId){
    global $conn;

    $stmt = $conn->prepare("SELECT *
                            FROM Store
                            WHERE Store.store_id = ?");

    $stmt->execute(array($storeId));



    return $stmt->fetch();
}