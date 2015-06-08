<?php
include_once('../config/init.php');
include_once("$BASE_DIR/shared/session.php");// base dir esta a ser declarado no init
include_once("$BASE_DIR/database/search.php");// base dir esta a ser declarado no init
include_once("$BASE_DIR/database/categories.php");// base dir esta a ser declarado no init




$category = isset($_GET['category']) ? getCategoryByTitle($_GET['category']) : "all";

$auctions = search($_GET['search'] , $_GET['page'] * $_GET['number'], $_GET['page'] * $_GET['number'] + $_GET['number'], $_GET['order']);

$auctions_new = array();

if($_GET['category'] != 'all'){
    foreach($auctions as $auction) {
        $auc_cat = getCategoryById($auction['category_id']);
        if($auc_cat['category_id'] == $category['category_id'] || $auc_cat['parent_category'] == $category['category_id']){ //a
            array_push($auctions_new, $auction);
        }
    }
}
else {
    $auctions_new = $auctions;
}



try {
    $smarty->assign('smarty_search', $auctions_new);
    //$array = array('search' => $_GET['search'], 'order' => $_GET['order'], 'page' => $_GET['page'], 'number' => $_GET['number'], 'category' => $_GET['category']);
    //$smarty->assign('search', $array);
    //var_dump($smarty->getVariable('search'));
}
catch (Exception $e) {
    echo $e;
}
//var_dump(search($_GET['search'] , $_GET['page'] * $_GET['number'], $_GET['page'] * $_GET['number'] + $_GET['number'], $_GET['order']));
$smarty->display('search.tpl');