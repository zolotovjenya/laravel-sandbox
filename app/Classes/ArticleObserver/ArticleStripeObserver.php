<?php

namespace App\Classes\ArticleObserver;

class ArticleStripeObserver implements \SplObserver
{
    public function update(\SplSubject $subject): string
    {
        return "Stripe<br/>";
    }
}