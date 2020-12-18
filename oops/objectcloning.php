<?php 
class objectcloning {
   public $data1;
   public $data2;
   public $data3;
}
$obj = new objectcloning;
echo $obj->data1 = "Gaurav"."\n";
echo $obj->data2 = "Tarun"."\n";
echo $obj->data3 = "Chet Ram"."\n";
$copy = clone $obj;
echo $copy->data1 = "Naveen"."\n";
echo $copy->data2 = "Adarsh"."\n";
echo $copy->data3 = "Amit"."\n";
