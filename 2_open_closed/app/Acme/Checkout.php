<?php namespace Acme;

interface PaymentMethodInterface {
  public function acceptPayment($receipt);
}

class CashPaymentMethod implements PaymentMethodInterface {
  public function acceptPayment($receipt)
  {
    //
  }
}

class Checkout {
  public function begin(Receipt $receipt, PaymentMethodInterface $payment)
  {
    $payment->acceptPayment($receipt);
  }
}