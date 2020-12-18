    <?php
    require_once __DIR__ . "/../../../connection.php";
    if ($_POST['submit']) {
        //  get the users
        $t=time();
        $time = strtotime(date("y-m-d h:1:5"));
        $t.$time;
        $file = new SplFileInfo($_FILES["avtar"]["name"]);
        $ext = $file->getExtension();
        $filename = $t . '.' . $ext;
        $uploadfile = storage_path() . $filename;
        $response = move_uploaded_file($_FILES["avtar"]["tmp_name"], $uploadfile);
        echo $uploadfile;
        
        $id=intval($_GET['id']);
    // $name=$_POST['name'];
    // $emailid=$_POST['email'];
       $name=$_POST['name'];
       $alternative = $_POST['Anumber'];
       $mobile = $_POST['mobile'];
       $birthday = $_POST['birthday'];
       $email = $_POST['email'];
       $nickname = $_POST['nickname'];
       $company = $_POST['company'];
       $job_title = $_POST['job_title'];
       $home_email = $_POST['home_email'];
       $website = $_POST['website'];
       $location = $_POST['location'];
       $notes = $_POST['notes'];
      
       try {
           //code...
       $sql="update contacts set fullname='$name',Alternative_number='$alternative',mobile='$mobile', birthday='$birthday',email='$email',nickname='$nickname', company='$company',job_title='$job_title',home_email='$home_email',website='$website',location='$location',notes='$notes', image='$filename' where id='$id'";
       $query = $connection->prepare($sql);
       // Query Execution
       $query->execute();
    
       } catch (\Throwable $th) {
             $th->getMessage();
       }
    } 
      header('location:index.php');
        
    //     $time = strtotime(date("y-m-d h:1:5"));
    //     $file = new SplFileInfo($_FILES["avtar"]["name"]);
    //     $ext = $file->getExtension();
    //     $filename = $time.'.'.$ext;
    //     $uploadfile = storage_path(). $filename;
    //     $response=move_uploaded_file($_FILES["avtar"]["tmp_name"], $uploadfile);


    //     //  print_r($de_user);
    //     /**
    //      * & is used to To allow a function to modify it because
    //      * by default ,function arguments are passed by value i.e
    //      *   the argumnets with in the function is changed,it does not
    //      * get changed outside the function.
    //      */
    //     foreach ($de_contact as &$contact) {
    //         if ($contact['id'] == $_GET['id']) {
    //             $contact["name"] = $_POST['name'];
    //             $contact["mobile"] = $_POST['mobile'];
    //             $contact["email"] = $_POST['email'];
    //             $contact["nickname"] = $_POST['nickname'];
    //             $contact["company"] = $_POST['company'];
    //             $contact["job_title"] = $_POST['job_title'];
    //             $contact["website"] = $_POST['website'];
    //             $contact["location"] = $_POST['location'];
    //             $contact["notes"] = $_POST['notes'];
    //             $contact['img']== $filename;
    //         }
    //     }
    //     // $filtered_array = array_filter($de_user, function ($user) {
    //     //     return $user['id'] == $_GET['id'];
    //     // });

    //     $contact_de = json_encode($de_contact, JSON_PRETTY_PRINT);
    //     // print_r($user_de);
    //     if (file_put_contents(file_contact(), $contact_de)) {
    //         echo "save successful";
    //     }
    //     header('Location:index.php');

    //     //    
    // }
    ?>
