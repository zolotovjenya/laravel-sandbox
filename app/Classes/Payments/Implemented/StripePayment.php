<?php

namespace App\Classes\Payments\Implemented;

use App\Classes\Payments\Interfaces\PaymentInterface;

class StripePayment implements PaymentInterface{
    public function getImage(){
        return 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Stripe_Logo%2C_revised_2016.svg/2560px-Stripe_Logo%2C_revised_2016.svg.png';
    }

    public function getTitle(){
        return 'Stripe';
    }
}