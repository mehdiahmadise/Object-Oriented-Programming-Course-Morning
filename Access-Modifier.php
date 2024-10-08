<?php

// access modifiers
// public -> property || method
// private
// protected

class Cart{

  private $cart;
  private $password;
  private $name;

  public function __construct($cart, $password, $name)
  {
    $this->cart = $cart;
    $this->password = $password;
    $this->name = $name;
  }

  public function showCartDetail() {
    if($this->name == "Ahmad") {
      return "Your Cart is $this->cart and Your password is $this->password and your name $this->name";
    }
    else {
      return "You can not access this cart detail";
    }
  }

}

$cart = new Cart('423534543534', '12234', 'Mehdi');

echo $cart->showCartDetail();

// protected:

// inheritance 
// parent class -> subclass || child class


class Vehicle {

  private $model = "Corolla";
  protected $color = "red";
  public $weight = 120;

  public function getModel() {
    return $this->model;
  }
}

// $vehicle = new Vehicle();
// $vehicle->weight;


// class Car extends Vehicle {
  
//   public function showModel() {
//     return "This is model $this->model and this is color $this->color and weight $this->weight";
//   }

//   public function showColor() {
//     return $this->color;
//   }
// }



// class Animal {
//    public function showModel() {
//     return "This is model $this->model and this is color $this->color and weight $this->weight";
//    }
// }