<?php

namespace App\Facade;

use App\Models\Article;
use App;
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
                    Payments Factory called from PaymentServiceProvider like dependency injection
                */
                $paymentType = App::make('\App\Classes\Payment\PaymentFactory', [$article->payment_type]);
                $payment = $paymentType;

                /*
                    Abstract Sponsor Factorys
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