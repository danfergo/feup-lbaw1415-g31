<?php
function isLoggedIn(){
    return isset($_SESSION['user_id']) ;
}

function getUserId(){
    return isset($_SESSION['user_id'])? $_SESSION['user_id'] : false ;
}

