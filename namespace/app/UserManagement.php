<?php

namespace app\UserManagment;

class User {
  private $name;
  private $email;

  public function __construct($name, $email)
  { 
     $this->email = $email;
     $this->name = $name;
  }

  public function getUserInfo() {
    return "something";
  }
}