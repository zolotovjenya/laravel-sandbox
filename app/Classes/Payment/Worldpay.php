<?php

namespace App\Classes\Payment;

class Worldpay extends PaymentFactory{
    public function getImage(){
        return 'https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-thumbnail/s3/082014/worldpay_logo_2014.fw_.png?itok=cN2AUjF5';
    }

    public function getTitle(){
        return 'Worldpay';
    }
}