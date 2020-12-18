<?php

require_once 'bootstrap/app.php';
require_once 'connection.php';
try{
  $id = $_GET['id'];
  $data = "SELECT role from `user` where id='$id'";
  $result = $connection->prepare($data);
  $result->execute();
  $row = $result->fetch(PDO::FETCH_ASSOC);
  if ($row['role'] == $_SESSION['Role'] and $_SESSION['id'] != $_GET['id']) {
    echo "Sorry you can't delete admin";
  }
   else {
    $sql="DELETE user,user_details FROM user INNER JOIN user_details ON user_details.user_id = user.id WHERE user.id = $id AND user_details.user_id=$id";
    $connection->exec($sql);
    echo "record deleted successfully";
    } 
  }
    catch(PDOException $e) {
      $e->getMessage();
    //echo "The record are not deleted";
    }
