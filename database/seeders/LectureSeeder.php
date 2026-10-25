<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lecture;
use Faker\Factory as Faker;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds for the lectures table using Faker.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $courseSubjects = [
            'Web Programming',
            'Database Systems',
            'Human & Computer Interaction',
            'Software Engineering',
            'Artificial Intelligence',
            'Computer Networks',
        ];

        foreach ($courseSubjects as $subject) {
            Lecture::create([
                'code'          => strtoupper($faker->unique()->bothify('COMP####')),
                'title'         => $subject,
                'lecturer_name' => $faker->name(),
                'credits'       => $faker->randomElement([2, 3, 4]),
            ]);
        }
    }
}
