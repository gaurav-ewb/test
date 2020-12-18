<?php
    // parent class
    class Vehicle {
        // public property name
        public $name;
        
        // public function start
        public function start() {
            echo $this->name. " - Engine start...<br/>";
        }
        
        // public function stop
        public function stop() {
            echo $this->name. " - Engine stop...<br/>";
        }
    }
    
    // child class
    class Car extends Vehicle {
        
        public function drive() {
            echo "I am " . $this->name . "<br/>";
            echo "Lets go on a drive...";
        }   
    }
    
    // child class
    class Motorcycle extends Vehicle {
        
      //Add more functionality
        
    }
    
    $car = new Car();
    $car->name = "Mercedes benz";
    $car->start();
    $car->drive();
    
?>
