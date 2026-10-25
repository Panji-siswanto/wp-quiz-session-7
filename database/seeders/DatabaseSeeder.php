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
        
        $lectureIds = Lecture::pluck('id')->toArray();
        //Create  10 Student & Profile & attach 2-3 lectures
        Student::factory(10)->create()->each(function (Student $student) use ($faker, $lectureIds) {
            Profile::factory()->create([
                'student_id' => $student->id,
            ]);

            $randomLectures = $faker->randomElements($lectureIds, $faker->numberBetween(2, 3));
            $student->lectures()->attach($randomLectures);
        });
    }
}
