<?php
   Interface MyInterface {
      public function getName();
      public function getAge();
   }
   class MyClass implements MyFirstInterface{
      public function getName() {
            echo "My name A".'<br>';
      }
      public function getAge(){
            echo "My Age 12";
      }
   }
   $obj = new MyClass;
   $obj->getName();
   $obj->getAge();
?>
<?php
   interface a{
      public function printData();
   }
   interface b{
      public function getData();
   }
   interface c extends a, b{
      public function addData();
   }
   class d implements c{
      public function printData(){
         echo "I am printing";
      }
      public function getData(){
         echo "I am reading data";
      }
      public function addData(){
         echo "I am adding"
      }
   }
   $myobj = new class d();
   $myobj->printData();
   $myobj->addData();
?>
