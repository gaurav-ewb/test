<?php
include "connection.php";

try {
    // $connection = new PDO( "mysql:host=$servername;dbname=testing", $username, $password );
    // // set the PDO error mode to exception
    // $connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "INSERT INTO `students` (username, email ,role)
    VALUES ('bhanu', 'bhanu@gmail.com', 'user')";
     
    // use exec() because no results are returned
    $connection->exec( $sql );
     header('Location:user.php');
} catch( PDOException $e ) {
    echo $sql . '<br>' . $e->getMessage();
}

$connection = null;
?>
 
 