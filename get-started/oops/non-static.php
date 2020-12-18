<?php
class example
  {
      //decleration of property
      public $var = 'This is public property';
      //decleration of method
      public function displayVar() {
          echo $this->var;
      }
  } 
   //creating an object
    $display = new example();
     //display value return method
      $display->displayVar();

      echo '<br>';
  class foo
  {
      public $name = "gaurav";
      public function a() {
          $this->name;
      }
  }
  //create a object of foo class
  $obj = new foo;
  echo $obj->name;
