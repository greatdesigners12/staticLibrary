<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Writer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition()
    {
         static $number = 0;
        
        return [
            "writer_name" => $this->faker->name,
            "coverphoto" => "anime.jfif",
            "title" => $this->faker->title,
            "synopsis" => $this->faker->text,
            "writer_id" => $number++
        ];
    }
    
}
