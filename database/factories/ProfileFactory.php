<?php

namespace Database\Factories;

use App\Models\Profile;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    // protected $model = Profile::class;

    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),
            'phone'      => $this->faker->phoneNumber(),
            'address'    => $this->faker->streetAddress(),
            'city'       => $this->faker->city(),
            'birth_date' => $this->faker->dateTimeBetween('-23 years', '-18 years')->format('Y-m-d'),
        ];
    }
}
