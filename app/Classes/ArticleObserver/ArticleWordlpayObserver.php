<?php

namespace App\Classes\ArticleObserver;

class ArticleWordlpayObserver implements \SplObserver
{
    public function update(\SplSubject $subject): string
    {
        return "Worldpay<br/>";
    }
}