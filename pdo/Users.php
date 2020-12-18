<?php
//This class is used for connecting to the database.
include 'dbcon.php';
//This class is used to query the database
class FindUser extends Dbh {
protected function seekUser(){
$sql = "SELECT * FROM `users`";
$result = $this->connect()->query($sql);
while($row = $result->fetchAll()){
$data = $row;
return $data;
// print_r($data);
}
//return $data;
 }
 }
//This class will be used view or use database column data
class UserData extends FindUser {
  
public function showData(){
$newData = $this->seekUser();
// var_dump($newData);
?>
<table>
<tr>
<td>ID</td>
<td>Name</td>
<td>Email</td>
<td>Role</td>
</tr>
<?php
foreach ($newData as $data) { ?>
<tr>
<td><?php echo $data['id']; ?></td>
  <td><?php  echo $data['name'];?></td>
   <td><?php echo $data['email'];?></td>
   <td><?php echo $data['role']; ?></td></tr>
<?php
      }
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PDO Connect_Query_Display</title>
</head>
<body>
<?php
$showUser = new UserData();
$showUser->connect();
echo $showUser->showData();
?>
</body>
</html>
