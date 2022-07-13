<?php

namespace App\Classes\PaymentObserver;

class UapayObserver implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        return "Uapay<br/>";
    }
}