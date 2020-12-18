<?php 
/**
 * 
 */
trait Reader
{
    public function add($var1, $var2) {
        return $var1  + $var2;
    }
}
/**
 * 
 */
trait Writer
{
    public function multiplication($var1, $var2) {
        return $var1*$var2;
    }
}

class file {
    use Reader;
    use Writer;
    public function calculate($var1,$var2) {
        echo "Result of addition:" .$this->add($var1, $var2). "\n";
        echo '<br>';
        echo "Result of multiplication:" .$this->multiplication($var1, $var2);
    } 
}
$result = new file;
$result->calculate(5,3);
