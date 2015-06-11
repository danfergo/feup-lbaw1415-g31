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
    global $conn,$BASE_DIR;

    $stmt = $conn->prepare("SELECT *,current_bid
                            FROM auction,auction_view
                            WHERE auction.store = ? AND now()<auction.end_time AND auction_view.auction_id=auction.auction_id ");//AND Auction.auction_id = auction_view.auction_id");

    $stmt->execute(array($storeId));

    $auctions = array();
    while($row = $stmt->fetch() )
    {
        if(file_exists($BASE_DIR . 'images/auction/' . $row['auction_id'])) {
            $row['photo'] = 'images/auction/' . $row['auction_id'] . '/' .array_values(array_diff(scandir($BASE_DIR . 'images/auction/' . $row['auction_id']), array('..', '.')))[0];
        }else $row['photo'] = 'images/item-prev.jpg';
        $auctions[] = $row;
    }


    return $auctions;
}
function getAuctionBuyer($userId){
    global $conn;

    $stmt = $conn->prepare("SELECT *,current_bid,usr.name AS user_name,store.name AS store_name
                            FROM auction,auction_view,usr,store
                            WHERE auction.buyer=?  AND now()>auction.end_time AND auction_view.auction_id=auction.auction_id AND usr.user_id=auction.buyer AND store.store_id=auction.store");



    $stmt->execute(array($userId));

    return $stmt->fetchAll();
}
function getAuctionSeller($storeId){
    global $conn;

    $stmt = $conn->prepare("SELECT *,current_bid,usr.name AS user_name,store.name AS store_name
                            FROM auction,auction_view,usr,store
                            WHERE auction.store = ? AND now()>auction.end_time  AND auction_view.auction_id=auction.auction_id AND  usr.user_id=auction.buyer AND store.store_id=auction.store");



    $stmt->execute(array($storeId));

    return $stmt->fetchAll();
}

function viewIndex()
{
    global $conn, $BASE_DIR;

    // WHERE state = "active"
    $stmt = $conn->prepare("SELECT * FROM auction_view ORDER BY page_rank DESC LIMIT ?   ");
    $stmt->execute(array(50));
    $auctions = null;
    while($row = $stmt->fetch() )
    {
        if(file_exists($BASE_DIR . 'images/auction/' . $row['auction_id'])) {
            $row['photo'] = 'images/auction/' . $row['auction_id'] . '/' .array_values(array_diff(scandir($BASE_DIR . 'images/auction/' . $row['auction_id']), array('..', '.')))[0];
        }else $row['photo'] = 'images/item-prev.jpg';
        $auctions[] = $row;
    }
    return $auctions;

}


function getCategories($parent = null, $recursive = true)
{
    global $conn;

    if (is_null($parent)) {
        $stmt = $conn->prepare("SELECT * FROM category WHERE parent_category ISNULL");
        $stmt->execute();
    }else if($parent === 'all') {
        $stmt = $conn->prepare("SELECT * FROM category");
        $stmt->execute();
    }else {
        $stmt = $conn->prepare("SELECT * FROM category WHERE parent_category = ?");
        $stmt->execute(array($parent));
    }

    $categories = array();
    while($row = $stmt->fetch()){
        if($recursive) $row['sub_categories'] = getCategories($row['category_id']);
        $categories[] = $row;
    }
    return $categories;

}


/*
 * @param $categoryId - id of category, null for all.
 * @return $stmt->fetchAll();
 *          array({
 *                  id : <primary_key>,
 *                  name : <string>,
 *                  type : <bool | enum | num | string >,
 *                  ...
 *                  (if type equals enum) options : array(value1,value2,value3)
 *
 */
function getCategoryCharacteristics($categoryId){
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM category WHERE category_id = ?");
    $stmt->execute(array($categoryId));
    $r = $stmt->fetch();

    // recursive stuff to get parent characteristics.
    $characteristics =  $r['parent_category'] !== null ? getCategoryCharacteristics($r['parent_category']) : array();


    $query = "SELECT * FROM characteristics_view ";
    if($categoryId != null) $query .= "WHERE category_id =  ? ";
    $query .= "ORDER BY characteristic_id ASC, position ASC";

    $stmt = $conn->prepare($query);

    if($categoryId != null) $stmt->execute(array($categoryId)); else $stmt->execute();

    $appendTo = -1;
    $last = null;
    while($r = $stmt->fetch()){

        if($appendTo == $r['characteristic_id']){
            $last['options'][$r['position']] = $r['value'];
        }else{
            if($last != null) $characteristics[] = $last;

            $characteristic = array(
                'id' => $r['characteristic_id'],
                'cat_id' => $r['category_id'],
                'name' => $r['name']
            );

            $isEnum = $r['num_units'] === null;
            if($isEnum) {
                $characteristic['type'] = 'enum';
                $characteristic['min'] = $r['min_o'];
                $characteristic['max'] = $r['max_o'];
                $characteristic['options'] = array();
                $characteristic['options'][$r['position']] = $r['value'];

                $appendTo = $characteristic['id'];
                $last = $characteristic;
            }else{
                $characteristic['type'] = 'num';
                $characteristic['min'] = $r['min'];
                $characteristic['max'] = $r['max'];
                $characteristic['units'] = $r['num_units'];
                $characteristic['precision'] = $r['num_precision'];


                $characteristics[] = $characteristic;
                $last = null;
            }
        }

    }
    if($last != null) $characteristics[] = $last;
    return $characteristics;
}
function getAuctionById($auctionId){
    global $conn;

    $stmt = $conn->prepare("SELECT *,store.name AS store_name
                            FROM auction,auction_view,store
                            WHERE auction.auction_id = ? AND auction_view.auction_id=auction.auction_id AND store.store_id=auction.store");



    $stmt->execute(array($auctionId));

    return $stmt->fetch();
}
function getAuctions(){
    global $conn;

    $stmt = $conn->prepare("SELECT *,current_bid,usr.name AS user_name,store.name AS store_name
                            FROM auction,auction_view,usr,store
                            WHERE  auction_view.auction_id=auction.auction_id AND  usr.user_id=auction.buyer AND store.store_id=auction.store");


    $stmt->execute(array());

    return $stmt->fetchAll();
}
function getAuctionsDelete($auctionId){
    global $conn;

    $stmt = $conn->prepare("DELETE FROM auction WHERE auction.auction_id = ?");


    $stmt->execute(array($auctionId));

    return $stmt->fetchAll();
}

