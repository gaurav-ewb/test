<?php
include 'connection.php';
try{ 
    $update = "UPDATE students SET username='chachuan' WHERE id=3"; 
   $connection->exec($update); 
    echo "Records was updated successfully."; 
    header('Location:user.php');
} catch(PDOException $e){ 
    die("ERROR: Could not able to execute $sql. " 
                                . $e->getMessage()); 
} 
?>