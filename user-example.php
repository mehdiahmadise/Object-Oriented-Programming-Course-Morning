<?php

class User {

    private $name;
    private $last_name;
    private $email;
    private $address;

    public function __construct($name, $last_name, $email, $address) {
        $this->name = $name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->address = $address;
    }

    // my setters

    public function setName($name) {
        $this->name = $name;
    }

    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    // my getters 
    public function getName() {
        return $this->name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getAddress() {
        return $this->address;
    }

    public function show() {
        echo "Name: " . $this->name . " " . $this->last_name . "\n";
        echo "Email: " . $this->email . "\n";
        echo "Address: " . $this->address . "\n";
    }
}

$user1 = new User("Rahmatullah", "abedi", "Rahmatulah.abedi@akdn.org", "Khair Khana, Kabul AFG");

$user2 = new User("Mehdi", "Ahmadi", "Mehdi@gmail.com", "Wazir Akbar khan, Kabul AFG");

$user1->show();
echo "\n";
$user2->show();

