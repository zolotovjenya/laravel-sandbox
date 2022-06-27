<?php

namespace App\Facade;

use App\Models\Article;

class ArticleFacade{
    public function getArticle($id){
        $articleModel = new Article();

        $article = $articleModel::where('id', $id)->first();

        if($article){
            /*
                Payments Factory
            */
            $paymentType = \App\Classes\Payment\PaymentFactory::initial("\App\Classes\Payment\Data\\".ucfirst($article->payment_type));
            $payment = $paymentType;

            /*
                Abstract Sponsor Factory
            */
            $sponsorClass = '\App\Classes\Sponsor\Factory\\'.ucfirst($article->sponsor).'Factory';
            $sponsor = new $sponsorClass();
        }

        return ['article' => $article, 'payment' => $payment, 'sponsor' => $sponsor];
    }
}