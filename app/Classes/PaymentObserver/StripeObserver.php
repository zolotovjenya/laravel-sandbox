<?php

namespace App\Classes\PaymentObserver;

class StripeObserver implements \SplObserver
{
    public function update(\SplSubject $subject): string
    {
        return "Stripe<br/>";
    }
}