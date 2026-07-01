<?php

namespace Database\Factories;

use App\Models\contacts;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends Factory<contacts>
 */
class ContactsFactory extends Factory
{
    protected $model = User::class;
    
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => fake(),
            'phone_number' => fake()->sentence(), 
        ];
    }
}