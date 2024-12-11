<?php
class Car {
    public $model;
    public $make;
    public $year;
    public $color;

    public function __construct($model, $make, $year, $color) {
        $this->model = $model;
        $this->make = $make;
        $this->year = $year;
        $this->color = $color;
    }

    public function carInfo() {
        if ($this->year === 2022) {
            echo "The color of my " . $this->model . " in 2022 is " . $this->color . ".";
        } else {
            echo "The car model is from a different year.";
        }
    }
}

$myCar = new Car("Aston Martin", "Toyota", 2022, "Red");
$myCar->carInfo(); 

?>