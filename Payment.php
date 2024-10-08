<?php

abstract class Payment {

  protected $amount;

  abstract public function processPayment();

  public function setAmount($amount) {
    $this->amount = $amount;
  }

  public function getAmount() {
    return $this->amount;
  }
}


class CreditCardPayment extends Payment {

  private $cardNumber;
  private $username;
  private $expiration_time;
  private $cvc;
  private $bank;

  public function __construct($cardNumber) {
    $this->cardNumber = $cardNumber;
  }

  public function processPayment() {
      echo "Payment $this->amount with this card number $this->cardNumber";
  }
}


  class PayPalPayment extends Payment {

    private $email;
    private $username;

    public function __construct($email) {
      $this->email = $email;
    }

    public function processPayment() {
        echo "Payment $this->amount with this card number $this->email";
    }
  }


  $payment = new CreditCardPayment("234-556-322-456");

  $payment->setAmount(500);
  $payment->processPayment();
  
  echo "<br>";
  echo "<br>";


  $payment2 = new PayPalPayment("mehdi@gmail.com");

  $payment2->setAmount(300);

  $payment2->processPayment();

