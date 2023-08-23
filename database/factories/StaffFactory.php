<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use App\Models\Staff;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'password' => Hash::make('password'),
            'role' => $this->faker->randomElement(['admin', 'editor']),
            'address'=> $this->faker->address,
            'gender'=> $this->faker->randomElement([config('global.GENDER_MALE'), config('global.GENDER_FEMALE')]),
            'status' => $this->faker->randomElement([config('global.STATUS_LOCKED'), config('global.STATUS_UNLOCKED')]),
        ];
    }
}
