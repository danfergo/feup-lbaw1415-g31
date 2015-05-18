<?php

function auctionNew($title,$pass,$email,$activationCode) {
    global $conn;

    $conn->beginTransaction();
    /*
    try {
        $stmt = $conn->prepare("INSERT INTO Usr (name,password,email) VALUES (?,?,?)");
        $stmt->execute(array($name, sha1($pass), $email));

        $userId = $conn->lastInsertId("usr_user_id_seq");

        $stmt2 = $conn->prepare("INSERT INTO User_not_active (user_id,activation_code) VALUES(?,?)");
        $stmt2->execute(array($userId, $activationCode));

        $conn->commit();

        return $userId;
    }catch(Exception $e){
        $conn->rollBack();
        throw $e;
    }*/
}



function auctionEnd($auctionId){
/*    global $conn;

    $stmt = $conn->prepare("DELETE FROM User_not_active WHERE user_id = ? AND activation_code = ?");
    $stmt->execute(array($userId,$activationCode));
    return $stmt->rowCount() > 0;*/
}

function getAuctionActiveByStore($storeId){
    global $conn;

    $stmt = $conn->prepare("SELECT *
                            FROM auction
                            WHERE auction.store = ? AND now()<auction.end_time ");//AND Auction.auction_id = auction_view.auction_id");



    $stmt->execute(array($storeId));

    return $stmt->fetchAll();
}
function getAuctionBuyer($userId){
    global $conn;

    $stmt = $conn->prepare("SELECT *
                            FROM auction
                            WHERE auction.buyer=?");



    $stmt->execute(array($userId));

    return $stmt->fetchAll();
}
function getAuctionSeller($storeId){
    global $conn;

    $stmt = $conn->prepare("SELECT *
                            FROM auction
                            WHERE auction.store = ? AND now()>auction.end_time ");



    $stmt->execute(array($storeId));

    return $stmt->fetchAll();
}



    function viewIndex()
    {
        global $conn;

        // WHERE state = "active"
        $stmt = $conn->prepare("SELECT * FROM auction_view ORDER BY page_rank DESC LIMIT ?   ");
        $stmt->execute(array(50));
        $auctions = null;
        while($row = $stmt->fetch() )
        {
            $row['time_remaining'] =
            $auctions[] = $row;
        }
       return $auctions;

    }

