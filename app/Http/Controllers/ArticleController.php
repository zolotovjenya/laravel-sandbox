<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Classes\Payments\Basic\ArticlePayments;

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
                Factory article payments
            */
            $payment = new ArticlePayments($article->payment_type);
        }

        return view('articles.article', ['article' => $article, 'payment' => $payment->getImage()]);
    }
}