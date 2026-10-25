<?php

namespace Database\Seeders;

use App\Models\Lecture;
use App\Models\Major;
use App\Models\Profile;
use App\Models\Student;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

    //direct seeder to major table
        $faker = Faker::create('id_ID');
        $majorNames = [
            'Computer Science',
            'Information Systems',
            'Visual Communication Design',
            'Data Science',
        ];
        foreach ($majorNames as $majorName) {
            Major::create([
                'code'    => strtoupper($faker->unique()->bothify('MJ-###')),
                'name'    => $majorName,
                'faculty' => 'Faculty of ' . $faker->randomElement(['Computer Science', 'Engineering', 'Digital Design']),
            ]);
        }


        //lecture table via seeder file
        $this->call([
            LectureSeeder::class,
        ]);




        
        //Create 10 Students first via factory
        $students = Student::factory(10)->create();

        foreach ($students as $student) {
            // Create 1 Profile for each student
            Profile::factory()->create([
                'student_id' => $student->id,
            ]);

            // B. Attach 2 random Lecture IDs (from IDs 1..6) to this student (Many-to-Many)
            $randomLectureIds = $faker->randomElements([1, 2, 3, 4, 5, 6], 2);
            $student->lectures()->attach($randomLectureIds);
        }
    }
}
