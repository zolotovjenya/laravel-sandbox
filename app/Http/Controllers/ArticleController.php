<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Facade\ArticleFacade;

class ArticleController extends Controller
{
    /*
        Singleton example
        $data -  has 2 keys
    */
    public function articles(Request $req){
        $articles = Article::getCachedArticles($req->page);
        
        return view('welcome', ['articles' => $articles]);
    }

    public function article(Request $request){        
        $articleFacade = new ArticleFacade();

        $data = $articleFacade->getArticle($request);

        return view('articles.article', [
            'article' => $data['article'], 
            'payment' => $data['payment'], 
            'sponsor' => $data['sponsor']
        ]);
    }
}