<?php
  function registerUser($name,$pass,$email,$activationCode) {
    global $conn;

    $conn->beginTransaction();

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
    }
  }



  function activateUser($userId,$activationCode){
    global $conn;

    $stmt = $conn->prepare("DELETE FROM User_not_active WHERE user_id = ? AND activation_code = ?");
    $stmt->execute(array($userId,$activationCode));
    return $stmt->rowCount() > 0;
  }



  function login($email, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM Usr
                            WHERE email = ? AND password = ?");
    $stmt->execute(array($email, sha1($password)));
    return $stmt->fetch();
  }


  function getUser($userId){
    global $conn;

    $stmt = $conn->prepare("SELECT *
                            FROM Usr
                            WHERE user_id = ?");
    $stmt->execute(array($userId));

    return $stmt->fetch();
  }

  function setUserPassword($userId,$newPassword, $prefix = ""){
    global $conn;
    $stmt = $conn->prepare("UPDATE Usr SET password = ? WHERE user_id = ?");

    $stmt->execute(array($prefix . sha1($newPassword),$userId));
    return $stmt->rowCount() > 0;
  }

  function getUserByEmail($email){
    global $conn;

    $stmt = $conn->prepare("SELECT *
                              FROM Usr
                              WHERE email = ?");
    $stmt->execute(array($email));

    return $stmt->fetch();
  }




  function userActivationCode($userId){
    global $conn;

    $stmt = $conn->prepare("SELECT activation_code
                              FROM User_not_active
                              WHERE user_id = ?");
    $stmt->execute(array($userId));

    $row = $stmt->fetch();

    return $row ? $row['activation_code'] : false;
  }
