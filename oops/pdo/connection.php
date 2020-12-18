<?php
 
      
    try {

      $servername = "localhost";
      $username = "homestead";
      $password = "secret";
      $connection = new PDO("mysql:host=$servername;dbname=pdo", $username, $password);
      // set the PDO error mode to exception
       $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
      echo "Connected successfully";
     
     

    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
