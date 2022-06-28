<?php

namespace App\Facade;

use App\Models\Article;
use Illuminate\Support\Facades\Validator;
use App\Classes\ArticleSingleton\ArticleExtendedSingleton;

class ArticleFacade{
    public function getArticle($request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if (!$validator->fails()) {
            abort(404);
        } else {
            $articleModel = new Article();

            $article = $articleModel::where('id', $request->id)->first();

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
            } else {
                abort(404);
            }

            return ['article' => $article, 'payment' => $payment, 'sponsor' => $sponsor];
        }
    }
}