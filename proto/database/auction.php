<?php

function getAuctionById($auctionId){
    global $conn;
    $stmt = $conn->prepare("SELECT *,   current_bid::numeric FROM auction_view WHERE auction_id = ?");

    $stmt->execute(array($auctionId));
    return $stmt->fetch();
}