<?php

class User {

  private $name;
  private $age;
  private $salary;

  public function setName($n, $a, $s) {

    if(strlen($n) > 3) {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;

    }else {
       return "Your name is not valid";
    }
    
  }

  public function getName() {

      return $this->name;
  }

  public function showDetail() {
    return "Name: $this->name, Age: $this->age, Salary: $this->salary";
  }
}

$user = new User(); // object and initialize 

$user->setName("Mehdi", 22, 2000);

// echo($user->getName());

echo ($user->showDetail());