<?php
include __DIR__."/connection.php";
class selectUser{
protected $username;
protected $email;
protected $role;
public function getName(){
echo $this->username;
}
public function getEmail(){
echo $this->email;
}
public function getRole(){
echo $this->role;
}
}

class childUser extends selectUser{
public function getAll($connection){
$selectquery = "select * from `users`";
$statement = $connection->query($selectquery);
$result = $statement->fetchAll(PDO::FETCH_CLASS, 'selectUser');
return $result;
// echo "<pre>";
// print_r($result);
}
}
$object=new childUser;
echo '<pre>';print_r ($object->getAll($connection));
