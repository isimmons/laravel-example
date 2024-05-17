<?php

namespace Isimmons\Example\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Isimmons\Example\Models\MyModel;

class MyModelFactory extends Factory
{
    protected $model = MyModel::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'options' => json_encode(['languages' => 'en']),
        ];
    }
}
