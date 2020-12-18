<?php
 
        try {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $connection = new PDO("mysql:host=$servername;dbname=b2020", $username, $password);
            // set the PDO error mode to exception
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            "Connected successfully";
            } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            }
