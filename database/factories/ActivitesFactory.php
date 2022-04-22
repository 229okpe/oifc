<?php

namespace Database\Factories;

use App\Models\Activites;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivitesFactory extends Factory
{
    protected   $activite=Activites::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "titre"=>$this->faker->title,
            "id_cours"=>$this->faker->randomNumber,
            "file"=>$this->faker->title,
            "telechargeable"=>$this->faker->boolean,
        ];
    }
}
