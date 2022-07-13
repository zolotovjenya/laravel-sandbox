<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\PaymentObserver\Subject;
use App\Classes\PaymentObserver\StripeObserver;
use App\Classes\PaymentObserver\WordlpayObserver;
use App\Classes\PaymentObserver\UapayObserver;
use Illuminate\Support\Arr;

class PatternController extends Controller{
    public function observer(){
        $res = [];

        $subject = new Subject();

        $stripe = new StripeObserver();
        $subject->attach($stripe);

        $worldpay = new WordlpayObserver();
        $subject->attach($worldpay);

        $uapay = new UapayObserver();
        $subject->attach($uapay);

        $res[0] = $subject->notify();

        $subject->detach($uapay);

        $res[1] = $subject->notify();

        $subject->detach($worldpay);

        $res[2] = $subject->notify();

        return view('patterns.observer', [
            'data' => $res[Arr::random([0,1,2])]
        ]);
    }
}