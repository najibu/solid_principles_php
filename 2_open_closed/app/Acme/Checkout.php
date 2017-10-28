<?php

namespace Acme;

interface PaymentMethod
{
    public function acceptPayment($receipt);
}

class CashPaymentMethod implements PaymentMethod
{
    public function acceptPayment($receipt)
    {
        // accept the cash
    }
}

class Checkout
{
    public function begin(Receipt $receipt, PaymentMethod $payment)
    {
        $payment->acceptPayment($receipt);
    }
}
