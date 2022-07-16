<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->sentence($nbWords = 6, $variableNbWords = true),
            'content' => $this->faker->paragraph,
            'payment_type' => Arr::random(['stripe', 'worldpay', 'uapay']),
            'sponsor' => Arr::random(['hieneken', 'umbro', 'huawei'])
        ];
    }
}
