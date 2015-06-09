<?php
function isLoggedIn(){
    return isset($_SESSION['user_id']) ;
}

function getUserId(){
    return isset($_SESSION['user_id'])? $_SESSION['user_id'] : false ;
}
function getAuctionId(){
    return isset($_SESSION['auction_id'])? $_SESSION['auction_id'] : false ;
}
