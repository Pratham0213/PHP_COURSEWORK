<?php
class Area {
    protected $area;

    public function getArea() {
        return $this->area;
    }
}

class Rectangle extends Area {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
        $this->area = $length * $width;
    }
}

class Square extends Area {
    private $side;

    public function __construct($side) {
        $this->side = $side;
        $this->area = $side * $side;
    }
}

class Cylinder extends Area {
    private $radius;
    private $height;
    private const PI = 3.14;

    public function __construct($radius, $height) {
        $this->radius = $radius;
        $this->height = $height;
        $this->area = 2 * self::PI * $radius * $height + 2 * self::PI * $radius * $radius;
    }
}
$rectangle = new Rectangle(5, 10);
echo "Rectangle area: " . $rectangle->getArea() . "\n";

$square = new Square(4);
echo "Square area: " . $square->getArea() . "\n";

$cylinder = new Cylinder(3, 5);
echo "Cylinder area: " . $cylinder->getArea() 
?>