<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Article;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreateArticle()
    {
        $article = Article::factory()->create([
            'id' => 1
        ]);

        $response = $this->get('/article/1');

        $response->assertStatus(200);
    }

    public function testRemoveArticle()
    {
        $article = Article::find(1)->first();
        $article->delete();

        $response = $this->get('/article/1');

        $response->assertNotFound();
    }
}
