<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = '';
        $name = '';

        if(rand(1,2) == 1){
            $gender = 'Male';
            $name = $this->faker->name('male');            
        }else{
            $gender = 'Female';
            $name = $this->faker->name('female'); 
        } 

        return [
            'fullname' => $name,
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'birthdate' => $this->faker->dateTimeBetween('1970-01-01', '2010-01-01'),
            'gender' => $gender,
            'address' => $this->faker->secondaryAddress(),
            'email_verified_at' => now(),
            'password' => bcrypt('seed'), // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
