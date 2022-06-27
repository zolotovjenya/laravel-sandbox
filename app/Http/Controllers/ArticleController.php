<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Classes\Payments\PaymentFactory;

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
                Factory payments
            */
            $paymentType = PaymentFactory::initial("\App\Classes\Payments\\".ucfirst($article->payment_type));
            $payment = $paymentType;
        }

        return view('articles.article', ['article' => $article, 'payment' => $payment]);
    }
}