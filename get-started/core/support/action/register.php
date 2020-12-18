    <?php
     include_once __DIR__.'/../../../connection.php';
    
    /**
     * Check all the fields of form have value or not
     * if all fileds are filled properly then sumit the form
     * else exectuion will stop immediately
     * @return the input filed data that enter by the users
     */
    function emailExists($connection, $email) {
        $stmt = $connection->prepare("SELECT email FROM user WHERE email='$email'");
        $stmt->execute([$email]); 
        return $stmt->fetchColumn();
   } 
    if ($_POST['submit']) {
        $name=$_POST['Name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $role=$_POST['role'];
        if ($_POST['Name'] == "" || $_POST['email'] == "" || $_POST['password'] == "" || $_POST['cPass'] == "" || $_POST['role'] == "") {
            echo "error:ALL fields are required";
            // header('Location:register.php');
        } elseif ($_POST["password"] !== $_POST["cPass"]) {
            echo "The password doesn't match";
            
        } elseif (emailExists($connection, $email)) {
            echo "email already exist";
        }
        else {
            try {
                 $sql = "INSERT INTO `user` (name, email ,password, role) 
                 VALUES ('$name','$email','$password','$role')";
                 $connection->exec( $sql );
                 echo 'New record created successfully';
                 $sqls = "INSERT INTO `user_details` (user_id, name) 
                 VALUES (LAST_INSERT_ID(),'$name')";
                 $connection->exec( $sqls );
                 echo 'New record created successfully';
             } catch( PDOException $e ) {
                 echo $sql . '<br>' . $e->getMessage();
             }
             $connection = null;
             //header('Location:login.php');;
           }
        }
            // Get the form data in database/users.json file

            // $file = file_get_contents(file_user());
            // /*
            //  *
            //  * Store JSON data into the PHP and then decode it into a PHP
            //  * decoded data of users
            // */
            // $users = json_decode($file, true);
            // $data = array(
            //     "Name" => $_POST['Name'],
            //     "email" => $_POST['email'],
            //     "password" => $_POST['password'],
            //     'role' => $_POST['role']
            // );
            // get user unique id
            // check user is register or not

            // if (count($users) == 0) {
            //     $data['id'] = 1; //user id value start with one
            // } else {
            //     $ids = [];
            //     foreach ($users as $user) {
            //         array_push($ids, $user['id']);
            //         $newid = $ids[count($ids) - 1] + 1;
            //         $data['id'] = $newid;
            //     }
            // }
            // use the array function "filter_array" to filter the all element in array
            // when the same email is enter then it produce error
            /**
             * @var public
             * @return array() It is the variable to store the all filtered array element
             */

            // $filtered = array_filter($users, function ($user) {
            //     return $_POST['email'] == $user['email'];
            // });
            // if (count($filtered)) {
            //     return "this is errorr";
            // }
            // $users[] = $data;
            // json_encode() function is used to encode a value to JSON format.

    //         $encod = json_encode($users, JSON_PRETTY_PRINT);
    //         if (file_put_contents(file_user(), $encod)) {
    //             echo "Successfull Rigerster data in json file";
    //         }
    //         $profile_data = file_get_contents(file_profile());
    //         $profile = json_decode($profile_data, true);
    //         $filter_profile = array_filter($profile, function ($prof) {

    //             return $prof['id'] == $prof['user_id'];
    //         });
    //         // print_r($profile_data);

    //         if (count($filter_profile)) {
    //             echo "new id genrate";
    //         } else {
    //             echo "profile allready exists";
    //         }
    //         $profile_data = array(
    //             'name' => $_POST['Name'],
    //             'age' => "",
    //             "DOB" => "",
    //             'phone' => "",
    //             'address' => "",
    //             'distt' => "",
    //             'state' => "",
    //             'Pin-code' => "",
    //             "country" => "",
    //             "height" => "",
    //             "weight" => "",
    //             "gender" => "",
    //             "skin color" => "",
    //             "hair color" => "",

    //         );
    //         if (count($profile) == 0) {
    //             $profile_data['user_id'] = 1;
    //             $profile_data['id'] = 1;
    //         } else {
    //             $id_s = [];
    //             foreach ($profile as $prof) {
    //                 array_push($id_s, $prof['user_id'], $prof['id']);
    //                 $newids = $id_s[count($id_s) - 1] + 1;
    //                 $profile_data['user_id'] = $newids;
    //                 $profile_data['id'] = $newids;
    //             }
    //         }
    //         if ($data['id'] == $profile_data['id']) {
    //             $profile[] = $profile_data;
    //             $encode_profile = json_encode($profile, JSON_PRETTY_PRINT);
    //             if (file_put_contents(file_profile(), $encode_profile)) {
    //                 echo "profile genrate successfully";
    //             } else {
    //                 echo "profile not genrate";
    //             }
    //         }
    //     }
    //     $file_contact = file_get_contents(file_contact());
    //     $contact = json_decode($file_contact, true);

    //     $indexes = array(
    //         'users' => count($users),
    //         'profile' => count($profile),
    //         'contact'=>count($contact)

    //     );
    // }
    // $index[] = $indexes;
    // $encode_index = json_encode($index, JSON_PRETTY_PRINT);
    // if (file_put_contents(file_indexes(), $encode_index)) {
    //    echo "<h4>index genrate successfully</h4>";
    // } else {
    //     echo "index not genrate";
    // }

    ?>
