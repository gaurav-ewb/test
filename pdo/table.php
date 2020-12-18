<?php
require 'connection.php';

try {

    $pdo = new PDO( 'mysql:host = localhost; dbname=testing', 'root', '' );

    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    $sql = 'SELECT * FROM `students`';

    $res = $pdo->query( $sql );

    if ( $res->rowCount() > 0 ) {

        echo '<table>';

        echo '<tr>';

        echo '<th>ID</th>';

        echo '<th>Name</th>';

        echo '<th>Email</th>';

        echo '<th>Role</th>';

        echo '</tr>';

        while ( $row = $res->fetch() ) {

            echo '<tr>';

            echo '<td>'.$row['id'].'</td>';

            echo '<td>'.$row['username'].'</td>';

            echo '<td>'.$row['email'].'</td>';

            echo '<td>'.$row['role'].'</td>';
            

            echo '</tr>';

        }

        echo '</table>';

        unset( $res );

    } else {

        echo 'No matching records are found.';

    }
 
} catch ( PDOException $e ) {

    die( "ERROR: Could not able to execute $sql. "
    .$e->getMessage() );

}

unset( $pdo );

?>