<?php

namespace App\Classes\Payment;

abstract class PaymentFactory{
    /**
     * Create new class
     */
    public static function initial($class)
    {
        return new $class();
    }

    abstract public function getImage();

    abstract public function getTitle();
}