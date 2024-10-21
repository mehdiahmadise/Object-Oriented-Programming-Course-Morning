<?php

class PasswordHelper {
  
  public static function hashPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT);
  }

  public static function verifyPassword($password, $hash) {
    return password_verify($password, $hash);
  }
}



class User {

  private static $userCount = 0;

  private $username;
  private $email;
  private $passwordHash;

  public function __construct($username, $email, $passwordHash)
  {
    $this->username = $username;
    $this->email = $email;
    $this->passwordHash = PasswordHelper::hashPassword($passwordHash);
    self::$userCount++;
  }

  public static function getUserCount() {
    return self::$userCount;
  }

  public function checkPassword($password) {

    return PasswordHelper::verifyPassword($password, $this->passwordHash);

  }

}


$user1 = new User('mehdi', 'mehdi@gmail.com', '12345678');
$user2 = new User('Rahmatullah', 'admin@gmail.com', 'secret123');
$user3 = new User('Naweed', 'naweed@gmail.com', 'naweed123');

echo "Total users: " . User::getUserCount();

echo '<br>';
echo $user3->checkPassword("naweed123") ? "Password is correct" : "password is not Correct";