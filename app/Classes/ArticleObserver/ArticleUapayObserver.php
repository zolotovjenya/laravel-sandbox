<?php

namespace App\Classes\ArticleObserver;

class ArticleUapayObserver implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        return "Uapay<br/>";
    }
}