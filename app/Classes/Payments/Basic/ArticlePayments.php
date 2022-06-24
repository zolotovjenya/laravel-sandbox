<?php

namespace App\Classes\Payments\Basic;

use App\Classes\Payments\Implemented\StripePayment;
use App\Classes\Payments\Implemented\WorldpayPayment;
use App\Classes\Payments\Implemented\UapayPayment;

class ArticlePayments{
    private $payment;

    public function __construct($paymentType){
        switch ($paymentType) {
            case 'stripe':
                $this->payment = new StripePayment();
                break;

            case 'worldpay':
                $this->payment = new WorldpayPayment();
                break;

            case 'uapay':
                $this->payment = new UapayPayment();
                break;
        
            default:
                throw new Exception("Error", 1);
                
                break;
        }
    }

    public function getImage(){
        return $this->payment->getImage();
    }

    public function getTitle(){
        return $this->payment->getTitle();
    }
}