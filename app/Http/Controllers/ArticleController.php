<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function articles(){
        $article = new Article();

        $data = $article::all();

        return view('welcome', ['article' => $data]);
    }

    public function article($id){
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

        return view('articles.article', ['article' => $article, 'payment' => $payment, 'sponsor' => $sponsor]);
    }
}