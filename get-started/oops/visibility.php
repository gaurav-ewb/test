<?php
 class visibility 
 {
     public $variable1;
     public $variable2;
     
     public function demo() {
        echo $this->variable1 = "This is public visibility example";
         $this->variable2;
     }  
 }
 $obj = new visibility;
 $obj->demo();
 
 class abc
 {
	private $property = 'property'; // a private property
	private function privateMethod() { // a private method
		echo $this -> property; // this is valid
	}
}

echo '<h3>This is protected example</h3>';
// Base Class 
class pro { 
	protected $x = 500; 
	protected $y = 500; 
			
	// Subtraction Function 
	function sub() 
	{ 
		echo $sum=$this->x-$this->y . "<br/>"; 
	}	 
} 

// SubClass - Inherited Class 
class child extends pro { 
	function mul() //Multiply Function 
	{ 
		echo $sub=$this->x*$this->y; 
	} 
} 

$obj= new child; 
$obj->sub(); 
$obj->mul(); 
?> 
