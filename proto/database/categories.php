<?php
function getAllCategories($parent = null)
{
    global $conn;

    if (is_null($parent)) {
        $stmt = $conn->prepare("SELECT * FROM category WHERE parent_category ISNULL");
        $stmt->execute();
    } else {
        $stmt = $conn->prepare("SELECT * FROM category WHERE parent_category = ?");
        $stmt->execute(array($parent));
    }

    $categories = array();
    while($row = $stmt->fetch()){
        $row['sub_categories'] = getAllCategories($row['category_id']);
        $categories[] = $row;
    }
    return $categories;

}

function getCategoryByTitle($title)
{
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM category WHERE title = ?");
    $stmt->execute(array($title));

    return $stmt->fetch();

}

function getCategoryById($id)
{
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM category WHERE category_id = ?");
    $stmt->execute(array($id));

    return $stmt->fetch();

}