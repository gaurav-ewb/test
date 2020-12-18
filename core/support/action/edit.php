<?php
   include_once __DIR__.'/../../../connection.php';
    //  get the users
    if(isset($_POST['submit']))
    {
      try {
    $id=intval($_GET['id']);
    $name=$_POST['name'];
    $emailid=$_POST['email'];
    $address=$_POST['address'];
    $state=$_POST['state'];
    $distt=$_POST['distt'];
    $country=$_POST['country'];
    $pincode=$_POST['pincode'];
    $age=$_POST['age'];
    $DOB=$_POST['DOB'];
    $height=$_POST['height'];
    $weight=$_POST['weight'];
    $skin=$_POST['skin'];
    $hair=$_POST['hair'];
    $gender=$_POST['gender'];

  $sql="UPDATE user JOIN user_details ON user.id = user_details.user_id
  SET user.name = '$name', user.email='$emailid', user_details.name='$name', user_details.address='$address',user_details.state='$state',user_details.distt='$distt', user_details.country='$country',
  user_details.pin='$pincode',user_details.age='$age', user_details.date_of_birth='$DOB',user_details.height='$height',
  user_details.weight='$weight',user_details.skin='$skin',user_details.hair='$hair',user_details.gender='$gender' WHERE user.id = $id";

    $query = $connection->prepare($sql);
    // Query Execution
    $query->execute();
   } catch (\Throwable $th) {
      $th->getMessage();
   }
    header('location:index.php');
    }
    //     $users=file_get_contents(file_user());
    //     $de_user=json_decode($users,true);

    //     //  print_r($de_user);
    //     foreach ($de_user as &$user ) {
    //         if($user['id']==$_GET['id']) {
    //             $user["Name"] = $_POST['name'];
    //             $user["email"] = $_POST['email'];
 
    //         }
    //     }
    //     // $filtered_array = array_filter($de_user, function ($user) {
    //     //     return $user['id'] == $_GET['id'];
    //     // });
         
    //     $user_de=json_encode($de_user,JSON_PRETTY_PRINT);
    //     // print_r($user_de);
    //     if(file_put_contents(file_user(),$user_de)) {
    //         echo "save successful";
    //     }


    //    //   get the profile
    //     $profile=file_get_contents(file_profile());
    //     $de_profile=json_decode($profile,true);

    //     //  print_r($de_user);
    //     foreach ($de_profile as &$profile ) {
    //         if($profile['id']==$_GET['id']) {
    //             $profile["address"] = $_POST['address'];
    //             $profile["email"] = $_POST['email'];
    //             $profile["state"] = $_POST['state'];
    //             $profile["distt"] = $_POST['distt'];
    //             $profile["country"] = $_POST['country'];
    //             $profile["Pin-code"] = $_POST['Pin-code'];
    //             $profile["age"] = $_POST['age'];
    //             $profile["DOB"] = $_POST['DOB'];
    //             $profile["height"] = $_POST['height'];
    //             $profile["weight"] = $_POST['weight'];
    //             $profile["skin"] = $_POST['skin'];
    //             $profile["hair"] = $_POST['hair'];
    //             $profile["gender"] = $_POST['gender'];

    //         }
    //     }
    //     // $filtered_array = array_filter($de_user, function ($user) {
    //     //     return $user['id'] == $_GET['id'];
    //     // });
         
    //     $profile_de=json_encode($de_profile,JSON_PRETTY_PRINT);
    //     // print_r($user_de);
    //     if(file_put_contents(file_profile(),$profile_de)) {
    //        header('location:index.php');
    //     }
    // }
    ?>
