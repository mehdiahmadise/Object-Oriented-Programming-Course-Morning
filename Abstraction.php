<?php

// decrease complexsity
// increase focus
// abstract class, abstract method
abstract class Vehicle {

  protected $fuel;

  abstract public function move();

  public function stop() {
    echo "Stoping...";
  }

  public function setFuel($fuel) {
    $this->fuel = $fuel;
  }

  public function getFuel() {
    return $this->fuel;
  }

}

class Car extends Vehicle {
  public function move() {
      echo "This car movement with $this->fuel;";
  }
}

class Motorcycle extends Vehicle {
  public function move() {
    echo "This car movement with $this->fuel;";
  }
}

$myCar = new Car();
$myCar->setFuel('Super Petrol');
echo "<br>";
$myCar->move();
echo "<br>";
$myCar->stop();
echo "<br>";
echo "<br>";
$myMotor = new Motorcycle();
$myMotor->setFuel('Petrol');
$myMotor->move();
echo "<br>";
$myMotor->stop();