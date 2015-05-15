<?php
/** código esboço para que ilustra uma página tipica de API

include_once('../config/init.php');
include_once($BASE_DIR .'database/auctions.php');


// validaçao de permissoes - neste caso nao existe.


// validaçao de parametros obrigatorios
if(! isset($_GET['query']) ){
    echo json_encode(array('error','query not defined.'));
    die();
}

// atribuiçao de parametros a variaveis / definiçao de valores por omissao
$category = isset($_GET['category') ?  $_GET['category'] : null;
$query = $_GET['query'];
$query = isset($_GET['sortyby') ?  $_GET['sortby'] : "REL_DESC";
$page = isset($_GET['page') ?  $_GET['page'] : "REL_DESC";


// tratamento de operaçao
$rawReply = searchAuctions($category,$query);


$reply = array();
...
...

echo json_encode($reply);















 */




