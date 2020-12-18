<?php
class myclass {
  public $value1 ="value1";
  public $value2 = "value2";
  public $value3 = "value3";

//    protected $protected = "Protected";
//    private  $private  = "Private";
 
    public function iterableVisible() {
            echo "myclass::iterableVisible";
            echo '<br>';
            foreach ($this as $key => $value) {
                print "$key => $value";
            }
    }
}
$class = new MyClass();

foreach($class as $key => $value) {
    print "$key => $value";
}
echo "\n";
$class->iterableVisible();
