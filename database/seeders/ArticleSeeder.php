<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [ 
            [ 
                'title' => 'Test1',
                'content' => 'Content1',
                'payment_type' => 'stripe'
            ],
            [ 
                'title' => 'Test2',
                'content' => 'Content2',
                'payment_type' => 'worldpay'
            ], 
            [ 
                'title' => 'Test3',
                'content' => 'Content3',
                'payment_type' => 'uapay'
            ],
        ];

        foreach($articles as $article){
            Article::create([
               'title' => $article['title'],
               'content' => $article['content'],
               'payment_type' => $article['payment_type']
            ]);
        }
    }
}
