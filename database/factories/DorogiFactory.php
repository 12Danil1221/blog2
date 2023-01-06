<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factory;

use App\Models\Dorogi;


class DorogiFactory extends Factory
{

    protected $model = Dorogi::class;

    // @return array

    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'content' => $this->faker->text,
            'price' => $this->faker-> rand(1, 10),
        'category_id' => 1,

        ];
    }
}


