<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use App\Models\Track;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tracks = Track::all(); 
        $courses = Course::all();

        Student::factory(20)->create()->each(function ($student) use ($tracks, $courses) {
            $student->track()->associate($tracks->random());
            $student->save();

            $student->courses()->attach(
                $courses->random(3)->pluck('id')->toArray()
            );
        });
    }
}
