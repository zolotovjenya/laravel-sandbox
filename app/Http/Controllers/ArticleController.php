<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Facade\ArticleFacade;

class ArticleController extends Controller
{
    public function articles(){
        $articleFacade = new ArticleFacade();

        $data = $articleFacade->getAllArticles();
        
        return view('welcome', ['article' => $data]);
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