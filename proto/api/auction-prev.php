<?php
    include "../config/init.php";
    include "$BASE_DIR/shared/session.php";

    header('Content-Type: application/json; charset=utf-8');


    if(!isLoggedIn()){
        echo json_encode(array('error' => 'Sessão não iniciada.'));
        exit;
    }


    $photo = $_FILES['photo'];
    $tmpNamePath = explode("/", $photo["tmp_name"]);
    $name = $tmpNamePath[count($tmpNamePath)-1];

    try {
        if (!file_exists($BASE_DIR . "images/tmp/". getUserId() ."/")) {
            mkdir($BASE_DIR . "images/tmp/". getUserId()."/", 0777, true);
        }
        $photoPath =$BASE_DIR . "images/tmp/" . getUserId(). "/" .  $name;
        move_uploaded_file($photo["tmp_name"],$photoPath); // this is dangerous
        chmod($photoPath, 0644);
        echo json_encode(array());
    } catch (PDOException $e) {

        echo json_encode(array('error' => 'Não foi possivel fazer o upload da fotografia'));
        exit;
    }

