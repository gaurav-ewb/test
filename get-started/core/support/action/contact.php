<?php
    require_once __DIR__ . "/../../../connection.php";

    if ($_POST['submit']) {
        //    get the contact file
        // $file_contact = file_get_contents(file_contact());
        // $contact = json_decode($file_contact, true);
        // $get_users = file_get_contents(file_user());
        // $users = json_decode($get_users, true);
        // $get_profile = file_get_contents(file_profile());
        // $profile = json_decode($get_profile, true);

        /**
         * strtotime
         * @return Returns a timestamp on success. FALSE on failure
         */
        
         
        // $folder ="uploads/"; 
        // $image = $_FILES['image']['name']; 
        // $path = $folder . $image ; 
        // $target_file=$folder.basename($_FILES["image"]["name"]);
        // $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
        // $allowed=array('jpeg','png' ,'jpg'); $filename=$_FILES['image']['name']; 
        // $ext=pathinfo($filename, PATHINFO_EXTENSION); if(!in_array($ext,$allowed) ) 
        // {
        // echo "Sorry, only JPG, JPEG, PNG & GIF  files are allowed.";
        // }
        // else{ 
        // move_uploaded_file( $_FILES['image'] ['tmp_name'], $path); 
        
        $time = strtotime(date("y-m-d h:1:5"));
        $file = new SplFileInfo($_FILES["avtar"]["name"]);
        $ext = $file->getExtension();
        $filename = $time . '.' . $ext;
        $uploadfile = storage_path() . $filename;
        $response = move_uploaded_file($_FILES["avtar"]["tmp_name"], $uploadfile);
        echo $uploadfile;

        // print_r($response);

        //    if($response==true){
        //     return storage_link() .'/contact/'.$filename;
        //    }


        $user_id = $_SESSION['id'];
        $name = $_POST['name'];
        $Alternative_Number = $_POST['Anumber'];
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
        $img = $filename;
        try {
            $sql = "INSERT INTO `contacts`(user_id,fullname,Alternative_Number,mobile,birthday,email,nickname,company,job_title,home_email,website,location,notes,image) VALUES('$user_id','$name','$Alternative_Number','$mobile','$birthday',
       '$email','$nickname','$company','$job_title','$home_email','$website','$location','$notes','$img')";
            $connection->exec($sql);
        } catch (PDOException $e) {
            echo "failed: " . $e->getMessage();
        }
        header('Location:index.php');
    }

    //   genrate contact unique id
    //     if(count($contact)==0) {
    //         $data['id']=1;

    //     }else {

    //     $datacontact=$contact;

    //     foreach($datacontact as $contacts){
    //        $data['id'] =$contacts['id']+1;

    //     }

    //     }
    //     if ( $contact['id'] ) {
    //         array_push( $contact, $data );
    //     } else {
    //         $contact[] = $data; 
    //     }
    //     $indexes = array(
    //         'users' => count($users),
    //         'profile' => count($profile),
    //         'contacts'=>count($contact)

    //     );
    //     $index[] = $indexes;
    // $encode_index = json_encode($index, JSON_PRETTY_PRINT);
    //  file_put_contents(file_indexes(), $encode_index);

    //     $decode_data = json_encode($contact, JSON_PRETTY_PRINT);

    //     if (file_put_contents(file_contact(), $decode_data)) {

    //         header('Location:index.php');
    //     }
    // }
    ?>
