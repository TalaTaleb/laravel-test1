<?php

namespace Database\Factories;

use App\Models\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    protected $model = Listing::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'company' => $this->faker->company(),
            'location' => $this->faker->city(),
            'website' => $this->faker->url(),
            'email' => $this->faker->safeEmail(),
            'tags' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'user_id' => \App\Models\User::factory(), // Make sure a user exists
        ];
    }
}
