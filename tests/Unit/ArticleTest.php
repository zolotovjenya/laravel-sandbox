<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Article;
use App\Facade\ArticleFacade;
use App\Classes\ArticleSingleton\ArticleExtendedSingleton;

class ArticleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testArticleCut()
    {
        $article = new Article();

        $this->assertEquals($article->cutString('Petro', 1), "Pet...");
    }
}
