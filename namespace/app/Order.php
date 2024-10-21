<?php

namespace app\Order;


use app\UserManagment;

class Order {
  private $orderId;
  private $product;

  public function __construct($orderId, $product)
  {
    $this->orderId = $orderId;
    $this->product = $product;
  }
}