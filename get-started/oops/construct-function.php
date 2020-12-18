<?php 
 class person 
 {
     private $fname;
     private $lname;
     
     public function __construct($fname, $lname) {
          $this->fname = $fname;
          $this->lname = $lname;
     }
     public function showName() {
         echo "My name is: " . $this->fname . " " . $this->lname;
     }
 }
  $jhon = new person("Gaurav", "Sharma");
  echo $jhon->showName();
