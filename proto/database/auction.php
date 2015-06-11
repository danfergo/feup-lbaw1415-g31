<?php


/*
function verifyCharacteristic($characteristics, $characteristicId, $value){

    foreach($characteristics as $characteristic){
        if($characteristic['id'] == $characteristicId){
            switch($characteristic['type']){
                case 'enum':
                    if(!is_array($value)) return false;
                    foreach($value as $v){
                        if(!array_key_exists($v, $characteristic['options'])) return false;
                    }
                    return $value;
                    break;
                case 'num':
                    if(is_nan($value)) return false;

                    if($value < $characteristic['min']){
                        return $characteristic['min'];
                    }else if($value > $characteristic['max']){
                        return $characteristic['max'];
                    }else {
                        return round($value, $characteristic['precision']);
                    }
                    break;
            }
        }
    }
    return false;
}


function deleteCharacteristics($auctionId){
    global $conn;
    $stmt = $conn->prepare("DELETE FROM item_characteristic_value WHERE auction_item = ?");

    $stmt->execute(array($auctionId));
}

function addCharacteristics($auctionId,$categoryId,$characteristicsValues){
    global $conn;

    $characteristics = getCategoryCharacteristics($categoryId);

    $verifiedCharacteristics = array();
    foreach($characteristics as $k => $v){
        $vv = verifyCharacteristic($characteristics, $k,$v);
        if($vv === false){
            return 'INVALID_CHARACTERISTIC';
        }
        $verifiedCharacteristics[$k] = $vv;
    }

    $stmt = $conn->prepare("DELETE FROM item_characteristic_value WHERE auction_item = ?");

    $stmt->execute(array($auctionId));
}
*/


function updateAuction($auction,$store,$item_title, $item_description, $end_time, $auction_base, $buyout, $shipping_cost, $category_id, $characteristics){
    global $conn;


    $stmt = $conn->prepare("INSERT INTO auction (store,item_title,item_description,end_time,auction_base,buyout,shipping_cost,category_id) VALUES "
        ."(?,?,?,?,?,?,?,?)");

    $stmt->bindParam(1, $store, PDO::PARAM_INT);
    $stmt->bindParam(2, $item_title, PDO::PARAM_INT);
    $stmt->bindParam(3, $item_description, PDO::PARAM_INT);
    $stmt->bindParam(4, $end_time, $end_time == null ? PDO::PARAM_NULL : PDO::PARAM_INT);
    $stmt->bindParam(5, $auction_base, PDO::PARAM_INT);
    $stmt->bindParam(6, $buyout, $buyout == null ? PDO::PARAM_NULL : PDO::PARAM_INT);
    $stmt->bindParam(7, $shipping_cost, $shipping_cost == null ? PDO::PARAM_NULL : PDO::PARAM_INT);
    $stmt->bindParam(8, $category_id, PDO::PARAM_INT);

    $stmt->execute();

    return $conn->lastInsertId("auction_auction_id_seq");
}

function newAuction($store,$item_title, $item_description, $end_time, $auction_base, $buyout, $shipping_cost, $category_id, $characteristics){
    global $conn;


    $stmt = $conn->prepare("INSERT INTO auction (store,item_title,item_description,end_time,auction_base,buyout,shipping_cost,category_id) VALUES "
        ."(?,?,?,?,?,?,?,?)");

    $stmt->bindParam(1, $store, PDO::PARAM_INT);
    $stmt->bindParam(2, $item_title, PDO::PARAM_INT);
    $stmt->bindParam(3, $item_description, PDO::PARAM_INT);
    $stmt->bindParam(4, $end_time, $end_time == null ? PDO::PARAM_NULL : PDO::PARAM_INT);
    $stmt->bindParam(5, $auction_base, PDO::PARAM_INT);
    $stmt->bindParam(6, $buyout, $buyout == null ? PDO::PARAM_NULL : PDO::PARAM_INT);
    $stmt->bindParam(7, $shipping_cost, $shipping_cost == null ? PDO::PARAM_NULL : PDO::PARAM_INT);
    $stmt->bindParam(8, $category_id, PDO::PARAM_INT);

    $stmt->execute();

    return $conn->lastInsertId("auction_auction_id_seq");
}



function submitAuction($auctionId = null,$store, $item_title,$item_description, $end_time, $auction_base, $buyout, $shipping_cost, $category_id, $characteristics){
    if($auctionId == null){
        return newAuction($store,$item_title,$item_description, $end_time, $auction_base, $buyout, $shipping_cost, $category_id, $characteristics);
    }else {
        return updateAuction($auctionId,$store,$item_title, $item_description, $end_time, $auction_base, $buyout, $shipping_cost, $category_id, $characteristics);
    }
}