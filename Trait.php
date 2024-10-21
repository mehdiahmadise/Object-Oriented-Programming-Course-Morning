<?php

// trait MessageTrait {
//   public function showMessage($message) {
//     echo $message;
//   }
// }


// class User {
//   use MessageTrait;
// }

// class Product {
//   use MessageTrait;
// }

// class Project {
//   use MessageTrait;
// }

// $user = new User();

// $user->showMessage("Hello");

// echo "<br>";

// $project = new Project();

// $project->showMessage('Bye');



trait LoggerTrait {
  public function log($message) {
    echo "Logging message: $message";
  }
}

trait EmailTrait {
  public function sendEmail($email, $message) {
    echo "Sending email to $email with message: $message";
  }
}

class User {
  use LoggerTrait, EmailTrait;

  public function createUser($name) {
     echo "User $name created";
     echo "<br>";
     echo $this->log("User: $name  has been Created");
     echo "<br>";
     echo $this->sendEmail("naweed@gmail.com", "Welcome $name");
  }
}

$user = new User();
$user->createUser("Naweed");