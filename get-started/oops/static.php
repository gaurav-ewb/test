<?php 

 
 class constantvar 
 {
     //define a constant with const keyword
     const CONSTANT = 'constant values';
     
     public function showConstant()
     {
         echo static::CONSTANT;
     }
 }
  echo constantvar::CONSTANT;
  echo '<br>';
  
  class myClass
  {
      const ADMIN = 'ADMIN';
      
      public function showAdmin()
      {
          echo static::ADMIN;
      }
  }
  
  $classname = "myClass";
  echo $classname::ADMIN ;
  
  echo '<br>';
  class classeditior
  {
      const Editior = 'Editior';
      
      public function showEditior() {
          return self::Editior;
      }
  }

   $class = new classeditior;
   $class->showEditior();
   echo $class::Editior;
