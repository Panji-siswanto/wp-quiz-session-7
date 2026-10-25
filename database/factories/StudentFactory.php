<?php

namespace Database\Factories;

use App\Models\Major;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    // protected $model = Student::class;

    public function definition(): array
    {
        return [
            'nim'      => $this->faker->unique()->numerify('2602####'),
            'name'     => $this->faker->name(),
            'major_id' => Major::inRandomOrder()->value('id') ?? 1,
        ];
    }
}