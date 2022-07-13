<?php

namespace App\Classes\PaymentObserver;

class WordlpayObserver implements \SplObserver
{
    public function update(\SplSubject $subject): string
    {
        return "Worldpay<br/>";
    }
}