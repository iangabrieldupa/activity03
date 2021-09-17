<?php

namespace Database\Factories;

use App\Models\Faculty;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacultyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Faculty::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Lastname' => $this->faker->word,
        'Firstname' => $this->faker->word,
        'Middlename' => $this->faker->word,
        'Birthdate' => $this->faker->word,
        'Gender' => $this->faker->word,
        'Address' => $this->faker->word,
        'Citizenship' => $this->faker->word,
        'Religion' => $this->faker->word,
        'Subject' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
