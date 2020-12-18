
<?php 
class ParentClass 
	{ 
        public $abc;
		function __construct($abc) 
		{ 
          return  $this->abc = $abc;
		} 
	} 

class ChildClass extends Parentclass 
	{ 
		function __construct($abc) 
		{ 
			parent::__construct($abc); 
			echo $this->abc; 
		} 
	} 
$obj = new ParentClass("abc"); 
$obj = new ChildClass("hello"); 
?> 
<!-- 
  class parentClass {
      
       public $fname;
       public $lname;
     public function __construct($fname, $lname)
      {
         echo $this->fname = $fname;
         echo $this->lname = $lname;
      }
  }
  
  class child extends parentClass {
   public function __construct( $fname, $lname) {
        parent::__construct($fname, $lname); 
    }
  }
   $object = new parentClass();
   $object2 = new child('gaurav', 'sharma'); -->
