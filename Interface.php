<?php

interface PaymentInterface {
    public function processPayment($amount);
    public function refundPayment($amount);
}

class CreditCardPayment implements PaymentInterface {

  private $cardNumber;

  public function __construct($cardNumber) {
    $this->cardNumber = $cardNumber;
  }
  

  public function processPayment($amount){
    echo "Payment " . $amount . " card number" . $this->cardNumber;
  }

  public function refundPayment($amount){
       echo "Refund " . $amount . " card number" . $this->cardNumber;
  }

  public function sum() {
    echo 5+6;
  }

}

class PayPal implements PaymentInterface {

  private $email;

  public function __construct($email) {
    $this->email = $email;
  }

  public function processPayment($amount){
      echo "Payment" . $amount . "card number" . $this->email;
  }
  public function refundPayment($amount){
    echo "Payment" . $amount . "card number" . $this->email;
  }

}


$payment1 = new CreditCardPayment("3443-3434-4343-4343");

$payment1->processPayment(500);
echo "<br>";
$payment1->refundPayment(200);

echo "<br>";

// ------------------------------

$payment2 = new PayPal("mehdi@gmail.com");

$payment2->processPayment(1000);
echo "<br>";
$payment2->refundPayment(600);

