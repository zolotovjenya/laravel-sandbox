<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Classes\Payments\Basic\ArticlePayments;
use App\Classes\ArticleSingleton\ArticleExtendedSingleton;
use Illuminate\Support\Facades\Cache;

class Article extends Model
{   
    use HasFactory;

    const CACHE_TIME = 20;

    static public function getCachedArticles($page){
        $key = 'home::cached::articles::'.$page;

        if(!Cache::get($key)){
            $article = ArticleExtendedSingleton::getInstance();
            $article->setAllArticles(Article::paginate(2));
            $data = $article->getAllArticles();
    
            $article = ArticleExtendedSingleton::getInstance();
            $article->setAllArticles(['faker' => []]);
            $data = $article->getAllArticles();

            Cache::put($key, $data[0], self::CACHE_TIME);
        }

        return Cache::get($key);
    }

    public function cutString(string $source, int $limit): string{
        $len = strlen($source);

        if($len < $limit) {
            return $source;
        }

        return substr($source, 0, $limit-3) . '...';
    }
}
