<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    
    public function definition()
    
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        $city = $this->faker->randomElement(['Jakarta', 'Surabaya']);
        $state = $this->faker->randomElement(['Jawa timur', 'Jawa barat']);
        $country = $this->faker->randomElement(['Indonesa', 'Singapore']);
        return [
            "name" => $this->faker->name,
            "phone" => $this->faker->phoneNumber,
            "gender" => $gender,
            "password" => $this->faker->password,
            "email" => $this->faker->email,
            "age" => $this->faker->randomNumber(2),
            "joindate" => $this->faker->date,
            "address" => $this->faker->address,
            "city" => $city,
            "state" => $state,
            "country" => $country,
            "postcode" => $this->faker->randomNumber(5),
            "photo" => $this->faker->image,
            "description" => $this->faker->text

        ];
    }
}
