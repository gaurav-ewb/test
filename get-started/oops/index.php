<?php 
 echo '<h3>This is autoload example</h3>';
 spl_autoload_register( function($className)
 {
     include $className. '.php';
 });
  
  $obj1 = new autoload1;
  $obj2 = new autoload2;
  
  echo $obj1->vars;
  echo '<br>';
  echo $obj2->var;
 
 echo '<br>';
  //decleration of class
  
  echo '<h3>This is construct function</h3>';
  include 'construct-function.php';
  echo '<h3>on static example</h3>';
  include 'non-static.php';
  echo '<h3>Parent construct example</h3>';
  include 'parent_construct.php';
  echo '<h3>Visibility</h3>';
  include 'visibility.php';
  echo '<h3>Inheritance</h3>';
  include 'inheritance.php';
  echo '<h3>Abstraction example</h3>';
  include 'abstraction.php';
  echo '<h3>trait Example</h3>';
  include 'trait.php';
  echo '<h3>anonymus</h3>';
  include 'anonymos.php';
  echo '<h3>Object iterable</h3>';
  include 'iterable.php';
  echo '<h3>Magic function</h3>';
  include 'magic.php';
  echo '<h3>final keyword</h3>';
  //include 'final.php'; 
  echo '<h3>object-cloning</h3>';
  include 'objectcloning.php';
  echo '<h3>Compare Object';
  include 'compare-object.php';
