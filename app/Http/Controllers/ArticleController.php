<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Facade\ArticleFacade;

class ArticleController extends Controller
{
    public function articles(){
        $article = new Article();

        $data = $article::all();

        return view('welcome', ['article' => $data]);
    }

    public function article($id){
        $articleFacade = new ArticleFacade();

        $data = $articleFacade->getArticle($id);

        return view('articles.article', [
            'article' => $data['article'], 
            'payment' => $data['payment'], 
            'sponsor' => $data['sponsor']
        ]);
    }
}