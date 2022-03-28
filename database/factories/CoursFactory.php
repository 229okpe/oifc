<?php

namespace Database\Factories;

use App\Models\Cours;
use Illuminate\Database\Eloquent\Factories\Factory;

class coursFactory extends Factory
{
    protected   $model=Cours::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

      
        return [
           'titre' => $this->faker->company,
           'id_cours' =>$this->faker->randomNumber,
           'description' =>$this->faker->title,
           'image' =>$this->faker->title,
           'nbre_chapitre' =>$this->faker->randomNumber,
           'montant' =>$this->faker->randomNumber
        ];
    }
}
