<?php

// abstract class Animal {
//   abstract public function makeSound();

//   public function sleep() {
//     echo "Sleeping ...";
//   }
// }


// class Dog extends Animal {
//    public function makeSound() {
//       return "Pars...";
//     }
// }

// class Cat extends Animal {
//   public function makeSound()
//   {
//     return "Mew...";
//   }
// }


// class BlackCat extends Cat {

//   public function speed() {
//     return "1200";
//   }
// }

// $black_cat = new BlackCat();

// echo $black_cat->speed();

interface Flyable {
  public function fly();
}

interface Swimmable {
  public function swim();
}

interface Runnable {
  public function run();
}

class Duck implements Flyable, Swimmable, Runnable {

  public function fly() {
     return "Flying";
  }

  public function swim() {
     return "Swimming";
  }

  public function run() {
    return "Running";
  }

}


$duck = new Duck();

echo $duck->fly();
echo "<br>";
echo $duck->run();