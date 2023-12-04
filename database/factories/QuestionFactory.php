<?php

namespace Database\Factories;

use App\Question;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => faker()->text(),
            'option_1' => faker()->name(),
            'option_2' => faker()->name(),
            'option_3' => faker()->name(),
            'option_4' => faker()->name(),
            'correct_answer' => rand(1,4),
            'state' => 1,
            'createdOn' => now(),
            'updatedOn' => now()
        ];
    }
}