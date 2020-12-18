    <?php

    require_once __DIR__ . '/../bootstrap/app.php';
    require_once '../connection.php';
    require_once file_header();
   echo $id=intval($_GET['id']);
    if(isset($_SESSION['username'])){
        $sql="select * from user_details WHERE user_id ='$id'";
    // $sql="SELECT * FROM user_details WHERE user_id='$id'";
    $data = $connection->prepare($sql);
    $data->execute();
    $results = $data->fetchAll(PDO::FETCH_ASSOC);
       ?>
    <table class="table">
        <thead>
            <tr>
                <!-- Set the table headings  -->

                <th scope="col">name</th>
                <th scope="col">address</th>
                <th scope="col">pin-code</th>
                <th scope="col">contury</th>
                <th scope="col">state</th>
                <th scope="col">age</th>
                <th scope="col">DOB</th>
                <th scope="col">Height</th>
                <th scope="col">Weight</th>
                <th scope="col">Gender</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <?php
               foreach ($results as $user) { ?>
                        <td><?php echo $user['name'] ?></td>
                        <td><?php echo $user['address'] ?></td>
                        <td><?php echo $user['pin'] ?></td>
                        <td><?php echo $user['country'] ?></td>
                        <td><?php echo $user['state'] ?></td>
                        <td><?php echo $user['age'] ?></td>
                        <td><?php echo $user['date_of_birth'] ?></td>
                        <td><?php echo $user['height'] ?></td>
                        <td><?php echo $user['weight'] ?></td>
                        <td><?php echo $user['gender'] ?></td>

                <?php
                    }
                }
                  ?>
            </tr>
        </tbody>
    </table>
