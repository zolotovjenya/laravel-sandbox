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
        /*$articles = [ 
            [ 
                'title' => 'Test1',
                'content' => 'Content1',
                'payment_type' => 'stripe',
                'url' => 'test1',
                'sponsor' => 'hieneken'
            ],
            [ 
                'title' => 'Test2',
                'content' => 'Content2',
                'payment_type' => 'worldpay',
                'url' => 'test2',
                'sponsor' => 'umbro'
            ], 
            [ 
                'title' => 'Test3',
                'content' => 'Content3',
                'payment_type' => 'uapay',
                'url' => 'test3',
                'sponsor' => 'huawei'
            ],
        ];

        foreach($articles as $article){
            Article::create([
               'title' => $article['title'],
               'content' => $article['content'],
               'payment_type' => $article['payment_type'],
               'url' => $article['url'],
               'sponsor' => $article['sponsor']
            ]);
        }*/

        Article::factory(3)->create();
    }
}
