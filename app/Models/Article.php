<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Classes\Payments\Basic\ArticlePayments;

class Article extends Model
{   
    use HasFactory;

    public function getPaymentTitleAttribute(){
        /* Use Payment factory */
        $payment = new ArticlePayments($this->attributes['payment_type']);

        return $payment->getTitle();
    }

    public function cutString(string $source, int $limit): string{
        $len = strlen($source);

        if($len < $limit) {
            return $source;
        }

        return substr($source, 0, $limit-3) . '...';
    }
}
