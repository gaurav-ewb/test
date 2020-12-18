<?php
  class SomeClass {
      public $a;
      public $b;
      public function somefun() {
          $this->a = $a;
          $this->b = $b;
      }
  }
  echo '<br>';
  $obj = new SomeClass;
  echo $obj->a = 10;
  echo $obj->b = 20;
  echo '<br>';
  $obj2 = new someClass;
  echo $obj2->a = 10;
  echo $obj2->b = 20;
   var_dump($obj === $obj2);
