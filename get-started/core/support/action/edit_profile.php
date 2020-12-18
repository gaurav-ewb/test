<?php

require_once __DIR__ . "/../../../connection.php";
if ($_POST['submit']) {

/**
* first we get profile data
* and decode it
* store the session['id] in a variable
* and decrement the id because the index of array start with 0
* and we have id start with one
*/
$id = $_SESSION['id'];
$age = $_POST['age'];
$dob = $_POST['DOB'];
$address = $_POST['address'];
$state = $_POST['state'];
$distt = $_POST['distt'];
$country = $_POST['country'];
$pin = $_POST['Pin-code'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$skin = $_POST['skin'];
$hair = $_POST['hair'];
$gen = $_POST['gender'];
try {
    $sql = "UPDATE `b2020`.`user_details` SET `age`='$age', `date_of_birth`='$dob', `address`='$address', `distt`='$distt',`state`='$state', `pin`='1457', `gender`='$gen', `country`='$country', `height`='$height', `weight`='$weight', `skin`='$skin', `hair`='$hair' WHERE  `user_id`='$id'";
      $query = $connection->prepare($sql);
    // Query Execution
    $query->execute(array($age,$dob,$address,$state,$distt,$country,$pin,$height,$weight,$skin,$hair,$gen));
    echo ' record updated successfully';
} catch (PDOException $e) {
echo $sql . '<br>' . $e->getMessage();
}
header('Location:users/profile.php');
}
/**
* first we get profile data
* and decode it
* store the session['id] in a variable
* and decrement the id because the index of array start with 0
* and we have id start with one
*/
// $get_profile = file_get_contents(file_profile());
// $data_profile = json_decode($get_profile, true);
// $id = $_SESSION['id'];
// --$id;
// $row = $data_profile[$id];
// if ($_POST['submit']) {

// $data = array(
// 'name' => $_SESSION['username'],
// 'address' => $_POST['address'],
// 'state' => $_POST['state'],
// 'distt' => $_POST['distt'],
// 'country' => $_POST['country'],
// 'Pin-code' => $_POST['Pin-code'],
// 'age' => $_POST['age'],
// 'DOB' => $_POST['DOB'],
// 'height' => $_POST['height'],
// 'weight' => $_POST['weight'],
// 'gender' => $_POST['gender'],
// 'id' => $_SESSION['id'],
// 'userid' => $_SESSION['id']

// );
// $data_profile[$id] = $data;

// $datas = json_encode($data_profile, JSON_PRETTY_PRINT);
// file_put_contents(file_profile(), $datas); //put the all contents of user profile in profile.json file
// // // return header('Location:users/profile.php');
// }
// }
