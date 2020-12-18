        <?php
        include "connection.php";
        class user
        {
                protected $username;
                protected $email;
                protected $role;
                public function getName()
                {
                        echo $this->username;
                }
                public function getEmail()
                {
                        echo $this->email;
                }
                public function getRole()
                {
                        echo $this->role;
                }
        }

        class childUser extends user
        { 
                public function getAll($connection)
                {
                        $selectquery = "select * from `students`";
                        $statement = $connection->query($selectquery);
                        $result = $statement->fetchAll(PDO::FETCH_CLASS, 'user');
                        return $result;
                        // echo "<pre>";
                        // print_r($result);
                }
        }
        $object = new childUser;
        echo '<pre>';
        print_r($object->getAll($connection));
        $obj = new user;
        echo $obj->getName();
