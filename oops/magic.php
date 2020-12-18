<?php
class student {
    private $name;
    private $email;
    //construct example
    public function __construct($name, $email) 
    {
       echo $this->name = $name;
       echo $this->email = $email;
    }
}
$objstudent = new student("Gaurav", "gaurav.ewb@gmail.com");
