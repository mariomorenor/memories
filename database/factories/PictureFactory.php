<?php

namespace Database\Factories;

use App\Models\Picture;
use Illuminate\Database\Eloquent\Factories\Factory;

class PictureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Picture::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "book_id"=>$this->faker->numberBetween(1,100),
            "photo_url"=>$this->faker->imageUrl(400,400,"cats"),
            "description"=>$this->faker->text(200),
            "title"=>$this->faker->words(3,true),
            "date"=>$this->faker->date("Y-m-d")
        ];
    }
}
