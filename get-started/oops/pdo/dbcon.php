<?php
class Dbh {
private $servername;
private $username;
private $password;
private $dbname;

public function connect() {
$this->servername = "localhost";
$this->username = "homestead";
$this->password = "secret";
$this->dbname = "pdo";
$this->charset = "utf8mb4";

try {
//set dsn
$dsn = 'mysql:host='.$this->servername.';dbname='.$this->dbname.';charset='.$this->charset;
$pdo = new PDO($dsn,$this->username,$this->password);
return $pdo;
} catch (PDOException $e) {
echo "<h2>connection failed:</h2> ".$e->getMessage();
}
}
}
