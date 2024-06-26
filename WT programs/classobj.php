<?php
// Define a class
class Car {
    // Properties
    public $make;
    public $model;
    public $year;

    // Constructor
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Method
    public function displayInfo() {
        echo "Car: $this->year $this->make $this->model<br>";
    }
}

// Create an object of the Car class
$car1 = new Car("Toyota", "Corolla", 2020);

// Call the method
$car1->displayInfo();
?>
