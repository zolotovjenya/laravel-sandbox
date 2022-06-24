<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Article;

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
