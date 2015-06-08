<?php
include_once('../config/init.php');

$query = $_GET['search'];
$order = isset($_GET['order']) ? $_GET['order'] : "RANK_DOWN";
$page = isset($_GET['page']) ? $_GET['page'] : 0;
$number = isset($_GET['number']) ? $_GET['number'] : 10;
$category =  isset($_GET['category']) ? $_GET['category'] : "all";



header("Location: $BASE_URL". 'pages/search.php?search='.$query.'&order='.$order.'&page='.$page.'&number='.$number.'&category='.$category);

