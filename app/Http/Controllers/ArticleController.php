<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Facade\ArticleFacade;
use App\Classes\ArticleSingleton\ArticleExtendedSingleton;

class ArticleController extends Controller
{
    /*
        Singleton example
    */
    public function articles(){
        $article = ArticleExtendedSingleton::getInstance();
        $article->setAllArticles(Article::all());
        $data = $article->getAllArticles();

        $article = ArticleExtendedSingleton::getInstance();
        $article->setAllArticles(['faker' => []]);
        $data = $article->getAllArticles();
        
        return view('welcome', ['article' => $data[0]]);
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