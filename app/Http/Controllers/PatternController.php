<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\ArticleObserver\Subject;
use App\Classes\ArticleObserver\ArticleStripeObserver;
use App\Classes\ArticleObserver\ArticleWordlpayObserver;
use App\Classes\ArticleObserver\ArticleUapayObserver;
use Illuminate\Support\Arr;

class PatternController extends Controller{
    public function observer(){
        $res = [];

        $subject = new Subject();

        $stripe = new ArticleStripeObserver();
        $subject->attach($stripe);

        $worldpay = new ArticleWordlpayObserver();
        $subject->attach($worldpay);

        $uapay = new ArticleUapayObserver();
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